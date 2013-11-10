<?php
class IndexAction extends Action{

	public function index()//显示每层商家信息
	{

		//一楼
		$dobusiness=M("business");
		$condition['business_status']=1;
		$condition['business_floor']=1;
		$result1=$dobusiness->
where($condition)->order('business_floor  ASC')->select();
        //二楼 
        $dobusiness=M("business");
		$condition['business_status']=1;
		$condition['business_floor']=2;
		$result2=$dobusiness->where($condition)->order('business_floor  ASC')->select();

		//三楼 
        $dobusiness=M("business");
		$condition['business_status']=1;
		$condition['business_floor']=3;
		$result3=$dobusiness->where($condition)->order('business_floor  ASC')->select();

			//四楼 
        $dobusiness=M("business");
		$condition['business_status']=1;
		$condition['business_floor']=4;
		$result4=$dobusiness->where($condition)->order('business_floor  ASC')->select();

			//五楼 
        $dobusiness=M("business");
		$condition['business_status']=1;
		$condition['business_floor']=5;
		$result5=$dobusiness->where($condition)->order('business_floor  ASC')->select();

			//六楼 
        $dobusiness=M("business");
		$condition['business_status']=1;
		$condition['business_floor']=6;
		$result6=$dobusiness->where($condition)->order('business_floor  ASC')->select();

		


		$userid=1; //
	 	$Model=new Model();
	 	$result_collect=$Model->query("select business.*,collection.* from business,collection where business.business_id=collection.collection_business_id and collection.collection_user_id= '$userid'");

		$this->assign("allbusiness1",$result1);
		$this->assign("allbusiness2",$result2);
		$this->assign("allbusiness3",$result3);
		$this->assign("allbusiness4",$result4);
		$this->assign("allbusiness5",$result5);
		$this->assign("allbusiness6",$result6);

		$this->assign("result_collect",$result_collect);
		$this->display();
	
	}

	 public function showquestionbusiness(){//显示商家圈友问题（暂不用）
	 	// public function index(){//显示商家圈友问题
	 	
	 	$businessid=$_GET['businessid'];
	 
	 	// $businessid=$_AJAX['businessid'];
	 	$doanswer=M("answer");
	 	$condition['answer_business_id']=$businessid;
	 	$condition['answer_qora']=0;
	 	$result=$doanswer->where($condition)->order('answer_time  DESC')->select();


		if ($result){
			$this->ajaxReturn($result,"xxx",1);
    	}else{
    		$this->ajaxReturn(0,"xxxxxx",0);
    	}
	 }

	 public function showanswerbusiness(){//显示商家圈友回答（暂不用）
	 	$businessid=$_GET['businessid'];
	 	$questionid=$_GET['questionid'];
	 	$doanswer=M("answer");
	 	$condition['answer_business_id']=$businessid;
	 	$condition['answer_question_id']=$questionid;
	 	$condition['answer_qora']=1;
	 	$result=$doanswer->where($condition)->order('answer_time  ASC')->select();

		if ($result){
			$this->ajaxReturn($result,"yyy",1);
    	}else{
    		$this->ajaxReturn(0,"yyyyyy",0);
    	}
	 }

