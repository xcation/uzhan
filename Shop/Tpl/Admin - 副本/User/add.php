<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="admin">
<table class="admin-table" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td class="admin-table-side">
            <!--��ߵĲ˵�-->
            <div class="menu-group">
            <h2>�̼�</h2>
                <ul>
                    <li><a href="/admin/view/managebusiness.php">�����̼�</a></li> 
                    <li><a href="/admin/view/addbusiness.php">����̼�</a></li>
                </ul>
            <h2>�û�</h2>
                <ul>
                    <li><a href="/admin/view/manageuser.php">�����û�</a></li>
                </ul>
            <h2>С��</h2>
                <ul>
                    <li class="current"><a href="/admin/view/addarticle.php">����С��</a></li>
                    <li><a href="/admin/view/managearticle.php">����С��</a></li>
                </ul>
            </div>
            <!--�˵�����-->
        </td>
        <td class="admin-table-main">
            <!--���ݲ���-->
            <div class="admin-main-header">
                <h1>��������</h1>
            </div>
            <div style="color:red; text-align: center; font-size: 20px">�������������״̬</div>
           
            <form name="form1"  method="post">
                <table class="admin-form-table" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <th width="230">С����ID:</th>
                        <td>
                            <input class="f-text" style="width:95%;" type="text" name="name" size="80" value="">
                        </td>
                    </tr>
                    <tr>
                        <th>�̼ҵ�ID:</th>
                        <td>
                            <input class="f-text" style="width:95%;" type="text" name="title" size="80" value="">
                        </td>
                    </tr>
                    <tr>
                        <th>С����ַ:</th>
                        <td>
                            <input class="f-text" style="width:95%;" type="text" name="alias" size="80" value="">
                        </td>
                    </tr>
                    <tr>
                        <th>С������:</th>
                        <td>
                            <input class="f-text" style="width:95%;" type="text" name="link" size="80" value="">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align:center;vertical-align:middle;">
                            <input type="hidden" name="dopost" value="create">
                            <input class="f-submit" type="submit" value="�ύ">
                        </th>
                    </tr>
                </table>
            </form>

        <!--���ݲ���-->
        </td>
    </tr>
</table>
</div>