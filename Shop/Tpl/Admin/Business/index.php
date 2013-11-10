<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>

<div class="admin_wrap">
    <!-- ��̨������ĿSTAR -->
    <div class="admin_sidebar fl">
        <div class="admin_subNav">
            <div class="admin_title tc fb f18">��̨����</div>
            <div class="divider">
                <span></span>
            </div>
            <ul class="admin_subNav_menu">
                <li>
                    <a href="/index.php?g=Admin&m=business" title="" class="this">
                        <span class="icos-frames"></span>
                        �����̼�
                    </a>
                </li>
                <li>
                    <a href="/index.php?g=Admin&m=business&a=checkbusiness" title="">
                        <span class="icos-transfer"></span>
                        ����̼�
                    </a>
                </li>
                <li>
                    <a href="/index.php?g=Admin&m=user" title="">
                        <span class="icos-transfer"></span>
                        �����û�
                    </a>
                </li>
                <li>
                    <a href="/index.php?g=Admin&m=tip&a=insertarticle" title="">
                        <span class="icos-transfer"></span>
                        ��������
                    </a>
                </li>
                <li>
                    <a href="/index.php?g=Admin&m=tip" title="">
                        <span class="icos-transfer"></span>
                        ��������
                    </a>
                </li>
            </ul>
            <div class="divider">
                <span></span>
            </div>
            <div class="fluid sideWidget">
                <div class="grid6 tc">
                    <input type="submit" class="buttonS bGreen" value="��¼"/>
                </div>
                <div class="grid6">
                    <input type="submit" class="buttonS bRed" value="�˳�"/>
                </div>
            </div>
            <div class="divider">
                <span></span>
            </div>
        </div>
    </div>
    <!-- ��̨������ĿEND -->

    <!-- �̼ҹ�����ϸSTAR -->
    <div class="admin_content">
        <div class="admin_breadLine">
            <div class="admin_breadLinks">
                <ul>
                    <li class="icon-left">
                        <a href="#" title=""> <i class="icos-list"></i>
                            <span>�̼����ݱ�</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title=""> <i class="icos-listicos-list"></i>
                            <span>��¼����</span> <strong>({$count})</strong>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            <i class="icos-check"></i>
                            <span>�����</span> <strong>(+1)</strong>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            <i class="icos-check"></i>
                            <span></span>
                            �����
                            <strong>(+2)</strong>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="insert-btn">
                <a href="/index.php?g=Admin&m=business&a=insertbusiness" class="buttonS bGreen">�����̼�</a>
            </div>
        </div>
        <div class="Data_Sheet">
            <div class="widget">
                <div class="whead">
                    <h6>�̼����ݱ�</h6>
                    <div class="clear"></div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
                    <thead>
                        <tr>
                            <td>¥��</td>
                            <td>����</td>
                            <td>���̵�ַ</td>
                            <td>������</td>
                            <td>��Ʒָ��</td>
                            <td>����ָ��</td>
                            <td>Сͼ</td>
                            <td>����</td>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$list key=key item=item}
                        <tr class="business-list{$item.business_id}">
                            <td>{$item.business_floor}</td>
                            <td>{$item.business_name}</td>
                            <td>{$item.business_address}</td>
                            <td>{$item.business_contact}</td>
                            <td>{$item.business_plevel}</td>
                            <td>{$item.business_slevel}</td>
                            <td>{$item.business_imgs}</td>

                            <td>
                                <a class="buttonS bRed business-del" data-id="{$item.business_id}">ɾ��</a>
                                <a class="buttonS bBlue business-change" data-id="{$item.business_id}" href="/index.php?g=Admin&m=business&a=updatebusiness">�޸�</a>
                                <a class="buttonS bGold business-check" data-id="{$item.business_id}" href="/index.php?g=Admin&m=business&a=checkbusiness">���</a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
            <div class="pageinfo">
                <p>
                    �ܹ���{$count}����¼ ��{$currentpage}:{$maxpage}ҳ
                    <a href="/index.php?g=admin&m=business&p=1">&lt&lt</a>
                    <a href="/index.php?g=admin&m=business&p={$prepage}">ǰһҳ</a>
                    <a href="/index.php?g=admin&m=business&p={$prepage}">{$prepage}</a>
                    <a>{$currentpage}</a>
                    <a href="/index.php?g=admin&m=business&p={$nextpage}">{$nextpage}</a>
                    <a href="/index.php?g=admin&m=business&p={$nextpage}">��һҳ</a>
                    <a href="/index.php?g=admin&m=business&p={$maxpage}">&gt&gt</a>
                </p>
             <div>
                    <div class="result-status">
                        <a></a>
                    </div>
                    <div class="divider">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- �̼ҹ�����ϸEND --> </div>