<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="sidebar">
    <div class="secNav">
    <div class="admin-title"><h1>后台中心</h1></div>
        <div class="secWrapper">          
            <div class="divider"><span></span></div>   
            <ul class="subNav">
                <li><a href="/index.php?g=Admin&m=business" title="" ><span class="icos-frames"></span>管理商家</a></li>
                <li><a href="/index.php?g=Admin&m=business&a=insert" title=""><span class="icos-transfer"></span>审核商家</a></li>
                <li><a href="/index.php?g=Admin&m=user" class="this" title=""><span class="icos-transfer"></span>管理用户</a></li>
                <li><a href="/index.php?g=Admin&m=tip&a=insertarticle" title=""><span class="icos-transfer"></span>增加文章</a></li>
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
                <li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>会员管理</span></a></li>
                <li><a href="#" title=""><i class="icos-listicos-list"></i><span>记录总数</span> <strong>({$count})</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span>待审核</span><strong>(+1)</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span></span>已审核<strong>(+2)</strong></a></li>
            </ul>
             <div class="clear"></div>
        </div>
    </div>
    
    <div class="insert-btn"><a href="/index.php?g=Admin&m=Tip&a=insertarticle" class="buttonS bGreen">新建记录</a></div>
    <div class="wrapper">
        <div class="widget">
            <div class="whead"><h6>会员管理</h6><div class="clear"></div></div>       
            <table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
                <thead>
                    <tr>
                        <td>用户id</td>
                        <td>用户名</td>
                        <td>昵称</td>
                        <td>积分</td>
                        <td>上次登录时间</td>
                        <td>登录天数</td>
                        <td>注册</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                {foreach from=$list key=key item=item}
                <tr class="user-list{$item.id}">
                    <td>{$item.id}</td>
                    <td>{$item.uid}</td>
                    <td>{$item.nick}</td>
                    <td>{$item.jifen}</td>
                    <td>{$item.signinlasttime}</td>
                    <td>{$item.signinday}</td>
                    <td>{$item.log}</td>
                    <td><a class="buttonS bRed user-del" data-id="{$item.id}">删除</a>
                    <a class="buttonS bBlue user-change" data-id="{$item.id}">修改</a>
                    <a class="buttonS bGold user-check" data-id="{$item.id}">审核</a></td>
                </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <div class="result-status"><a></a></div>
   
        <div class="divider"><span></span></div>
    </div>
</div>