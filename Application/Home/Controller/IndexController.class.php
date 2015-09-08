<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $this->display();
    }

    public function apply(){
    	if(!IS_POST) $this->redirect('index');
    	$data = array(
    		'name' => I('name'),
        'gender' => I('gender'),
        'major' => I('major'),
        'number' => I('number'),
        'mobile' => I('mobile'),
        'email' => I('email'),
        'department' => I('department'),
        'info' => I('info'),
        'signup_time' => time(),
        'signup_ip' => get_client_ip(),
      );
      $Apply = D("apply");
      if($Apply->create($data)){
        if($Apply->add())
          $this->success('报名成功');
        else
          $this->error('错误请重试');
      }else{
        $this->error($Apply->getError());
       }
	   }
}
