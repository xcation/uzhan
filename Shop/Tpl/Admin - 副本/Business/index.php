<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="admin">
<div class="sidebar">
    <div class="secNav">
    <div class="admin-title"><h1>��̨����</h1></div>
        <div class="secWrapper">          
            <div class="divider"><span></span></div>   
            <ul class="subNav">
                <li><a  class="this" href="/index.php?g=Admin&m=business" title="" ><span class="icos-frames"></span>�����̼�</a></li>
                <li><a href="/index.php?g=Admin&m=business" title=""><span class="icos-transfer"></span>����̼�</a></li>
                <li><a href="/index.php?g=Admin&m=user" title=""><span class="icos-transfer"></span>�����û�</a></li>
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
                <li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>�̼����ݱ�</span></a></li>
                <li><a href="#" title=""><i class="icos-listicos-list"></i><span>��¼����</span> <strong>({$count})</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span>�����</span><strong>(+1)</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span></span>�����<strong>(+2)</strong></a></li>
            </ul>
             <div class="clear"></div>
        </div>
    </div>
    
    <div class="insert-btn"><a href="/index.php?g=Admin&m=Tip&a=insertaaa" class="buttonS bGreen">�½���¼</a></div>
    <div class="wrapper">
        <div class="widget">
            <div class="whead"><h6>�̼����ݱ�</h6><div class="clear"></div></div>       
            <table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
                <thead>
                    <tr>
                        <td>�̼�id</td>
                        <td>¥��</td>
                        <td>����</td>                      
                        <td>��ϵ��ʽ</td>
                        <td>Logo</td>                       
                        <td>��Ʒָ��</td>
                        <td>����ָ��</td>
                        <td>��Ժ</td>
                       
                        <td>����</td>
                    </tr>
                </thead>
                <tbody>
                {foreach from=$list key=key item=item}
                <tr class="business-list{$item.business_id}">
                    <td>{$item.business_id}</td>
                    <td>{$item.business_floor}</td>
                    <td>{$item.business_name}</td>                  
                    <td>{$item.business_contact}</td>
                    <td>{$item.business_logo}</td>                
                    <td>{$item.business_plevel}</td>
                    <td>{$item.business_slevel}</td>
                    <td>{$item.business_backyard}</td>
                   
                    <td><a class="buttonS bRed business-del" data-id="{$item.business_id}">ɾ��</a>
                    <a class="buttonS bBlue business-change" data-id="{$item.business_id}">�޸�</a>
                    <a class="buttonS bGold business-check" data-id="{$item.business_id}">���</a></td>
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