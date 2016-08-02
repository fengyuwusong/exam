<?php 
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
    public function addUser($stunum,$name,$pw){
        $sql=M('user');
        $stu['stunum']=$stunum;
        $stu['stuname']=$name;
        $stu['pw']=$pw;
        $stu['time']=time();
        $student['stunum']=$stunum;
        $res=$sql->where($student)->find();
        if($res){
            return 0;
        }else{
            $sql->add($stu);
            return 1;
        }
    }
    public function showALLstudent(){
        
    }
}
?>