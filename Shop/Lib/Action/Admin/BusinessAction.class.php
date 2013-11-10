<?php
class BusinessAction extends Action{
	public function index()
	{	
	

		$Business =M('Business'); // 实例化模型类
		//分页显示
		$per = $_REQUEST['per']?$_REQUEST['per']:8;
		$count = $Business->count();//计算数据数目
		import("ORG.Util.Page");
		$page = new Page($count,$per);
		$maxpage = (int)($count/$per)<($count/$per)?(int)($count/$per)+1:(int)($count/$per);
		$show = $page->show();
		$pa = $_REQUEST['p']?$_REQUEST['p']:1;
		if($pa > $maxpage)$pa = $maxpage;//页码不能超过最大页数
		if($pa < 1)$pa = 1;//最小显示第一页
		$list = $Business->order('business_id  ASC')->page($pa.','.$per)->select();
		$this->assign("currentpage",$pa);
		if($pa-1 < 1){$this->assign("prepage"," ");}
		else {$this->assign("prepage",$pa-1);}
		if($pa+1 > $maxpage){$this->assign("nextpage"," ");}
		else {$this->assign("nextpage",$pa+1);}
		$this->assign("maxpage",$maxpage);
        $this->assign("list",$list);
        $this->assign("count",$count);//提交数据
		$this->display();
	}
	public function insertbusiness()
	{
		$status = 0;
		$business = $_REQUEST['tip_business'];
		$url = $_REQUEST['tip_url'];
		$db = M('Tip');
		$status = $db->where(array("tip_business"=>$business,"tip_url"=>$url));
		$this->display();
	}
	public function deletebusiness()
	{
		$status = 0;
		$business_id=$_REQUEST['del_id'];//获得删除数据的id
		$db =M('Business');
		$status = $db->where(array("business_id" => $business_id))->delete();
        if ($status) {
        	$this->ajaxReturn($business_id,"xxx",1);
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