<?php 
namespace Home\Model;
use Think\Model;

class GoldsModel extends Model{

    //提取选择的答案
    public function getAnswer(){
        $golds=M('golds');
        $stu['stunum']=session('stunum');
        $res=$golds->where($stu)->find();
        if($res){
            $answer=explode(',', $res['answer']);
        }
        for($i=0;$i<10;$i++){
            if($answer[$i]){
                $flag=1;
                return $answer;
            }
        }
        if($flag!=1){
            return  false; 
        }
    }

    // 保存提交的答案
    public function saveAnswer($answer){
        $golds=M('golds');
        $stu['stunum']=session('stunum');
        $add['stunum']=session('stunum');
        $add['answer']=$answer;
        $add['flag']=0;
        $res=$golds->where($stu)->find();
        if(!$res){
            $id=$golds->add($add);
        }else{
            $id=$golds->where($stu)->save($add);
        }
    }

    // 确认提交答案
    public function submitAnswer($answer){
        $golds=M('golds');
        $stu['stunum']=session('stunum');
        $add['stunum']=session('stunum');
        $add['answer']=$answer;
        $add['flag']=1;
        $res=$golds->where($stu)->find();
        if(!$res){
            $id=$golds->add($add);
        }else{
            $id=$golds->where($stu)->save($add);
        }
    }

    // 获取flag
    public function getFlag($stunum){
        $golds=M('golds');
        $add['stunum']=$stunum;
        $res=$golds->where($add)->find();
        return $res['flag'];
    }
}
?>