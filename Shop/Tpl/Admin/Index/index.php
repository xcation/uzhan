<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="admin_wrap">
		<!-- 后台管理栏目STAR -->
		<div class="admin_sidebar fl">
			<div class="admin_subNav">
				<div class="admin_title tc fb f18">后台管理</div>
				<div class="divider"><span></span></div>
				<ul class="admin_subNav_menu">
					<li><a class="this" href="/index.php?g=Admin&m=business" title="" ><span class="icos-frames"></span>管理商家</a></li>
                	<li><a href="/index.php?g=Admin&m=business" title=""><span class="icos-transfer"></span>审核商家</a></li>
                	<li><a href="/index.php?g=Admin&m=user" title=""><span class="icos-transfer"></span>管理用户</a></li>
                	<li><a href="/index.php?g=Admin&m=tip&a=insertarticle" title=""><span class="icos-transfer"></span>增加文章</a></li>
                	<li><a href="/index.php?g=Admin&m=tip" title=""><span class="icos-transfer"></span>管理文章</a></li>
				</ul>
				<div class="divider"><span></span></div>
				<div class="fluid sideWidget">
                	<div class="grid6 tc"><input type="submit" class="buttonS bGreen" value="登录"/></div>
                	<div class="grid6"><input type="submit" class="buttonS bRed" value="退出"/></div>
            	</div>    
				<div class="divider"><span></span></div>
			</div>
		</div>
		<!-- 后台管理栏目END -->

		<!-- 商家管理详细STAR -->
		<div class="admin_content">
			<div class="admin_breadLine">
				<div class="admin_breadLinks">
            		<ul>
                		<li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>小报数据表单</span></a></li>
                		<li><a href="#" title=""><i class="icos-listicos-list"></i><span>记录总数</span> <strong>({$count})</strong></a></li>
                		<li><a href="#" title=""><i class="icos-check"></i><span>待审核</span><strong>(+1)</strong></a></li>
                		<li><a href="#" title=""><i class="icos-check"></i><span></span>已审核<strong>(+2)</strong></a></li>
            		</ul>
             		<div class="clear"></div>
       			</div>
       			<div class="insert-btn"><a href="/index.php?g=Admin&m=Tip&a=insertarticle" class="buttonS bGreen">新建记录</a></div>
			</div>
			<div class="Data_Sheet">
				<div class="widget">
            		<div class="whead"><h6>小报数据表</h6></div>   
            		<table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
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
                <tr class="article-list{$item.tip_id}">
                    <td>{$item.tip_id}</td>
                    <td>{$item.tip_title}</td>
                    <td>{$item.tip_business_id}</td>
                    <td>{$item.tip_url}</td>
                    <td><a class="buttonS bRed article-del" data-id="{$item.tip_id}">删除</a>
                    <a class="buttonS bBlue article-change" data-id="{$item.tip_id}">修改</a>
                    <a class="buttonS bGold article-check" data-id="{$item.tip_id}">审核</a></td>
                </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <div class="result-status"><a></a></div>
   
        <div class="divider"><span></span></div>
    </div>
			</div>
		</div>
		<!-- 商家管理详细END -->

	</div>