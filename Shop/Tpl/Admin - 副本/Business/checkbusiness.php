<div class="admin">
<div class="sidebar">
    <div class="secNav">
    <div class="admin-title"><h1>后台中心</h1></div>
        <div class="secWrapper">          
            <div class="divider"><span></span></div>   
            <ul class="subNav">
                <li><a title="" class="this"><span class="icos-frames"></span>管理商家</a></li>
                <li><a title=""><span class="icos-transfer"></span>审核商家</a></li>
                <li><a title=""><span class="icos-transfer"></span>管理用户</a></li>
                <li><a title=""><span class="icos-transfer"></span>增加文章</a></li>
                <li><a title=""><span class="icos-transfer"></span>管理文章</a></li>
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
        <div class="bc">
            <a>商家详情队列</a>
        </div>
        <div class="breadLinks">
            <ul>
                <li><a href="#" title=""><i class="icos-list"></i><span>记录总数</span> <strong>({$count})</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span>待审核</span> <strong>(+1)</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span></span>已审核<strong>(+2)</strong></a></li>
            </ul>
             <div class="clear"></div>
        </div>
    </div>
    
    <div class="insert-btn"><input type="submit" class="buttonS bGreen" value="新建记录"/></div>
    <div class="wrapper">
        <div class="widget">
            <div class="whead"><h6>小报数据表</h6><div class="clear"></div></div>       
            <table cellpadding="0" cellspacing="0" width="100%" class="tDefault">
                <thead>
                    <tr>
                        <td>小报id</td>
                        <td>小报标题</td>
                        <td>小报商家id</td>
                        <td>小报地址</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                {foreach from=$list key=key item=item}
                <tr>
                    <td>{$item.tip_id}</td>
                    <td>{$item.tip_title}</td>
                    <td>{$item.tip_business}</td>
                    <td>{$item.tip_url}</td>
                    <td><form><input type="submit" url="#" class="buttonS bRed" name="del" value="删除"/><input type="submit" class="buttonS bBlue" value="修改"/></form></td>
            </div>
                </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    

        
       <div class="divider"><span></span></div>

  </div>
  
    
</div>