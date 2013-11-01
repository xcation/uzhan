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
     <td align='center'>所属分类</td>
     <td align='center'>教程名称</td>
     <td align='center'>教程url</td>
     <td align='center'>操作</td>
   </tr>
 </thead>

   {foreach from=$member key=key item=item}
           <tr>{$key}
             <td width="200" align='center'>{$item.id}</td>
             <td width="20" align='center'></td>            
             <td width="200" align='center'>{$item.nick}</td>
             <td width="200" align='center'>{$item.jifen}</td>
             <td width="100"  align="center">
               <a href="">修改</a>
               |
               <a class="J_ajax_del" href="">删除</a>

             </td>
           </tr>
     {/foreach}
       </table>
      </form>