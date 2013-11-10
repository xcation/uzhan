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
                    <li><a href="/index.php?g=Admin&m=business" title=""><span class="icos-transfer"></span>审核商家</a></li>
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
                        <li class="icon-left"><a href="#" title=""><i class="icos-list"></i><span>新建小报</span></a></li>
                        <li><a href="#" title=""><i class="icos-list"></i><span>记录总数</span> <strong>({$count})</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span>待审核</span> <strong>(+1)</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span></span>已审核<strong>(+2)</strong></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="insert-btn"><input type="submit" class="buttonS bGreen" value="新建记录"/></div>
            </div>
            <div class="Data_Sheet">
                <div class="widget">
                    <form action="/index.php?g=Admin&m=Tip&a=insert" method="POST">
                        <ul class="admin-content">
                        <li>
                            <div class="label-like">小报的标题：</div>
                            <div class="input-long"><input class="inputfield" name="tip_title" value=""/></div>
                        </li>
                        <li>
                            <div class="label-like">小报的地址：</div>
                            <div class="input-long"><input class="inputfield"  name="tip_url" value=""/></div>
                        </li>
                        <li>
                            <div class="label-like">小报商家id：</div>
                            <div class="input-long"><input class="inputfield"  name="tip_business" value=""/></div>
                        </li>
                        <li>
                            <div class="label-like">小报自己id：</div>
                            <div class="input-long"><input class="inputfield" name="tip_id" value=""/></div>
                        </li>
                        <li class="save-btn">
                            <div class="input-button"><input type="submit" class="buttonS bGreen" value="保存"/></div>
                        </li>
                    </ul>
                </form>
                    
                </div>
                <div class="result-status"><a></a></div>
                <div class="divider"><span></span></div>
            </div>
            </div>
        </div>
        <!-- 商家管理详细END -->

    </div>