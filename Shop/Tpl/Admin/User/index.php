 <form name="myform" action="#" method="post">
 <table width="100%">
   <colgroup> 
   <col width="100"> 
   <col width="200" > 
   <col width="200"> 
   <col width="200"></colgroup>
 <thead>
   <tr>
  
   {$de}
     <td align='center'>ID</td>
     <td align='center'>��������</td>
     <td align='center'>�̳�����</td>
     <td align='center'>�̳�url</td>
     <td align='center'>����</td>
   </tr>
 </thead>

   {foreach from=$member key=key item=item}
           <tr>{$key}
             <td width="200" align='center'>{$item.id}</td>
             <td width="20" align='center'></td>            
             <td width="200" align='center'>{$item.nick}</td>
             <td width="200" align='center'>{$item.jifen}</td>
             <td width="100"  align="center">
               <a href="">�޸�</a>
               |
               <a class="J_ajax_del" href="">ɾ��</a>

             </td>
           </tr>
     {/foreach}
       </table>
      </form>