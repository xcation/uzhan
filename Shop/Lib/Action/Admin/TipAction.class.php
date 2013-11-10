<?php
class TipAction extends Action{
public function index()
	{	
		$url = "current url:".__SELF__."<p>current model:".__CURRENT__."<p>current action:".__ACTION__."<p>current apppath:".APP_PATH."<p>current tpl:".TMPL_PATH;
		$this->assign("url",$url);
		$Tip =M('Tip'); // 实例化模型类
		//分页显示
		$per = $_REQUEST['per']?$_REQUEST['per']:4;
		$count = $Tip->count();//计算数据数目
		import("ORG.Util.Page");
		$page = new Page($count,$per);
		$maxpage = (int)($count/$per)<($count/$per)?(int)($count/$per)+1:(int)($count/$per);
		$show = $page->show();
		$pa = $_REQUEST['p']?$_REQUEST['p']:1;
		if($pa > $maxpage)$pa = $maxpage;//页码不能超过最大页数
		if($pa < 1)$pa = 1;//最小显示第一页
		$list = $Tip->order('tip_id  ASC,tip_business_id ASC')->page($pa.','.$per)->select();
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

	public function insertarticle()
	{
		// $status = $_REQUEST['status'];
		// $update_id = $update_id ? $update_id:"  ";
		
		$this->display();
	}
	public function insertx()
	{
		$title=$_REQUEST['tip_title'];
		$url=$_REQUEST['tip_url'];
		$bid=$_REQUEST['tip_business'];
		$Demo =M('Tip');
		$data = array();
		$data['tip_title']=$title;
		$data['tip_business_id']=$bid;
		$data['tip_url']=$url;
		$result=$Demo->data($data)->add();
		 if ($status) {              
        	$this->ajaxReturn($status,"xxx",1);
		}
		else 
		{
            $this->ajaxReturn(0,"xxx",1);
        }
	}
	public function deletearticle()
	{
		$status = 0;
		$tip_id=$_REQUEST['del_id'];//获得删除数据的id
		$db =M('Tip');
        $status = $db->where(array("tip_id" =>$tip_id))->delete();
        if ($status) {              
        	$this->ajaxReturn($tip_id,"xxx",1);
		}
		else 
		{
            $this->ajaxReturn(0,"xxx",1);
        }
    }
	public function updatearticle(){
		$id=$_GET['id'];
		$businessid=$_GET["tip_business_id"];
		$tiptitle=$_GET["tip_title"];
		$tipurl=$_GET["tip_url"];
		$dome=M("tip");
		$condition['tip_id']=$id;
		$data['tip_title']=$tiptitle;
		$data['tip_url']=$tipurl;
		$data['tip_business_id']=$businessid;
		$result=$dome->data($data)->where($condition)->save();
		if($result){
	 		$this->ajaxReturn($result,"xxxxx",1);
	 	}else{
	 		$this->ajaxReturn(0,"xxxxx",0);
	 	}	
	}
	public function checkarticle()
	{
		$del=$_REQUEST['del'];
		$this->assign("ab",$ab);
		$this->display();
	}

	public function update(){
		if($this->isPost()){         
            $Tip = M('tip');
            $Tip->create();
            $result=$Tip->save();
            if($result){
            	$this->success('11111');
            }
	     	//$this->display();
		}
		else{
            $id=$_REQUEST['id'];
            $Tip =M('Tip'); // 实例化模型类    
            $list = $Tip->where(array('tip_id'=>$id))->find();
            $this->assign("list",$list);           
		    $this->display(); 
		}
	}
	public function updates(){
		        
           /* $Tip = M('tip');
            $Tip->create();
            $result=$Tip->save();
            if($result){
            	$this->success('11111');
            }*/
           $this->display(); 
            echo "1111";
	     
	
	}
}