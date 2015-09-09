<?php
namespace Admin\Controller;
use Think\Controller;
class RegistrationController extends CommonController {

	public function registration($page=1){
		$pagesize = 10; //每页几条
		$num = M('apply')->count(); //报名人数
		$num = ceil($num/$pagesize); //页数

		if($page>$num){
			$page = 1;
		}

		$apply = M('apply')->order('signup_time ASC')->page($page,$pagesize)->select();

		$this->assign('apply', $apply);
		$this->assign('page',$page);
		$this->assign('num',$num);
		$this->display();
	}


}