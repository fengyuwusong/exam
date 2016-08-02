<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function checkAdminName(){
        if(@$_REQUEST['name']){
                $user_model=D('Admin');
                $user_model->checkAdminname($_REQUEST['name']);
        }else{   
            $return['Status']=202;
            $return['Message']=urlencode('无GET或POST数据传达');
            exit(urldecode(json_encode($return)));
        }
    }
    public function checkAdminpw(){
        if(@$_REQUEST['name']&&@$_REQUEST['pw']){
            $user_model=D('Admin');
            $res=$user_model->checkAdminpw($_REQUEST['name'],$_REQUEST['pw']);
            if($res['Status']==200){
                session('admin',$res['name']);
            }
            exit(urldecode(json_encode($res)));
        }else{   
            $return['Status']=202;
            $return['Message']=urlencode('无GET或POST数据传达');
            exit(urldecode(json_encode($return)));
        } 
    }
    public function singnOut(){
        session('admin',null);
        $this->redirect('/Home/login');
    }
}