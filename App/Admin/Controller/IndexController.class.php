<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->assign('name',session('admin'));
        $this->display('admin');
    }

    public function show($html){
        $this->display($html);
    }

    // 设置试卷
    public function set(){
        $this->display('set');
    }

    // 上一页，下一页获取页面逻辑 并展示所有题目
    public function showAllQuestion(){
        @$page=isset($_GET['page'])?$_GET['page']:1;
        $this->assign('page',$page);
        $this->assign('next_page',$page+1);
        $next_page=$page+1;
        $last_page=$page-1;
        if($page-1<=0){
            $this->assign('last_page',"<b><strong>上一页</strong></b>");
        }else{
            $this->assign('last_page',"<a href='/exam/index.php/Admin/index/showAllQuestion?page={$last_page}'><strong>上一页</strong></a>");
        }
        $res=$this->nextPage($next_page);
        if(json_decode($res)->Status==201){
            $this->assign('next_page',"<b><strong>下一页</strong></b>");
        }else{
            $this->assign('next_page',"<a href='/exam/index.php/Admin/index/showAllQuestion?page={$next_page}'><strong>下一页</strong></a>");
        }
        $this->display('allquestion');
    }
    

    // 取得所有题目接口
    public function showQuestion($page){
        $sql=D('Question');
        $res=$sql->getQuestion($page);
        if($res){
            $res['Status']=200;
            echo json_encode($res);
        }else{
            $res['Status']=201;
            echo json_encode($res);    
        }
    }

    public function nextPage($page){
        $sql=D('Question');
        $res=$sql->getQuestion($page);
        if($res){
            $res['Status']=200;
            return json_encode($res);
        }else{
            $res['Status']=201;
            return json_encode($res);    
        }
    }


    // 评分 展示学生成绩页面
    public function score(){
        $golds=D('Golds');
        // $stu=D('User');
        $res=$golds->getInfo(1);
        if($res){
            for($i=0;$i<16;$i++){
                if($res[$i]['id']){
                    $this->assign('num_'.($i+1),$res[$i]['id']);
                    $this->assign('stunum_'.($i+1),$res[$i]['stunum']);
                    if($res[$i]['flag']==1){
                        $this->assign('submit_'.($i+1),"是");
                        $question=D('Question');
                        $exam=D('Exam');
                        $question_id=$exam->getQuestion($res[$i]['stunum']);
                        $question_id=explode(',', $question_id);
                        $stu_answer_string=explode(',', $res[$i]['answer']);
                        // var_dump($stu_answer);
                        $src=0;
                        for($j=0;$j<10;$j++){
                            $answer=$question->getAnswer($question_id[$j]);
                            $stu_answer="answer_".$stu_answer_string[$j];
                            // var_dump($stu_answer);
                            // var_dump($answer);
                            if($stu_answer==$answer){
                                $src+=10;
                            }
                        }
                        $this->assign('src_'.($i+1),$src);         
                    }else{
                        $this->assign('submit_'.($i+1),"否");
                    }
                }else{
                    $this->assign('num_'.($i+1), '&nbsp');
                }
            }
        }else{
            $res['Status']=201;
            echo json_encode($res);    
        }
        $this->display('score_students');

    }


    // 添加用户  201为不能为空  202为存在用户提示
    public function addStu($stunum,$name,$pw){
        $user=D('User');
        if($stunum==''||$name==''||$pw==''){
            $return['Status']=201;
            exit(json_encode($return));
        }else{
            $res=$user->addUser($stunum,$name,$pw);
            if($id==1){
                $return['Status']=200;
                exit(json_encode($return));
            }else{
                $return['Status']=202;
                exit(json_encode($return));
            }
        }
    }

    // 展示新增问题页
    public function showAddQuestion(){
        $this->display('addquestion');
    }

    // 新增题目处理
    public function addQuestion($question,$answer_1,$answer_2,$answer_3,$answer_4,$answer){
        $sql=D('Question');
        $add['question']=$question;
        $add['answer_1']=$answer_1;
        $add['answer_2']=$answer_2;
        $add['answer_3']=$answer_3;
        $add['answer_4']=$answer_4;
        $add['answer']=$answer;
        if($question==''||$answer_1==''||$answer_2=''||$answer_3=''||$answer_4=''||$answer=''){
            $return['Status']=201;
            exit(json_encode($return));
        }else{
            $sql->addQuestion($add);
            $return['Status']=200;
            exit(json_encode($return));
        }
    }


    // 编辑题目 201无数据输入 200传输成功 201
    public function editQuestion(){
        $sql=D('Question');
        $add['question']=$_REQUEST['question'];
        $add['answer_1']=$_REQUEST['answer_1'];
        $add['answer_2']=$_REQUEST['answer_2'];
        $add['answer_3']=$_REQUEST['answer_3'];
        $add['answer_4']=$_REQUEST['answer_4'];
        $add['answer']=$_REQUEST['answer'];
        var_dump($add);
        if($question==''||$answer_1==''||$answer_2=''||$answer_3=''||$answer_4=''||$answer=''){
            $return['Status']=201;
            exit(json_encode($return));
        }else{
            $sql->editQuestion($add);
            $return['Status']=200;
            exit(json_encode($return));
        }
    }
}