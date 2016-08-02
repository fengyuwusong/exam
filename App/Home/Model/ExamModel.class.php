<?php 
namespace Home\Model;
use Think\Model;

class ExamModel extends Model{
    // 随机获取题目 num为获取条数
    public function save($arr){
        $sql=M('exam');
        $res=explode(",",$arr['answer_order']);
        $id=$sql->add($arr);
    }
    // 取出已经存储的试卷
    public function getExam($stunum){
        $sql=M('exam');
        $stu['stunum']=$stunum;
        $res=$sql->where($stu)->find();
        if($res){
            return $res;
        }else{
            return false;
        }
    }
    public function getTime($stunum){
        $sql=M('exam');
        $stu['stunum']=$stunum;
        $res=$sql->where($stu)->find();
        if($res){
            return $res['end_time'];
        }
    }
}
?>