	 public function showdetailandtip(){//显示商家详细信息和小报内容  //不能同步输出问题

  //    	$businessid=$_GET['businessid'];
	 // 	$dobusiness=M("business");
	 // 	$condition['business_id']=$businessid;
		// $results=$dobusiness->where($condition)->join('LEFT JOIN tip ON business.business_id=tip.tip_business_id')->order('tip.tip_id  DESC')->select();

  //       $this->ajaxReturn($results,"xxx",1);
		$businessid=$_GET['businessid'];
		// $businessid=2;
		$allquestion=M("answer");
		$allanswer=M("answer");
		$conditionquestion['answer_business_id']=$businessid;
		$conditionquestion['answer_qora']=0;
		$resultquestion=$allquestion->where($conditionquestion)->order('answer_time  DESC')->select();
		$result=array();
		// $resultchild=array();
		foreach ($resultquestion as $raw) {
			$resultchild=array();
			$resultchild[]=$raw;
			$conditionanswer['answer_question_id']=$raw['answer_question_id'];
			$conditionanswer['answer_business_id']=$raw['answer_business_id'];
			$conditionanswer['answer_qora']=1;
			$resultanswer=$allanswer->where($conditionanswer)->order('answer_time  ASC')->select();
			foreach ($resultanswer as $raw2){
				$resultchild[]=$raw2;
			}
			$result[]=$resultchild;

		}

		// $this->ajaxReturn($result,"xxx",1);
	 	if ($result){
			$this->ajaxReturn($result,"xxx",1);

		
    	}else{
    		$this->ajaxReturn(0,"xxxxxx",0);
    	}

	 }


	 public function showcollection(){//显示pk(修改)
	 	$userid=$_GET['userid'];


	 	$docollection=M("collection");
	 	$condition['collection_user_id']=$userid;
		$result=$docollection->where($condition)->join('INNER JOIN business ON business.business_id=collection.collection_business_id')->order('collection.collection_id DESC')->select();


	 	if ($result){
			$this->ajaxReturn($result,"xxx",1);
    	}else{
    		$this->ajaxReturn(0,"xxxxxx",0);
    	}

	 }

	 // public function showquestionuser(){//显示我的提问/相关回答
	public function usercenter(){//显示我的提问/相关回答
	


	 	$userid=$_GET['userid'];
	 	// $userid=1;
	 	$getquestion=M("answer");
	 	$getanswer=M("answer");
	 	$getbusiness=M("business");
	 	$condition['answer_write_id']=$userid;
	 	$condition['answer_qora']=0;
	 	$resultquestion=$getquestion->where($condition)->order('answer_time  DESC')->select();
	 	$businessarr=array();
	 	$allqanda=array();

	 	foreach ($resultquestion as $raw) {
	 		$qanda=array();
	 		$conditionanswer['answer_question_id']=$raw['answer_question_id'];
			$conditionanswer['answer_business_id']=$raw['answer_business_id'];
			$conditionanswer['answer_qora']=1;
			$resultanswer=$getanswer->where($conditionanswer)->order('answer_time ASC')->select();
			$conditionbusiness['business_id']=$raw['answer_business_id'];
			$resultbusiness=$getbusiness->where($conditionbusiness)->select();
			$qanda[]=$raw;
			$businessarr[]=$resultbusiness[0];
			foreach ($resultanswer as $raw2) {
				$qanda[]=$raw2;
			}
			$allqanda[]=$qanda;
	 	}


	 	$this->assign("qanda",$allqanda);
	 	$this->assign("business",$businessarr);
		$this->display();


	 }

	 public function showansweruser(){//显示我的圈友回答 (未好 暂不用)
	 	// $userid=$_GET['userid'];
	 	$questionid=$_GET['questionid'];
	 	$doanswer=M("answer");
	 	// $condition['answer_write_id']=$userid;
	 	$condition['answer_question_id']=$questionid;
	 	$condition['answer_qora']=1;
	 	$result=$doanswer->where($condition)->order('answer_time  DESC')->select();
		// $this->ajaxReturn($questionid,"xxx",1);
	 	if ($result){
			$this->ajaxReturn($result,"xxx",1);
    	}else{
    		$this->ajaxReturn(0,"xxxxxx",0);
    	}
	 }


