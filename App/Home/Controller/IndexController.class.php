<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=utf-8");


class IndexController extends CommonController {

    // 展示问卷 
    public function index(){
        $stunum=session('stunum');
        $exam_model=D('Exam');
        $question_model=D('Question');
        $res=$exam_model->getExam($stunum);

        // 存在已经登录的学号
        if($res){
            $m=0;
            $question_id=explode(",", $res['question_id']);
            $answer_order=explode(',',$res['answer_order']);
            for($i=1;$i<count($question_id);$i++){
                $question=$question_model->getQuestion($question_id[$i-1]);
                for($j=1;$j<5;$j++,$m++){
                    $stu_answer_order='answer_'.$answer_order[$m];
                    $answer[$m]='<li class="click" onclick="javascript:selectThePlatform(this);"><input type="radio" name="'.$i.'" value='.$answer_order[$m].' onfocus="demo()"><label>'.$question[$stu_answer_order].'</label><br></li>';
                }
                 $str.=<<<EOF
                        <div class="question_all"  id="t1">
                            <div class="question"><span>{$i}.{$question['question']}</span></div>
                                <div  id="answer_1" class="answer">
                                    <ul>
                                        {$answer[($i-1)*4+0]}{$answer[($i-1)*4+1]}{$answer[($i-1)*4+2]}{$answer[($i-1)*4+3]}   
                                    </ul>
                                </div>
                            <div class="errorMessage"><span class="tips" id="T1">此题为必选题，请选择答案!</span></div>
                        </div>
EOF;
            }
        }
        else{
            $res=$question_model->get(10);
            // var_dump($res);
            for($i=1;$i<11;$i++){
                // 打乱数组
                $answer=array(
                            '<li class="click" onclick="javascript:selectThePlatform(this);"><input type="radio" name="'.$i.'" value="answer_1" onfocus="demo()"><label>'.$res[$i-1]["answer_1"].'</label><br></li>',
                            '<li class="click" onclick="javascript:selectThePlatform(this);"><input type="radio" name="'.$i.'" value="answer_2" onfocus="demo()"><label>'.$res[$i-1]["answer_2"].'</label><br></li>',
                            '<li class="click" onclick="javascript:selectThePlatform(this);"><input type="radio" name="'.$i.'" value="answer_3" onfocus="demo()"><label>'.$res[$i-1]["answer_3"].'</label><br></li>',
                            '<li class="click" onclick="javascript:selectThePlatform(this);"><input type="radio" name="'.$i.'" value="answer_4" onfocus="demo()"><label>'.$res[$i-1]["answer_4"].'</label><br></li>',    
                            );
                shuffle($answer);
                $str.=<<<EOF
                        <div class="question_all"  id="t1">
                            <div class="question"><span>{$i}.{$res[$i-1]['question']}</span></div>
                                <div  id="answer_1" class="answer">
                                    <ul>
                                        {$answer['0']}{$answer['1']}{$answer['2']}{$answer['3']}          
                                    </ul>
                                </div>
                            <div class="errorMessage"><span class="tips" id="T1">此题为必选题，请选择答案!</span></div>
                        </div>
EOF;

                //  question_id:题目id answer_order :选项顺序 
                for($j=0;$j<4;$j++){
                    if($i<10){
                        $answer_order.=substr($answer[$j],107,1).',';
                    }elseif($i<100){
                        $answer_order.=substr($answer[$j],108,1).',';
                    }else{
                        $answer_order.=substr($answer[$j],109,1).',';
                    }
                }
                $question_id.=$res[$i-1]['id'].',';
            }
            // 将试卷信息储存进数据库
            $arr=array(
                            'stunum'        =>$stunum,
                            'question_id'   =>$question_id,
                            'answer_order'  =>$answer_order,
                            'end_time'      =>time()+60*60*2,
                    );
            $exam_model->save($arr);
        }
        $this->assign('question',$str);
        $this->display();
    }


    // 保存提交答案
    public function saveAnswer(){
        $answer=$_POST['answer'];
        $golds=D('Golds');
        $golds->saveAnswer($answer);
        $return['Status']=200;
        $return['Message']='';
        exit(urldecode(json_encode($return)));
    }

    //确认提交试卷
    public function submit(){
        for($i=1;$i<11;$i++){
            $answer.=$_POST[$i].',';
            if(!$_POST[$i]){
                echo "第$i道题未完成~！";
                $flag=1;
            }
        }
        if($flag==1){
            $this->redirect('index/index');
        }else{
            $golds=D('Golds');
            $golds->submitAnswer($answer);
            session('stunum',null);
            $this->display('end');
        }
    }

    public function ecnd(){
        $this->display('end');
    }

    // 获取剩余时间
    public function getTime(){
        @$stunum=session('stunum');
        $exam_model=D('Exam');
        $time=$exam_model->getTime(session('stunum'));
        if(isset($time)){
            $return['Status']=200;
            $return['Message']='';
            $return['Time']=$time-time();
            // echo date("Y-m-d H:i:s",$time);
            exit(urldecode(json_encode($return)));
        }
    }

    // ajax获取已选答案接口
    public function getAnswer(){
        $golds=D('Golds');
        $res=$golds->getAnswer();
        if($res){
            $return['Status']=200;
            $return['Answer']=$res;
        }else{
            $return['Status']=201;
        }
        exit(urldecode(json_encode($return)));
    }
}