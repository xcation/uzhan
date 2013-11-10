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
                	<li><a href="/index.php?g=Admin&m=user" title="" class="this"><span class="icos-transfer"></span>管理用户</a></li>
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
                        <li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>用户数据表单</span></a></li>
                        <li><a href="#" title=""><i class="icos-listicos-list"></i><span>记录总数</span> <strong>({$count})</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span>待审核</span><strong>(+1)</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span></span>已审核<strong>(+2)</strong></a></li>
                    </ul>
             		<div class="clear"></div>
       			</div>
       			<div class="insert-btn"><a href="/index.php?g=Admin&m=User&a=add" class="buttonS bGreen">新增用户</a></div>
			</div>
			<div class="Data_Sheet">
				<div class="widget">
                    <div class="whead"><h6>用户数据表</h6><div class="clear"></div></div>       
                    <table cellpadding="0" cellspacing="0" width="100%" class="tDefault user-table">
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
                                <td>
                                    <a class="buttonS bRed user-del" data-id="{$item.id}">删除</a>
                                    <a class="buttonS bBlue user-change" data-id="{$item.id}" href="/index.php?g=Admin&m=User&a=updatebusiness">修改</a>
                                    <a class="buttonS bGold user-check" data-id="{$item.id}" href="/index.php?g=Admin&m=User&a=checkbusiness">审核</a>
                                </td>
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
    