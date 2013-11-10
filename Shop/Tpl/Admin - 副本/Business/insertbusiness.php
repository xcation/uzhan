<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="admin">
<div class="sidebar">
    <div class="secNav">
    <div class="admin-title"><h1>后台中心</h1></div>
        <div class="secWrapper">          
            <div class="divider"><span></span></div>   
            <ul class="subNav">
                <li><a href="/index.php?g=Admin&m=business" title="" ><span class="icos-frames"></span>管理商家</a></li>
                <li><a href="/index.php?g=Admin&m=business&a=insertbusiness" title=""><span class="icos-transfer"></span>审核商家</a></li>
                <li><a href="/index.php?g=Admin&m=user" title=""><span class="icos-transfer"></span>管理用户</a></li>
                <li><a href="/index.php?g=Admin&m=tip&a=insertarticle" title="" class="this"><span class="icos-transfer"></span>增加文章</a></li>
                <li><a href="/index.php?g=Admin&m=tip" title=""><span class="icos-transfer"></span>管理文章</a></li>
            </ul>
            <div class="divider"><span></span></div>
            <div class="fluid sideWidget">
                <div class="grid6"><input type="submit" class="buttonS bRed" value="登出"/></div>
                <div class="grid6"><input type="submit" class="buttonS bGreen" value="登入"/></div>
            </div>        
            <div class="divider"><span></span></div>
            </div> 
       <div class="clear"></div>
   </div>
</div>
    
<div class="content">
   <div class="breadLine">
        <div class="breadLinks">
            <ul>
                <li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>新建小报</span></a></li>
                <li><a href="#" title=""><i class="icos-list"></i><span>记录总数</span> <strong>({$count})</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span>待审核</span> <strong>(+1)</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span></span>已审核<strong>(+2)</strong></a></li>
            </ul>
             <div class="clear"></div>
        </div>
    </div>
    
    <div class="wrapper">
        <form>
        <ul class="admin-content">
            <li ><a>小报的标题：</a><input class="inputfield" /></li>
            <div class="divider"><span></span></div>
            <li><a>小报的地址：</a><input class="inputfield"/></li>
            <div class="divider"><span></span></div>
            <li ><a>小报商家id：</a><input class="inputfield" /></li>
            <div class="divider"><span></span></div>
            <li><a>小报自己id：</a><input class="inputfield"/></li>
            <div class="divider"><span></span></div>
            <li class="save-btn"><input type="submit" class="buttonS bGreen" value="保存"/></li>
        </ul>
        </form>
        <div class="divider"><span></span></div>
    </div>
</div>