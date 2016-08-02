<?php 
namespace Admin\Model;
use Think\Model;

class QuestionModel extends Model{
    
/*    添加题目 add为数组
    add['question']为问题
    add['1']为选项1
    add['answer']为正确答案*/
    public function addQuestion($add){
        $sql=M('question');
        $id=$sql->add($add);
        return $id;
    }

    // 获取题目  page为第几页的题目
    public function getQuestion($page){
        $sql = M('question');
        $res=$sql->page($page,10)->select();
        return $res; 
    }

    // 获取正确答案，id为题目id
    public function getAnswer($id){
        $sql = M('question');
        $question['id']=$id;
        $res=$sql->where($question)->find();
        return $res['answer'];
    }

    // 编辑题目
    public function editQuestion($add){
        $sql = M('question');
        // if($sql->where)
        var_dump($add);
        // $id =  $sql->save($add); 
    }
}
?>