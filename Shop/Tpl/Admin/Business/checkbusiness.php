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
                    <li><a href="/index.php?g=Admin&m=business&a=checkbusiness" title=""><span class="icos-transfer"></span>����̼�</a></li>
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
                        <li><a href="#" title=""><i class="icos-list"></i><span>��¼����</span> <strong>({$count})</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span>�����</span> <strong>(+1)</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span></span>�����<strong>(+2)</strong></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="insert-btn"><a href="/index.php?g=Admin&m=Tip&a=insertarticle" class="buttonS bGreen">�����̼�</a></div>
            </div>
            <div class="Data_Sheet">
                <div class="widget">
                  <div class="whead">
                    <h6>����̼���Ϣ</h6>
                    <div class="clear"></div>
                  </div>
                  <table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
                    <div class="info_main">
                      <dl>
                        <dt>�̼�ID��</dt>
                        <dd class="pt7">
                          <input type="text" name="business_userid" id="business_userid"  class="dd_input">
                        </dd>
                      </dl>
                      <dl>
                        <dt>�̼�¥�㣺</dt>
                        <dd class="pt7">
                          <select class="" id="business_floor" name="person.category" style="">

                            <option value="">-- ��ѡ������¥�� --</option>

                            <option value="nvzhuang" >1F</option>

                            <option value="nanzhuang" >2F</option>

                            <option value="xielei" >3F</option>

                            <option value="xiangbao" >4F</option>

                            <option value="neiyi" >5F</option>

                            <option value="yundong" >6F</option>

                          </select>
                        </dd>
                      </dl>
                      <dl>
                        <dt>�������ƣ�</dt>
                        <dd class="pt7">
                          <input type="text" name="business_name" id="business_name"  class="dd_input">
                        </dd>
                      </dl>
                      <dl>
                        <dt>���̵�ַ��</dt>
                        <dd class="pt7">
                          <input type="text" name="business_address" id="business_address"  class="dd_input"></dd>
                      </dl>
                      <dl>
                        <dt>�����ʺţ�</dt>
                        <dd class="pt7">
                          <input type="text" name="business_contact" id="business_contact"  class="dd_input"></dd>
                      </dl>
                      <dl>
                        <dt>�̼�LOGO��</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">             
                            <span class="info-tip">
                              <span class="red">��</span>
                              �ļ���ʽGIF��JPG��JPEG��PNG�ļ���С80K���ڣ�����ߴ�80PX*80PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>��Ƶ��</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-video" width="120" height="90">                
                            <span class="info-tip">
                              <span class="red">��</span>
                              �ļ���ʽSWF��WAV��MP3��WMA�ļ���С200K���ڣ�����ʹ��SWF��ʽ
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>��Ʒָ����</dt>
                        <dd class="pt7">
                          <input type="text" name="business_plevel" id="business_plevel"  class="dd_input">                
                          <span class="red">ָ������Ϊ5��</span>
                        </dd>
                      </dl>
                      <dl>
                        <dt>����ָ����</dt>
                        <dd class="pt7">
                          <input type="text" name="business_slevel" id="business_slevel"  class="dd_input">                
                          <span class="red">ָ������Ϊ5��</span>
                        </dd>
                      </dl>
                      <dl>
                        <dt>��Ժ��ַ��</dt>
                        <dd class="pt7">
                          <input type="text" name="business_backyard" id="business_backyard"  class="dd_input"></dd>
                      </dl>
                      <dl>
                        <dt>չʾСͼ��</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">                
                            <span class="info-tip">
                              <span class="red">��</span>
                              �ļ���ʽJPG��JPEG���ߴ�210PX*290PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>չʾ��ͼ��</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">              
                            <span class="info-tip">
                              <span class="red">��</span>
                              �ļ���ʽJPG��JPEG���ߴ�375PX*295PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>�л�ͼһ��</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">             
                            <span class="info-tip">
                              <span class="red">��</span>
                              �ļ���ʽJPG��JPEG���ߴ�300PX*235PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>�л�ͼ����</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">             
                            <span class="info-tip">
                              <span class="red">��</span>
                              �ļ���ʽJPG��JPEG���ߴ�300PX*235PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>�л�ͼ����</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">              
                            <span class="info-tip">
                              <span class="red">��</span>
                              �ļ���ʽJPG��JPEG���ߴ�300PX*235PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                    </div>
                  </table>
                  <div class="input-button1">
                    <input type="submit" class="buttonS bBlue" value="���"/>                
                  </div>
                </div>
                <div class="result-status"><a></a></div>
                <div class="divider"><span></span></div>
            </div>
            </div>
        </div>
        <!-- �̼ҹ�����ϸEND -->

    </div>