	 public function addquestionoranswer(){//用户提问或者回答

	 	$businessid=$_GET['businessid'];
		$writeid=$_GET['writeid'];
		$content=$_GET['content'];
		// $time=$_GET['time'];
		$time=date("Y-m-d H:i:s");
		$picture=$_GET['picture'];
		$qora=$_GET['qora'];
		

		$doanswer=M("answer");



		
		if($qora==0){
			$doanswercount=M("answer");
			$getcount=$doanswercount->count();
			// $questionid=$getcount+1;//bug
			$questionid=$doanswercount->max('answer_id')+1;

			$data['answer_business_id']=$businessid;
			$data['answer_write_id']=$writeid;
			$data['answer_content']=$content;
			$data['answer_time']=$time;
			$data['answer_user_picture']=$picture;
			$data['answer_qora']=$qora;
			$data['answer_question_id']=$questionid;


			$result=$doanswer->data($data)->add();

			if ($result){
				$this->ajaxReturn($result,"xxx",1);
    		}else{
    			$this->ajaxReturn(0,"xxxxxx",0);
    		}

		}else if($qora==1){
			
			$questionid=$_GET['questionid'];
			$toid=$_GET['toid'];

			$data['answer_business_id']=$businessid;
			$data['answer_write_id']=$writeid;
			$data['answer_content']=$content;
			$data['answer_time']=$time;
			$data['answer_user_picture']=$picture;
			$data['answer_qora']=$qora;
			$data['answer_question_id']=$questionid;
			$data['answer_to_id']=$toid;

			$result=$doanswer->data($data)->add();

			if ($result){
				$this->ajaxReturn($result,"xxtrr",1);
    		}else{
    			$this->ajaxReturn(0,"xrt",0);
    		}
		}

	}

	public function addcollection(){//加入pk 并显示(修改)
		$businessid=$_GET['businessid'];
		$userid=$_GET['userid'];

		$doiscollection=M("collection");
		$condition['collection_user_id']=$userid;
	 	$condition['collection_business_id']=$businessid;
	 	$is=$doiscollection->where($condition)->select();
	 	if(!$is){
	 		$docollection=M('collection');
			$data['collection_user_id']=$userid;
			$data['collection_business_id']=$businessid;
			$id=$docollection->data($data)->add(); 

			if($id){

				$docollection=M("collection");
	 			$condition['collection_id']=$id;
				$result=$docollection->where($condition)->join('INNER JOIN business ON business.business_id=collection.collection_business_id')->select();
/*
				$Model=new Model();
	 			$result=$Model->query("select business.*,collection.* from business,collection where business.business_id=collection.collection_business_id and collection.collection_id= '$id'");
	 			*/
	 			if ($result){
					$this->ajaxReturn($result,"xxx",1);
    			}else{
    				$this->ajaxReturn(0,"xxxxxx",0);
    			}
			}else{
				$this->ajaxReturn(0,"xxxxxx",0);
			}
	 	}else{
	 		$this->ajaxReturn($is,"xxxxxx",0);
	 	}

	}


	public function deleteonecollection(){//删除单个pk
		$userid=$_GET['userid'];
		$collectionid=$_GET['collectionid'];
		$docollection=M("collection");
		$condition['collection_user_id']=$userid;
		$condition['collection_id']=$collectionid;
		$result=$docollection->where($condition)->delete();
		// $result=$docollection->where('collection_user_id=$userid and collection_id=$collectionid ')->delete();
		$this->ajaxReturn($result,"xxx",1);

	}


	public function deleteallcollection(){//删除所有pk
		$userid=$_GET['userid'];
		// $collectionid=$_GET['collectionid'];
		$docollection=M("collection");
		$condition['collection_user_id']=$userid;
		// $result=$docollection->where('collection_user_id=$userid ')->delete();
		$result=$docollection->where($condition)->delete();
		$this->ajaxReturn($result,"xxx",1);

	}


	public function showcollectionbyplevel(){//Pk按产品排序
	 	$userid=$_GET['userid'];
	 	$Model=new Model();
	 	$result=$Model->query("select business.*,collection.* from business,collection where business.business_id=collection.collection_business_id and collection.collection_user_id= '$userid' order by business.business_plevel DESC");

	 	// $this->ajaxReturn($result,"xxx",1);
	 	if ($result){
			$this->ajaxReturn($result,"xxx",1);
    	}else{
    		$this->ajaxReturn(0,"xxxxxx",0);
    	}

	 }

