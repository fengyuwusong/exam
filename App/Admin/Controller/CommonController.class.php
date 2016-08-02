<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
        if(!session("?admin")){
            $this->assign("message",'你尚未登录！');
            $this->error();
            exit();
        }
    }
    public function error(){
        $this->display("error");
    }
}