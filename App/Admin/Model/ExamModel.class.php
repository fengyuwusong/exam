<?php 
namespace Admin\Model;
use Think\Model;

class ExamModel extends Model{
    // 获取考生题目id
    public function getQuestion($stunum){
        $exam=M('exam');
        $stu['stunum']=$stunum;
        $res=$exam->where($stu)->find();
        return $res['question_id'];
    }
}
?>