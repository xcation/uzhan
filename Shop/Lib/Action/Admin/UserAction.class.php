<?php
class UserAction extends Action{
	public function index()
	{	
	    $Demo = M('User'); // 实例化模型类    
        $list = $Demo->select(); // 查询数据    
        $this->assign("member",$list);  

          $this->assign("de",222);       
		$this->display();

	}

	public function add()
	{	
		$this->display();

	}
}