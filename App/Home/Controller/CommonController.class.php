<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {
    // 验证登录功能
    public function _initialize(){
        // $exam_model=D('Exam');
        // $time=$exam_model->getTime(session('stunum'));
        // $golds_model=D('Golds');
        // $flag=$golds_model->getFlag(session('stunum'));
        // if(!session('?stunum')){
        //     $this->assign('message','你还未登录！');
        //     exit($this->error());
        // }
        // elseif(isset($time)&&time()>=$time){
        //     $this->assign('message','时间到了！无法进入');
        //     exit($this->error());
        // }
        // // 判断是否已经确认提交
        // if(isset($flag)&&$flag==1){
        //     $this->assign('message','你已提交试卷，无法再次进入！');
        //     exit($this->error());
        // }
    }
    // 跳转至错误页
    public function error(){
        $this->display('error');
    }
}