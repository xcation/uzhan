<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="sidebar">
    <div class="secNav">
    <div class="admin-title"><h1>��̨����</h1></div>
        <div class="secWrapper">          
            <div class="divider"><span></span></div>   
            <ul class="subNav">
                <li><a href="/index.php?g=Admin&m=business" title="" ><span class="icos-frames"></span>�����̼�</a></li>
                <li><a href="/index.php?g=Admin&m=business&a=insert" title=""><span class="icos-transfer"></span>����̼�</a></li>
                <li><a href="/index.php?g=Admin&m=user" class="this" title=""><span class="icos-transfer"></span>�����û�</a></li>
                <li><a href="/index.php?g=Admin&m=tip&a=insertarticle" title=""><span class="icos-transfer"></span>��������</a></li>
                <li><a href="/index.php?g=Admin&m=tip" title=""><span class="icos-transfer"></span>��������</a></li>
            </ul>
            <div class="divider"><span></span></div>
            <div class="fluid sideWidget">
                <div class="grid6"><input type="submit" class="buttonS bRed" value="�ǳ�"/></div>
                <div class="grid6"><input type="submit" class="buttonS bGreen" value="����"/></div>
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
                <li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>��Ա����</span></a></li>
                <li><a href="#" title=""><i class="icos-listicos-list"></i><span>��¼����</span> <strong>({$count})</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span>�����</span><strong>(+1)</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span></span>�����<strong>(+2)</strong></a></li>
            </ul>
             <div class="clear"></div>
        </div>
    </div>
    
    <div class="insert-btn"><a href="/index.php?g=Admin&m=Tip&a=insertarticle" class="buttonS bGreen">�½���¼</a></div>
    <div class="wrapper">
        <div class="widget">
            <div class="whead"><h6>��Ա����</h6><div class="clear"></div></div>       
            <table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
                <thead>
                    <tr>
                        <td>�û�id</td>
                        <td>�û���</td>
                        <td>�ǳ�</td>
                        <td>����</td>
                        <td>�ϴε�¼ʱ��</td>
                        <td>��¼����</td>
                        <td>ע��</td>
                        <td>����</td>
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
                    <td><a class="buttonS bRed user-del" data-id="{$item.id}">ɾ��</a>
                    <a class="buttonS bBlue user-change" data-id="{$item.id}">�޸�</a>
                    <a class="buttonS bGold user-check" data-id="{$item.id}">���</a></td>
                </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <div class="result-status"><a></a></div>
   
        <div class="divider"><span></span></div>
    </div>
</div>