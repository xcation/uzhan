<?php
class IndexAction extends Action{
	public function index()
	{


		$focus_mod = D('Member');
       $ad_list = $focus_mod->cache(true,300)->limit(2)->select();
		var_dump($ad_list);

	    // $this->assign("id","111");
        // $this->display();
		

	}
}