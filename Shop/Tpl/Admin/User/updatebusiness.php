<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>

<div class="admin_wrap">
        <!-- ��̨������ĿSTAR -->
        <div class="admin_sidebar fl">
            <div class="admin_subNav">
                <div class="admin_title tc fb f18">��̨����</div>
                <div class="divider"><span></span></div>
                <ul class="admin_subNav_menu">
                    <li><a href="/index.php?g=Admin&m=business" title=""><span class="icos-frames"></span>�����̼�</a></li>
                    <li><a href="/index.php?g=Admin&m=business&a=checkbusiness" title=""><span class="icos-transfer"></span>����̼�</a></li>
                    <li><a href="/index.php?g=Admin&m=user" title="" class="this"><span class="icos-transfer"></span>�����û�</a></li>
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
                        <li><a href="#" title=""><i class="icos-list"></i><span>��¼����</span> <strong>({$count})</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span>�����</span> <strong>(+1)</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span></span>�����<strong>(+2)</strong></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="insert-btn"><a href="/index.php?g=Admin&m=User&a=add" class="buttonS bGreen">�����û�</a></div>
            </div>
            <div class="Data_Sheet">
                <div class="widget">
                  <div class="whead">
                    <h6>�޸��û���Ϣ</h6>
                    <div class="clear"></div>
                  </div>
                  <table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
                    <div class="info_main">
                      <dl>
                        <dt>�û�ID��</dt>
                        <dd class="pt7">
                          <input type="text" name="uid" id=""  class="dd_input">
                        </dd>
                      </dl>
                      <dl>
                        <dt>��¼���룺</dt>
                        <dd class="pt7">
                          <input type="text" name="upwd" id="upwd"  class="dd_input">
                        </dd>
                      </dl>
                      <dl>
                        <dt>ȷ�����룺</dt>
                        <dd class="pt7">
                          <input type="text" name="upwd1" id="upwd1"  class="dd_input">
                        </dd>
                      </dl>
                      <dl>
                        <dt>�û����ƣ�</dt>
                        <dd class="pt7">
                          <input type="text" name="uid" id="uid"  class="dd_input">
                        </dd>
                      </dl>
                      <dl>
                        <dt>�û��ǳƣ�</dt>
                        <dd class="pt7">
                          <input type="text" name="nick" id="nick"  class="dd_input">
                        </dd>
                      </dl>
                    </div>
                  </table>
                  <div class="input-button1">
                    <input type="submit" class="buttonS bBlue" value="�޸�"/>                
                  </div>
                </div>
                <div class="result-status"><a></a></div>
                <div class="divider"><span></span></div>
            </div>
            </div>
        </div>
        <!-- �̼ҹ�����ϸEND -->

    </div>