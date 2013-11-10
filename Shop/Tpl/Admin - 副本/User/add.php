<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="admin">
<table class="admin-table" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td class="admin-table-side">
            <!--左边的菜单-->
            <div class="menu-group">
            <h2>商家</h2>
                <ul>
                    <li><a href="/admin/view/managebusiness.php">管理商家</a></li> 
                    <li><a href="/admin/view/addbusiness.php">添加商家</a></li>
                </ul>
            <h2>用户</h2>
                <ul>
                    <li><a href="/admin/view/manageuser.php">管理用户</a></li>
                </ul>
            <h2>小报</h2>
                <ul>
                    <li class="current"><a href="/admin/view/addarticle.php">增加小报</a></li>
                    <li><a href="/admin/view/managearticle.php">管理小报</a></li>
                </ul>
            </div>
            <!--菜单部分-->
        </td>
        <td class="admin-table-main">
            <!--内容部分-->
            <div class="admin-main-header">
                <h1>增加文章</h1>
            </div>
            <div style="color:red; text-align: center; font-size: 20px">这里输出操作的状态</div>
           
            <form name="form1"  method="post">
                <table class="admin-form-table" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <th width="230">小报的ID:</th>
                        <td>
                            <input class="f-text" style="width:95%;" type="text" name="name" size="80" value="">
                        </td>
                    </tr>
                    <tr>
                        <th>商家的ID:</th>
                        <td>
                            <input class="f-text" style="width:95%;" type="text" name="title" size="80" value="">
                        </td>
                    </tr>
                    <tr>
                        <th>小报地址:</th>
                        <td>
                            <input class="f-text" style="width:95%;" type="text" name="alias" size="80" value="">
                        </td>
                    </tr>
                    <tr>
                        <th>小报标题:</th>
                        <td>
                            <input class="f-text" style="width:95%;" type="text" name="link" size="80" value="">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align:center;vertical-align:middle;">
                            <input type="hidden" name="dopost" value="create">
                            <input class="f-submit" type="submit" value="提交">
                        </th>
                    </tr>
                </table>
            </form>

        <!--内容部分-->
        </td>
    </tr>
</table>
</div>