<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="admin_wrap">
		<!-- ��̨������ĿSTAR -->
		<div class="admin_sidebar fl">
			<div class="admin_subNav">
				<div class="admin_title tc fb f18">��̨����</div>
				<div class="divider"><span></span></div>
				<ul class="admin_subNav_menu">
					<li><a class="this" href="/index.php?g=Admin&m=business" title="" ><span class="icos-frames"></span>�����̼�</a></li>
                	<li><a href="/index.php?g=Admin&m=business" title=""><span class="icos-transfer"></span>����̼�</a></li>
                	<li><a href="/index.php?g=Admin&m=user" title=""><span class="icos-transfer"></span>�����û�</a></li>
                	<li><a href="/index.php?g=Admin&m=tip&a=insertarticle" title=""><span class="icos-transfer"></span>��������</a></li>
                	<li><a href="/index.php?g=Admin&m=tip" title=""><span class="icos-transfer"></span>��������</a></li>
				</ul>
				<div class="divider"><span></span></div>
				<div class="fluid sideWidget">
                	<div class="grid6 tc"><input type="submit" class="buttonS bGreen" value="��¼"/></div>
                	<div class="grid6"><input type="submit" class="buttonS bRed" value="�˳�"/></div>
            	</div>    
				<div class="divider"><span></span></div>
			</div>
		</div>
		<!-- ��̨������ĿEND -->

		<!-- �̼ҹ�����ϸSTAR -->
		<div class="admin_content">
			<div class="admin_breadLine">
				<div class="admin_breadLinks">
            		<ul>
                		<li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>С�����ݱ�</span></a></li>
                		<li><a href="#" title=""><i class="icos-listicos-list"></i><span>��¼����</span> <strong>({$count})</strong></a></li>
                		<li><a href="#" title=""><i class="icos-check"></i><span>�����</span><strong>(+1)</strong></a></li>
                		<li><a href="#" title=""><i class="icos-check"></i><span></span>�����<strong>(+2)</strong></a></li>
            		</ul>
             		<div class="clear"></div>
       			</div>
       			<div class="insert-btn"><a href="/index.php?g=Admin&m=Tip&a=insertarticle" class="buttonS bGreen">�½���¼</a></div>
			</div>
			<div class="Data_Sheet">
				<div class="widget">
            		<div class="whead"><h6>С�����ݱ�</h6></div>   
            		<table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
                		<thead>
                    <tr>
                        <td>С��id</td>
                        <td>С������</td>
                        <td>С���̼�id</td>
                        <td>С����ַ</td>
                        <td>����</td>
                    </tr>
                </thead>
                <tbody>
                {foreach from=$list key=key item=item}
                <tr class="article-list{$item.tip_id}">
                    <td>{$item.tip_id}</td>
                    <td>{$item.tip_title}</td>
                    <td>{$item.tip_business_id}</td>
                    <td>{$item.tip_url}</td>
                    <td><a class="buttonS bRed article-del" data-id="{$item.tip_id}">ɾ��</a>
                    <a class="buttonS bBlue article-change" data-id="{$item.tip_id}">�޸�</a>
                    <a class="buttonS bGold article-check" data-id="{$item.tip_id}">���</a></td>
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
		<!-- �̼ҹ�����ϸEND -->

	</div>