<?php 
namespace Home\Model;
use Think\Model;

class UserModel extends Model{

    public function db_check_name($stunum){
        $sql=M('user');
        $stu['stunum']=$stunum;
        $stu=$sql->where($stu)->find();
        if($stu){
            $return['Status']=200;
            $return['Message']=null;
            $return['stunum']=$stu['stunum'];
        }
        else{
            $return['Status']=201;
            $return['Message']=urlencode('查无此人');
        }
        exit(urldecode(json_encode($return)));
    }

    // 检验密码，flag=200成功 201失败
    public function db_check_pw($stunum,$stupw){
        $sql=M('user');
        $stu['stunum']=$stunum;
        $stu['pw']=$stupw;
        $stu=$sql->where($stu)->find();
        if(isset($stu)){
            $return['Status']=200;
            $return['Message']=null;
            $return['stunum']=$stu['stunum'];
            $info['stunum']=$stu['stunum'];
        }
        //密码错误,错误次数+1
        else{
            $err_stu['stunum']=$stunum;
            $err_stu=$sql->where($err_stu)->find();
            $stu['err_time']=$err_stu['err_time']+1;
            $sql->where($err_stu)->data($stu)->save();
            $return['Status']=201;
            $return['Message']=urlencode('密码错误');
        }
         return $return;
    }
}
?>