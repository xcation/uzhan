<cajamodules include="kissy/1.3.0/core,gs/1.0/index" />
<script src="/assets/javascripts/default.js"></script>

<div class="admin_wrap">
        <!-- 后台管理栏目STAR -->
        <div class="admin_sidebar fl">
            <div class="admin_subNav">
                <div class="admin_title tc fb f18">后台管理</div>
                <div class="divider"><span></span></div>
                <ul class="admin_subNav_menu">
                    <li><a href="/index.php?g=Admin&m=business" title="" class="this"><span class="icos-frames"></span>管理商家</a></li>
                    <li><a href="/index.php?g=Admin&m=business&a=checkbusiness" title=""><span class="icos-transfer"></span>审核商家</a></li>
                    <li><a href="/index.php?g=Admin&m=user" title=""><span class="icos-transfer"></span>管理用户</a></li>
                    <li><a href="/index.php?g=Admin&m=tip&a=insertarticle" title=""><span class="icos-transfer"></span>增加文章</a></li>
                    <li><a href="/index.php?g=Admin&m=tip" title=""><span class="icos-transfer"></span>管理文章</a></li>
                </ul>
                <div class="divider"><span></span></div>
                <div class="fluid sideWidget">
                    <div class="grid6 tc"><input type="submit" class="buttonS bGreen" value="登录"/></div>
                    <div class="grid6"><input type="submit" class="buttonS bRed" value="退出"/></div>
                </div>    
                <div class="divider"><span></span></div>
            </div>
        </div>
        <!-- 后台管理栏目END -->

        <!-- 商家管理详细STAR -->
        <div class="admin_content">
            <div class="admin_breadLine">
                <div class="admin_breadLinks">
                    <ul>
                        <li><a href="#" title=""><i class="icos-list"></i><span>记录总数</span> <strong>({$count})</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span>待审核</span> <strong>(+1)</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span></span>已审核<strong>(+2)</strong></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="insert-btn"><a href="/index.php?g=Admin&m=Tip&a=insertarticle" class="buttonS bGreen">新增商家</a></div>
            </div>
            <div class="Data_Sheet">
                <div class="widget">
                  <div class="whead">
                    <h6>审核商家信息</h6>
                    <div class="clear"></div>
                  </div>
                  <table cellpadding="0" cellspacing="0" width="100%" class="tDefault article-table">
                    <div class="info_main">
                      <dl>
                        <dt>商家ID：</dt>
                        <dd class="pt7">
                          <input type="text" name="business_userid" id="business_userid"  class="dd_input">
                        </dd>
                      </dl>
                      <dl>
                        <dt>商家楼层：</dt>
                        <dd class="pt7">
                          <select class="" id="business_floor" name="person.category" style="">

                            <option value="">-- 请选择所在楼层 --</option>

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
                        <dt>店铺名称：</dt>
                        <dd class="pt7">
                          <input type="text" name="business_name" id="business_name"  class="dd_input">
                        </dd>
                      </dl>
                      <dl>
                        <dt>店铺地址：</dt>
                        <dd class="pt7">
                          <input type="text" name="business_address" id="business_address"  class="dd_input"></dd>
                      </dl>
                      <dl>
                        <dt>旺旺帐号：</dt>
                        <dd class="pt7">
                          <input type="text" name="business_contact" id="business_contact"  class="dd_input"></dd>
                      </dl>
                      <dl>
                        <dt>商家LOGO：</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">             
                            <span class="info-tip">
                              <span class="red">★</span>
                              文件格式GIF、JPG、JPEG、PNG文件大小80K以内，建议尺寸80PX*80PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>声频：</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-video" width="120" height="90">                
                            <span class="info-tip">
                              <span class="red">★</span>
                              文件格式SWF、WAV、MP3、WMA文件大小200K以内，建议使用SWF格式
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>产品指数：</dt>
                        <dd class="pt7">
                          <input type="text" name="business_plevel" id="business_plevel"  class="dd_input">                
                          <span class="red">指数满分为5分</span>
                        </dd>
                      </dl>
                      <dl>
                        <dt>服务指数：</dt>
                        <dd class="pt7">
                          <input type="text" name="business_slevel" id="business_slevel"  class="dd_input">                
                          <span class="red">指数满分为5分</span>
                        </dd>
                      </dl>
                      <dl>
                        <dt>后院地址：</dt>
                        <dd class="pt7">
                          <input type="text" name="business_backyard" id="business_backyard"  class="dd_input"></dd>
                      </dl>
                      <dl>
                        <dt>展示小图：</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">                
                            <span class="info-tip">
                              <span class="red">★</span>
                              文件格式JPG、JPEG，尺寸210PX*290PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>展示大图：</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">              
                            <span class="info-tip">
                              <span class="red">★</span>
                              文件格式JPG、JPEG，尺寸375PX*295PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>切换图一：</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">             
                            <span class="info-tip">
                              <span class="red">★</span>
                              文件格式JPG、JPEG，尺寸300PX*235PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>切换图二：</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">             
                            <span class="info-tip">
                              <span class="red">★</span>
                              文件格式JPG、JPEG，尺寸300PX*235PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                      <dl>
                        <dt>切换图三：</dt>
                        <dd class="pt7">
                          <div class="shop-photo">
                            <img src="/assets/images/shop_logo.jpg" class="shop-pic" width="80" height="80">              
                            <span class="info-tip">
                              <span class="red">★</span>
                              文件格式JPG、JPEG，尺寸300PX*235PX
                            </span>
                          </div>
                        </dd>
                      </dl>
                    </div>
                  </table>
                  <div class="input-button1">
                    <input type="submit" class="buttonS bBlue" value="审核"/>                
                  </div>
                </div>
                <div class="result-status"><a></a></div>
                <div class="divider"><span></span></div>
            </div>
            </div>
        </div>
        <!-- 商家管理详细END -->

    </div>