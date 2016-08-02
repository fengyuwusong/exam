<?php 
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{

    public function checkAdminname($name){
        $sql=M('admin');
        $admin['name']=$name;
        $admin=$sql->where($admin)->find();
        if($admin){
            $return['Status']=200;
            $return['Message']=null;
            $return['name']=$admin['name'];
        }
        else{
            $return['Status']=201;
            $return['Message']=urlencode('查无此人');
        }
        exit(urldecode(json_encode($return)));
    }

    // 检验密码，flag=200成功 201失败
    public function checkAdminpw($name,$pw){
        $sql=M('admin');
        $admin['name']=$name;
        $admin['pw']=$pw;
        $admin=$sql->where($admin)->find();
        if(isset($admin)){
            $return['Status']=200;
            $return['Message']=null;
            $return['name']=$admin['name'];
            $info['name']=$admin['name'];
        }
        //密码错误,错误次数+1
        else{
            $err_admin['name']=$name;
            $err_admin=$sql->where($err_admin)->find();
            $admin['err_time']=$err_admin['err_time']+1;
            $sql->where($err_admin)->data($admin)->save();
            $return['Status']=201;
            $return['Message']=urlencode('密码错误');
        }
         return $return;
    }
}
?>