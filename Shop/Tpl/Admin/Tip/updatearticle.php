<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>

<div class="admin_wrap">
        <!-- ��̨������ĿSTAR -->
        <div class="admin_sidebar fl">
            <div class="admin_subNav">
                <div class="admin_title tc fb f18">��̨����</div>
                <div class="divider"><span></span></div>
                <ul class="admin_subNav_menu">
                    <li><a href="/index.php?g=Admin&m=business" title="" class="this"><span class="icos-frames"></span>�����̼�</a></li>
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
                        <li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>�½�С��</span></a></li>
                        <li><a href="#" title=""><i class="icos-list"></i><span>��¼����</span> <strong>({$count})</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span>�����</span> <strong>(+1)</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span></span>�����<strong>(+2)</strong></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="insert-btn"><input type="submit" class="buttonS bGreen" value="�½���¼"/></div>
            </div>
            <div class="Data_Sheet">
                <div class="widget">
                    <form action="/index.php?g=Admin&m=Tip&a=insert" method="POST">
                        <ul class="admin-content">
                        <li>
                            <div class="label-like">С���ı��⣺</div>
                            <div class="input-long"><input class="inputfield" name="tip_title" value=""/></div>
                        </li>
                        <li>
                            <div class="label-like">С���ĵ�ַ��</div>
                            <div class="input-long"><input class="inputfield"  name="tip_url" value=""/></div>
                        </li>
                        <li>
                            <div class="label-like">С���̼�id��</div>
                            <div class="input-long"><input class="inputfield"  name="tip_business" value=""/></div>
                        </li>
                        <li>
                            <div class="label-like">С���Լ�id��</div>
                            <div class="input-long"><input class="inputfield" name="tip_id" value=""/></div>
                        </li>
                        <li class="save-btn">
                            <div class="input-button"><input type="submit" class="buttonS bGreen" value="����"/></div>
                        </li>
                    </ul>
                </form>
                    
                </div>
                <div class="result-status"><a></a></div>
                <div class="divider"><span></span></div>
            </div>
            </div>
        </div>
        <!-- �̼ҹ�����ϸEND -->

    </div>