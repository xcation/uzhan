<?php
class UserAction extends Action{
	public function index()
	{	
		$Demo =M('User'); // 实例化模型类    
        $list = $Demo->order(array('id'=>'asc'))->select(); //查询数据
        $count = COUNT($list);//计算数据数目    
        $this->assign("list",$list);
        $this->assign("count",$count);//提交数据
		$this->display();
	}
	public function insertarticle()
	{
		$status = 0;
		$business = $_REQUEST['tip_business'];
		$url = $_REQUEST['tip_url'];
		$db = M('Tip');
		$status = $db->where(array("tip_business"=>$business,"tip_url"=>$url));
		$this->display();
	}
	public function deletearticle()
	{
		$status = 0;
		$tip_id=$_REQUEST['del_id'];//获得删除数据的id
		$db =M('Tip');
		$status = $db->where(array("tip_id" => $tip_id))->delete();
        if ($status) {
        	$this->ajaxReturn($tip_id,"xxx",1);
		}
		else
		{
            $this->ajaxReturn(0,"xxx",1);
        }
   }
	public function updatearticle()
	{
		$del=$_REQUEST[''];
		$Demo =M('Tip');
		$Demo->where('tip_id=$del_id')->delete();
		$this->assign("count",$count);
		$this->display();
	}
	public function checkarticle()
	{
		$del=$_REQUEST['del'];
		$this->assign("ab",$ab);
		$this->display();
	}
	

}