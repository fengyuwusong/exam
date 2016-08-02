<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {

    // 验证码
    public function set_verify(){
        $config =    array(
        'fontSize'    =>    30,    // 验证码字体大小
        'length'      =>    4,     // 验证码位数
        'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify($config);
        $Verify->entry();
    }

    // 检验验证码方法,200为对，201错
    function check_verify($code=''){
        $verify = new \Think\Verify();
        if($verify->check($code)){
            return 1;
        }else{
            return 0;
        }
}

    // 展示模板
    public function index(){
        $this->display();
    }

    // 提供ajax方法检测是否存在用户
    public function check_name(){
         if(@$_REQUEST['stunum']){
                $user_model=D('User');
                $user_model->db_check_name($_REQUEST['stunum']);
        }else{   
            $return['Status']=202;
            $return['Message']=urlencode('无GET或POST数据传达');
            exit(urldecode(json_encode($return)));
        }
    }

    //检测密码，跳转页面，提示密码错误
    public function check_pw_verify(){
        if($this->check_verify($_REQUEST['code'])==1){
            if(@$_REQUEST['stunum']){
                $user_model=D('User');
                $res=$user_model->db_check_pw($_REQUEST['stunum'],$_REQUEST['stupw']);
                if($res['Status']==200){
                    //设置cookie  若存在cookie则先判断是否同学号  如不同名重新设置    如调试cookie将session注释
                    // cookie('stunum',json_decode($res)->stunum,60*60*2);
                    if(session('?stunum')&&session('stunum')!=$res['stunum']||!session('?stunum')){
                        $exam_model=D('Exam');
                        $time=$exam_model->getTime($res['stunum']);
                        //判断时间是否已经结束
                        if(isset($time)){
                            if($time>time()){
                            session('stunum',$res['stunum'],time()-$time);
                            }
                            elseif(time()>=$time){
                                $res['Status']=203;
                                $res['Message']=urlencode('时间到了，无法再次进入考试！');
                            }
                        }       
                        else{
                            session('stunum',$res['stunum'],60*60*2);
                        }

                    }
                    // 判断是否已经确认提交
                    $golds_model=D('Golds');
                    $flag=$golds_model->getFlag($res['stunum']);
                    if($flag==1){
                        $res['Status']=204;
                        $res['Message']=urlencode('你已提交试卷，无法再次登录！');
                    }    
                    exit(urldecode(json_encode($res)));
                }else{
                    exit(urldecode(json_encode($res)));
                }
        }else{   
            $return['Status']=202;
            $return['Message']=urlencode('无GET或POST数据传达');
            exit(urldecode(json_encode($return)));
        }
        }else{
            $res['Status']=205;
            $res['Message']=urlencode('验证码错误！');
            exit(urldecode(json_encode($res)));
        }
    }

    public function test($html){
        $this->display($html);
    }

    // 跳转至考试开始
    public function start(){
        $this->display('begin');
    }

}