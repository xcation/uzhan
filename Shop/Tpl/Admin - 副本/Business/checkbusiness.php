<div class="admin">
<div class="sidebar">
    <div class="secNav">
    <div class="admin-title"><h1>��̨����</h1></div>
        <div class="secWrapper">          
            <div class="divider"><span></span></div>   
            <ul class="subNav">
                <li><a title="" class="this"><span class="icos-frames"></span>�����̼�</a></li>
                <li><a title=""><span class="icos-transfer"></span>����̼�</a></li>
                <li><a title=""><span class="icos-transfer"></span>�����û�</a></li>
                <li><a title=""><span class="icos-transfer"></span>��������</a></li>
                <li><a title=""><span class="icos-transfer"></span>��������</a></li>
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
        <div class="bc">
            <a>�̼��������</a>
        </div>
        <div class="breadLinks">
            <ul>
                <li><a href="#" title=""><i class="icos-list"></i><span>��¼����</span> <strong>({$count})</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span>�����</span> <strong>(+1)</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span></span>�����<strong>(+2)</strong></a></li>
            </ul>
             <div class="clear"></div>
        </div>
    </div>
    
    <div class="insert-btn"><input type="submit" class="buttonS bGreen" value="�½���¼"/></div>
    <div class="wrapper">
        <div class="widget">
            <div class="whead"><h6>С�����ݱ�</h6><div class="clear"></div></div>       
            <table cellpadding="0" cellspacing="0" width="100%" class="tDefault">
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
                <tr>
                    <td>{$item.tip_id}</td>
                    <td>{$item.tip_title}</td>
                    <td>{$item.tip_business}</td>
                    <td>{$item.tip_url}</td>
                    <td><form><input type="submit" url="#" class="buttonS bRed" name="del" value="ɾ��"/><input type="submit" class="buttonS bBlue" value="�޸�"/></form></td>
            </div>
                </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    

        
       <div class="divider"><span></span></div>

  </div>
  
    
</div>