	 public function showcollectionbyslevel(){//Pk按服务排序
	 	$userid=$_GET['userid'];
	 	$Model=new Model();
	 	$result=$Model->query("select business.*,collection.* from business,collection where business.business_id=collection.collection_business_id and collection.collection_user_id= '$userid' order by business.business_slevel DESC");

	 	if ($result){
			$this->ajaxReturn($result,"xxx",1);
    	}else{
    		$this->ajaxReturn(0,"xxxxxx",0);
    	}

	 }

	 public function countquestionuser(){//计算问题个数
	 	$userid=$_GET['userid'];
	 	// $userid=1;
	 	$doanswer=M("answer");
	 	$condition['answer_write_id']=$userid;
	 	$condition['answer_qora']=0;
	 	$result=$doanswer->where($condition)->count();




	 	if($result){
	 		$this->ajaxReturn($result,"xxxxx",1);
	 	}else{
	 		$this->ajaxReturn(0,"xxxxx",0);
	 	}
	 }

	 public function countansweruser(){//计算回答个数(暂好)

	 	// $userid=$_GET['userid'];
	 	$userid=1;
	 	// $questionid=$_GET['questionid'];
	 	$doanswer=M("answer");
	 	$condition['answer_write_id']=$userid;
	 	// $condition['answer_question_id']=$questionid;
	 	$condition['answer_qora']=0;
	 	$result=$doanswer->where($condition)->select();

	 	$counts=0;
	 	$doanswercount=M("answer");
	 	foreach ($result as $raw) {
	 		$conditioncount['answer_question_id']=$raw['answer_question_id'];
	 		$conditioncount['answer_qora']=1;
	 		$counts=$counts+$doanswercount->where($conditioncount)->count();
	 	}


	 	// $this->ajaxReturn($counts,"xxxxx",1);
	 	if ($result){
			$this->ajaxReturn($result,"xxx",1);
    	}else{
    		$this->ajaxReturn(0,"xxxxxx",0);
    	}


	}



	public function addfeedback(){//意见和建议
		$userid=$_GET['feedback_user_id'];
		$title=$_GET['feedback_title'];
		$content=$_GET['feedback_content'];
		$contact=$_GET['feedback_contact'];


		$time=date("Y-m-d H:i:s");
		$data['feedback_user_id']=$userid;
		$data['feedback_title']=$title;
		$data['feedback_content']=$content;
		$data['feedback_contact']=$contact;
		$data['feedback_time']=$time;
		$dofeedback=M("feedback");
		$result=$dofeedback->data($data)->add();

		if ($result){
			$this->ajaxReturn($result,"xxx",1);
    	}else{
    		$this->ajaxReturn(0,"xxxxxx",0);
    	}
		
	}

	public function businessback(){

	}










/////////////////////////////////////////////商家问答
	public function showoneallqora(){//商家问答(使用)
	

		$businessid=$_GET['businessid'];
		// $businessid=2;
		$allquestion=M("answer");
		$allanswer=M("answer");
		$conditionquestion['answer_business_id']=$businessid;
		$conditionquestion['answer_qora']=0;
		$resultquestion=$allquestion->where($conditionquestion)->order('answer_time  DESC')->select();
		$result=array();
		// $resultchild=array();
		foreach ($resultquestion as $raw) {
			$resultchild=array();
			$resultchild[]=$raw;
			$conditionanswer['answer_question_id']=$raw['answer_question_id'];
			$conditionanswer['answer_business_id']=$raw['answer_business_id'];
			$conditionanswer['answer_qora']=1;
			$resultanswer=$allanswer->where($conditionanswer)->order('answer_time  ASC')->select();
			foreach ($resultanswer as $raw2){
				$resultchild[]=$raw2;
			}
			$result[]=$resultchild;

		}

	if($result){
	 		$this->ajaxReturn($result,"xxxxx",1);
	 	}else{
	 		$this->ajaxReturn(0,"xxxxx",0);
	 	}

		
	}




	public function updateaaa(){
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

}