<?php 
namespace Home\Model;
use Think\Model;

class QuestionModel extends Model{
    // 随机获取题目 num为获取条数
    public function get($num){
        $sql=M('question');
        $res=$sql->order('rand()')->limit($num)->select();
        return $res;
    }
    
/*    添加题目 add为数组
    add['question']为问题
    add['1']为选项1
    add['answer']为正确答案*/
    public function addQuestion($add){
        $sql=M('question');
        $id=$sql->add($add);
        echo $id;
    }

    // 通过id获取题目  返回数组res
    public function getQuestion($question_id){
        $sql=M('question');
        $res['id']=$question_id;
        $res=$sql->where($res)->find();
        return $res;
    }
}
?>


