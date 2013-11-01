<?php
class IndexAction extends Action{

	  public function index() {     
        
       	
        $Demo = new Model('Member'); // 实例化模型类    
        $list = $Demo->select(); // 查询数据    
        // $this->assign('list',$list); // 模板变量赋值  
      
       
        $this->assign("Member",$list);
        $this->assign("id","111");
        $this->display();
    }

      public function loin() {     
        
       	
        $Demo = new Model('Member'); // 实例化模型类    
        $list = $Demo->select(); // 查询数据    
        // $this->assign('list',$list); // 模板变量赋值  
      
       
        $this->assign("Member",$list);
        $this->assign("id","111");
        $this->display();
    }
}