<cajamodules include="kissy/1.3.0/core,gs/1.0/index,kissy/gallery/kscroll/1.2/index,kissy/gallery/datalazyload/1.0/index" />
<script src="/assets/javascripts/default.js"></script>
<div class="trading-area">
    <!--头部开始-->
    <div class="header">
        <div class="head">
            <div class="logo fl ml80">
                <img src="/assets/images/logo.png" alt="" />
            </div>
            <div class="personal fr mt10">
                <div class="personal_img fl pt3">
                    <img src="/assets/images/sell.jpg" class="yj"></div>
                <div class="personal_name fl mt8 tc cof f16 fb ts">米露Cat</div>
                <div class="personal_ask fl mt8 tc">
                    <span class="cof ts">
                        <a href="/index.php?g=Member&m=index">个人中心</a>
                    </span>
                    <p class="f10">10</p>
                </div>
                <div class="personal_answer fl mt8 tc">
                    <span class="cof ts">
                        <a href="/index.php?g=Admin&m=business">后台演示</a>
                    </span>
                    <p class="f10">10</p>
                </div>
            </div>
        </div>
    </div>
    <!--头部结束-->
    <!--主体部分开始-->
    <div class="wrapper">
        <!--楼层导航部分STAR-->
        <div class="nav_c fl">
            <div class="nav fl">
                <a href="#floor1" class="floor1" data-id="1"></a>
                <a href="#floor2" class="floor2" data-id="2"></a>
                <a href="#floor3" class="floor3" data-id="3"></a>
                <a href="#floor4" class="floor4" data-id="4"></a>
                <a href="#floor5" class="floor5" data-id="5"></a>
                <a href="#floor6" class="floor6" data-id="6"></a>
            </div>
        </div>
        <!--楼层导航部分END-->
        <div class="cont fl clearfix">
            <!--一楼-->
            <div class="content-main main1 fl clearfix">
                  <div class="tit"><a name="floor1"></a></div>
                <div class="lattice lattice1 fl clearfix">
                    {foreach from=$allbusiness1 key=key item=item}
                    <div class="lattice_box pt23 latticeBox{$key+1001}"  data-id="{$key+1001}">
                        <div class="lattice_info latticeInfo1 tc">
                            <img src="/assets/images/shop/{$item.business_imgs}" class="yj1"></div>
                        <div class="lattice_info_on tc hidden">
                            <div class="c_infobg_play" data-id="{$key+1001}" data-ids="{$item.business_id}">
                                <img src="/assets/images/play.png" class="mt100"></div>
                            <div class="c_info_pf">
                                <div class="cpzs fl cof fb">
                                    <span class="fl f12">{$item.business_plevel}</span>
                                    产品指数
                                </div>
                                <div class="fwzs fl cof fb">
                                    <span class="fl f12">{$item.business_slevel}</span>
                                    服务指数
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
            <!--二楼-->
            <div class="content-main main2 fl clearfix">
                <div class="tit"><a name="floor2"></a></div>
                <div class="lattice lattice2 fl clearfix">
                    {foreach from=$allbusiness2 key=key item=item}
                    <div class="lattice_box pt23 latticeBox{$key+1001}"  data-id="{$key+1001}">
                        <div class="lattice_info latticeInfo1 tc">
                            <img src="/assets/images/shop/{$item.business_imgs}" class="yj1"></div>
                        <div class="lattice_info_on tc hidden">
                            <div class="c_infobg_play" data-id="{$key+1001}" data-ids="{$item.business_id}">
                                <img src="/assets/images/play.png" class="mt100"></div>
                            <div class="c_info_pf">
                                <div class="cpzs fl cof fb ml5">
                                    <span class="fl f12">{$item.business_plevel}</span>
                                    产品指数
                                </div>
                                <div class="fwzs fl cof fb">
                                    <span class="fl f12">{$item.business_slevel}</span>
                                    服务指数
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
            <!--三楼-->
            <div class="content-main main3 fl clearfix">
               <div class="tit"><a name="floor3"></a></div>
                <div class="lattice lattice3 fl clearfix">
                    {foreach from=$allbusiness3 key=key item=item}
                    <div class="lattice_box pt23 latticeBox{$key+1001}"  data-id="{$key+1001}">
                        <div class="lattice_info latticeInfo1 tc">
                            <img src="/assets/images/shop/{$item.business_imgs}" class="yj1"></div>
                        <div class="lattice_info_on tc hidden">
                            <div class="c_infobg_play" data-id="{$key+1001}" data-ids="{$item.business_id}">
                                <img src="/assets/images/play.png" class="mt100"></div>
                            <div class="c_info_pf">
                                <div class="cpzs fl cof fb ml5">
                                    <span class="fl f12">{$item.business_plevel}</span>
                                    产品指数
                                </div>
                                <div class="fwzs fl cof fb">
                                    <span class="fl f12">{$item.business_slevel}</span>
                                    服务指数
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
            <!--四楼-->
            <div class="content-main main4 fl clearfix">
               <div class="tit"> <a name="floor4"></a></div>
                <div class="lattice lattice4 fl clearfix">
                    {foreach from=$allbusiness4 key=key item=item}
                    <div class="lattice_box pt23 latticeBox{$key+1001}"  data-id="{$key+1001}">
                        <div class="lattice_info latticeInfo1 tc">
                            <img src="/assets/images/shop/{$item.business_imgs}" class="yj1"></div>
                        <div class="lattice_info_on tc hidden">
                            <div class="c_infobg_play" data-id="{$key+1001}" data-ids="{$item.business_id}">
                                <img src="/assets/images/play.png" class="mt100"></div>
                            <div class="c_info_pf">
                                <div class="cpzs fl cof fb ml5">
                                    <span class="fl f12">{$item.business_plevel}</span>
                                    产品指数
                                </div>
                                <div class="fwzs fl cof fb">
                                    <span class="fl f12">{$item.business_slevel}</span>
                                    服务指数
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
             <!--五楼-->
            <div class="content-main main5 fl clearfix">
               <div class="tit"> <a name="floor5"></a></div>
                <div class="lattice lattice5 fl clearfix">
                    {foreach from=$allbusiness5 key=key item=item}
                    <div class="lattice_box pt23 latticeBox{$key+1001}"  data-id="{$key+1001}">
                        <div class="lattice_info latticeInfo1 tc">
                            <img src="/assets/images/shop/{$item.business_imgs}" class="yj1"></div>
                        <div class="lattice_info_on tc hidden">
                            <div class="c_infobg_play" data-id="{$key+1001}" data-ids="{$item.business_id}">
                                <img src="/assets/images/play.png" class="mt100"></div>
                            <div class="c_info_pf">
                                <div class="cpzs fl cof fb ml5">
                                    <span class="fl f12">{$item.business_plevel}</span>
                                    产品指数
                                </div>
                                <div class="fwzs fl cof fb">
                                    <span class="fl f12">{$item.business_slevel}</span>
                                    服务指数
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
             <!--六楼-->
            <div class="content-main main6 fl clearfix">
               <div class="tit"> <a name="floor6"></a></div>
                <div class="lattice lattice6 fl clearfix">
                    {foreach from=$allbusiness6 key=key item=item}
                    <div class="lattice_box pt23 latticeBox{$key+1001}"  data-id="{$key+1001}">
                        <div class="lattice_info latticeInfo1 tc">
                            <img src="/assets/images/shop/{$item.business_imgs}" class="yj1"></div>
                        <div class="lattice_info_on tc hidden">
                            <div class="c_infobg_play" data-id="{$key+1001}" data-ids="{$item.business_id}">
                                <img src="/assets/images/play.png" class="mt100"></div>
                            <div class="c_info_pf">
                                <div class="cpzs fl cof fb ml5">
                                    <span class="fl f12">{$item.business_plevel}</span>
                                    产品指数
                                </div>
                                <div class="fwzs fl cof fb">
                                    <span class="fl f12">{$item.business_slevel}</span>
                                    服务指数
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>

    <!--服务承诺和风险保证金STAR-->
    <div class="service_c">
        <div class="service">
            <div class="s_title">
                <ul>
                    <li class="fl tc f14 cof ts mt10 ml10 current" data-id="1">服务承诺</li>
                    <li class="fl tc f14 cof ts mt10" data-id="2">风险保证金</li>
                </ul>
            </div>
            <div class="s_info w169 tab tab1">
                <div class="s_info_pzbz w169 mt10">
                    <div class="s_info_img mt20 ml15 fl">
                        <img src="/assets/images/s.png"></div>
                </div>
            </div>
            <div class="guarantee tab tab2 hidden">
                <div class="s_info_pzbz w169 mt10">
                    <div class="s_info_img mt20 ml15 fl"></div>
                </div>
            </div>
            <div class="erweima tc pt7 w169 ml20 mt5">
                <img src="/assets/images/erweima.png" alt="" />
            </div>
        </div>
    </div>
    <!--服务承诺和风险保证金END-->

    <!--主体部分结束-->
    <!--购物车STAR-->
    <div class="pk_shop hidden">
        <div class="pk_shop_button">
            <div class="pk_shop_button1 fr">
                <div class="pk_shop_button_cp fl mr20">
                    <img src="/assets/images/ks_cp.png"></div>
                <div class="pk_shop_button_fw fl mr20 ">
                    <img src="/assets/images/ks_fw.png"></div>
                <div class="pk_shop_button_close fl">
                    <img src="/assets/images/close3.png"></div>
            </div>
        </div>
        <div class="pk_shop_cont">
            <div class="pk_shop_top">
                <div class="pk_shop_top1 fl">
                    <div class="jt tc">
                        <img src="/assets/images/pk_01.png"></div>
                </div>
            </div>
            <div class="pk_shop_info">
                <div class="pk_shop_info_left tc">
                    {foreach from=$result_collect key=key item=item}
                    <div class="pk_shop_pro fl mt5 pkshop{$item.collection_id}" data-id="{$item.collection_id}">
                        <div class="pk_shop_close pkclose{$item.collection_id} hidden" data-id="{$item.collection_id}">
                            <img src="/assets/images/close2.png"></div>
                        <div class="pk_shop_pro_img">
                            <img width ="130" height="185" src="/assets/images/shop/{$item.business_imgs}" class="yj1 mt15"></div>
                    </div>
                    {/foreach}
                </div>
                <div class="pk_shop_info_right tc fr mt50">
                    <ul>
                        <li class="mb35">
                            <img src="/assets/images/left.png"></li>
                        <li>
                            <img src="/assets/images/right.png"></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!--购物车END-->
</div>