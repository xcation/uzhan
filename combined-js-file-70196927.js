var DOM = KISSY.DOM,
    Event = KISSY.Event,
    Anim = KISSY.Anim;
var $ = KISSY.all;
var Kscroll = KISSY.Kscroll;


/****************************
 *
 *������λ
 *
 *****************************/

GS.addListener('windowScroll', function(e) {

    var t = e.scrollTop;

    if (t >= 250) {

        DOM.query(".header")[0].style.top = "0";
        DOM.query(".header")[0].style.position = "fixed";

        DOM.query(".nav")[0].style.top = "90px";
        DOM.query(".nav")[0].style.position = "fixed";

        DOM.query(".service_c")[0].style.top = "90px";
        DOM.query(".service_c")[0].style.position = "fixed";

    } else {

        DOM.query(".header")[0].style.top = "0";
        DOM.query(".header")[0].style.position = "relative";

        DOM.query(".nav")[0].style.top = "30px";
        DOM.query(".nav")[0].style.position = "relative";

        DOM.query(".service_c")[0].style.top = "50px";
        DOM.query(".service_c")[0].style.position = "relative";



    }

});

//¥�㵼����Ч
DOM.addClass(DOM.query(".nav .floor1")[0], "current1");
$(".nav a").on("click", function(ev) {
    var navId = DOM.attr(this, 'data-id');

    for (var i = 1; i <= 6; i++) {
        DOM.removeClass(DOM.query(".nav .floor" + i), "current" + i);
    }

    DOM.addClass(DOM.query(this)[0], "current" + navId);
});



function OpenfadeIn(elem, height) {
    var anim;
    if (anim) {
        anim.stop();
    }

    // ��������
    anim = Anim(elem, {
        display: "block",
        height: height + "px"
    }, 1);
    anim.run();
}


var navcHeight = 0;
[1, 2, 3, 4, 5, 6].forEach(function(i) {


    //����¥�㵼���߶�
    // var latticeHeight = ($(".lattice" + i + " .lattice_box").len() / 4 + $(".lattice" + i + " .lattice_box").len() % 4) * 340;
    // navcHeight += latticeHeight;

    var myid = 0;
    var myid1 = 0;
    var businessid = 0;

    $(".lattice" + i + " .lattice_box").on("mouseover", function(ev) {
        myid = DOM.attr(this, 'data-id');
        $(".lattice" + i + " .latticeBox" + myid + " .lattice_info_on").show();
    });

    $(".lattice" + i + " .lattice_box").on("mouseout", function(ev) {
        myid = DOM.attr(this, 'data-id');
        $(".lattice" + i + " .latticeBox" + myid + " .lattice_info_on").hide();
    });


    var con = 0;
    //������������
    $(".lattice" + i + " .lattice_box .lattice_info_on .c_infobg_play").on("click", function(ev) {
        myid1 = DOM.attr(this, 'data-id');
        businessid = DOM.attr(this, 'data-ids');



        //���㵯����λ��
        var num = myid1 - 1000;
        var id = (num % 4) == 0 ? ((4 - (num % 4)) + 1 + (num - 4) + 1000) : ((4 - (num % 4)) + 1 + num + 1000);

        if (con > 0 && con != id && DOM.query(".lattice" + i + " .lattice_ks")[0]) {
            DOM.query(".lattice" + i)[0].removeChild(KISSY.DOM.query(".lattice" + i + " .lattice_ks")[0]);
        }
        con = id;

        if (!DOM.query(".lattice" + i + " .lattice_ks")[0]) {
            if (DOM.query(".lattice" + i + " .latticeBox" + id)[0]) {
                DOM.query(".lattice" + i)[0].insertBefore(document.createElement("div"), DOM.query(".lattice" + i + " .latticeBox" + id)[0]);
                DOM.query(".lattice" + i + " .latticeBox" + id)[0].previousSibling.className = "lattice_ks";
            } else {
                DOM.query(".lattice" + i)[0].appendChild(document.createElement("div"));
                DOM.query(".lattice" + i)[0].lastChild.className = "lattice_ks";
            }
        }



        KISSY.io({

            dataType: 'json',
            url: "/index.php?g=Index&m=Index&a=showdetailandtip",
            data: {
                // 'collection_business_id': myid,
                'businessid': businessid,
                'type': 'top',
                'format': 'json'
            },
            success: function(data) {

                if (data.status > 0) {
                    //���õ���������

                    //���õ���������
                    var str = "";

                    str += '            <div class="lattice_ks_info">';
                    str += '                <div class="ks_info_top fl">';
                    str += '                    <div class="ks_leftimg fl"><img src="/assets/images/ks_07.png"></div>';
                    str += '                    <div class=" ks_info_top_c fl">';
                    str += '                        <div class="jt fl mt13"></div>';
                    str += '                        <div class="close fr mt18"><a></a></div>';
                    str += '                    </div>';
                    str += '                    <div class="ks_rightimg fr"><img src="/assets/images/ks_08.png"></div>';
                    str += '                </div>';
                    str += '                <div class="ks_info fl">';
                    str += '                    <div class="ks_info_left fl"></div>';
                    str += '                    <div class="ks_info_1 fl">';
                    str += '                        <div class="shop_logo fl">';
                    str += '                            <div class="shop_logo_img mt5"><img src="/assets/images/shop/' + data.data[0].business_imgb + '" class="yj1"></div>';
                    str += '                            <div class="shop_logo_x"></div>';
                    str += '                            <div class="shop_name tc">';
                    str += '                                <div class="shop_name_logo pt10"><img src="/assets/images/shop_logo.png"></div>';
                    str += '                                    <p class="f14 cof">Ӣ�����������������װ���׳�����ʿ�п�</p>';
                    str += '                                </div>';
                    str += '                                <div class="shop_logo_x"></div>';
                    str += '                                <div class="shop_bottom tc pt5 yj2"><img src="/assets/images/stop.png"></div>';
                    str += '                            </div>';
                    str += '                            <div class="shop_contact fl ml16">';
                    str += '                                <div class="shop_contact_img mt5">';
                    str += '                                    <div class="insingle_bg"></div>';
                    str += '                                    <a href="#" class="insingle_info"></a>';
                    str += '                                    <ul class="insingle_list"></ul>';
                    str += '                                    <div class="insingle_list_img">';
                    str += '                                         <a href="#" target="_blank"><img src="/assets/images/shop/' + data.data[0].business_img3 + '" class="yj1" width="300" height="236" title="ͼƬ�ֲ�1" alt="ͼƬ�ֲ�" /></a> ';
                    str += '                                         <a href="#" class="in" target="_blank"><img src="/assets/images/shop/' + data.data[0].business_img1 + '"  class="yj1" width="300" height="236" title="ͼƬ�ֲ�2" alt="ͼƬ�ֲ�" /></a>';
                    str += '                                         <a href="#" class="in" target="_blank"><img src="/assets/images/shop/' + data.data[0].business_img2 + '" class="yj1" width="300" height="236" title="ͼƬ�ֲ�3" alt="ͼƬ�ֲ�" /></a>';
                    str += '                                    </div>';
                    str += '                                </div>';
                    str += '                                <div class="shop_x"></div>';
                    str += '                                <div class="shop_xb">';
                    str += '                                    <div class="shop_xb_img ml20 mt5 fb f14 tc fl">С��</div>';
                    str += '                                    <div class="shop_xb_dp fl mt20 ml10"><a href="#"><img src="/assets/images/base.png"></a></div>';
                    str += '                                </div>';
                    str += '                                <div class="shop_x"></div>';
                    str += '                                <div class="shop_ww">';
                    str += '                                    <ul>';
                    str += '                                        <li class="ww fl tc mt8 ml15"><a href="http://www.taobao.com/webww/ww.php?ver=3&touid=' + data.data[0].business_contact + '&siteid=cntaobao&status=1&charset=utf-8"></a></li>';
                    str += '                                        <li class="hy fl tc mt8 ml65"><a href="' + data.data[0].business_backyard + '"></a></li>';
                    str += '                                        <li class="gwc fl tc mt8 ml65"><a href="#"></a></li>';
                    str += '                                    </ul>';
                    str += '                                </div>';
                    str += '                                <div class="shop_x"></div>';
                    str += '                                <div class="shop_pf yj2">';
                    str += '                                    <div class="cpzs fl cof fb ml20 f14">';
                    str += '                                        <span class="fl mt5 f12 tc">' + data.data[0].business_plevel + '</span>';
                    str += '                                        <div class="ml5 fl mt5">��Ʒָ��</div>';
                    str += '                                    </div>';
                    str += '                                    <div class="fwzs fl cof fb ml30 f14">';
                    str += '                                        <span class="fl mt5 f12 tc">' + data.data[0].business_slevel + '</span>';
                    str += '                                        <div class="ml5 fl mt5">����ָ��</div>';
                    str += '                                    </div>';
                    str += '                                </div>';
                    str += '                            </div>';

                    str += '                            <!--Ȧ�ѽ��STAR-->';
                    str += '                            <div class="shop_answer fl ml16">';
                    str += '                                <div class="shop_answer_title mt5 yj1">';
                    str += '                                    <div class="shop_answer_title_img"><img src="/assets/images/user-2.png" class="mt5"></div>';
                    str += '                                </div>';
                    str += '                            <div class="shop_answer_x"></div>';
                    str += '                            <div class="shop_answer_info">';
                    str += '                                <div class="comments_list fl">';
                    str += '                                    <ul>';
                    str += '                                        <li class="comments_item fl">';
                    str += '                                            <div class="comments_item_bd pt10">';
                    str += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
                    str += '                                                <div class="comments_content ml5 fl">';
                    str += '                                                    <div class="comments_content ask fl pt10 mb10">';
                    str += '                                                        <span class="c000"><a href="#">��¶��</a></span>����·�������ô��?�᲻������?</div>';
                    str += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                </div>';
                    str += '                                            </div>';
                    str += '                                            <div class="shop_answer_x fl mt5"></div>';
                    str += '                                        </li>';
                    str += '                                        <li class="comments_item fl">';
                    str += '                                            <div class="comments_item_bd mt10">';
                    str += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/05.jpg" class="yj"></div>';
                    str += '                                                <div class="comments_content ml5 fl">';
                    str += '                                                    <div class="comments_content ask fl pt10 mb10">';
                    str += '                                                        <span class="c000"><a href="#">�����£�</a></span>�ҵ����175cm������65KG�Ҹ�ѡ��ʲô���ͺ�?</div>';
                    str += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                </div>';
                    str += '                                            </div>';
                    str += '                                            <div class="mod_comments_sub ml25">';
                    str += '                                                <ul>';
                    str += '                                                    <li class="comments_item mb10">';
                    str += '                                                        <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/06.jpg" class="yj"></div>';
                    str += '                                                        <div class="comments_content1 ml5 fl">';
                    str += '                                                            <div class="comments_content1 ask fl pt10 mb10">';
                    str += '                                                                <span class="c000"><a href="#">��򵥵�</a></span><span class="hf"> �ظ� </span><span class="c000"><a href="#">�����£�</a></span>����·�������ô��?�᲻������?</div>';
                    str += '                                                            <div class="comments_op fr tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                        </div>';
                    str += '                                                    </li>';
                    str += '                                                    <li class="comments_item mb10">';
                    str += '                                                        <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
                    str += '                                                        <div class="comments_content1 ml5 fl">';
                    str += '                                                            <div class="comments_content1 ask fl pt10 mb10">';
                    str += '                                                                <span class="c000"><a href="#">΢΢</a></span><span class="hf"> �ظ� </span><span class="c000"><a href="#">�����£�</a></span>������ȥľľ���ҿ������ߴ�ܶ࣬���кܶ���ɹ����ͼƬ���Բο���?</div>';
                    str += '                                                            <div class="comments_op fr tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                        </div>';
                    str += '                                                    </li>';
                    str += '                                                </ul>';
                    str += '                                            </div>';
                    str += '                                            <div class="shop_answer_x fl mt5"></div>';
                    str += '                                        </li>';
                    str += '                                        <li class="comments_item fl">';
                    str += '                                            <div class="comments_item_bd pt10">';
                    str += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
                    str += '                                                <div class="comments_content ml5 fl">';
                    str += '                                                    <div class="comments_content ask fl pt10 mb10">';
                    str += '                                                        <span class="c000"><a href="#">��¶��</a></span>����·�������ô��?�᲻������?</div>';
                    str += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                </div>';
                    str += '                                            </div>';
                    str += '                                            <div class="shop_answer_x fl mt5"></div>';
                    str += '                                        </li>';
                    str += '                                        <li class="comments_item fl">';
                    str += '                                            <div class="comments_item_bd pt10">';
                    str += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
                    str += '                                                <div class="comments_content ml5 fl">';
                    str += '                                                    <div class="comments_content ask fl pt10 mb10">';
                    str += '                                                        <span class="c000"><a href="#">��¶��</a></span>����·�������ô��?�᲻������?</div>';
                    str += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                </div>';
                    str += '                                            </div>';
                    str += '                                            <div class="shop_answer_x fl mt5"></div>';
                    str += '                                        </li>';
                    str += '                                        <li class="comments_item fl">';
                    str += '                                            <div class="comments_item_bd pt10">';
                    str += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
                    str += '                                                <div class="comments_content ml5 fl">';
                    str += '                                                    <div class="comments_content ask fl pt10 mb10">';
                    str += '                                                        <span class="c000"><a href="#">��¶��</a></span>����·�������ô��?�᲻������?</div>';
                    str += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                </div>';
                    str += '                                            </div>';
                    str += '                                            <div class="shop_answer_x fl mt5"></div>';
                    str += '                                        </li>';
                    str += '                                        <li class="comments_item fl">';
                    str += '                                            <div class="comments_item_bd mt10">';
                    str += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/05.jpg" class="yj"></div>';
                    str += '                                                <div class="comments_content ml5 fl">';
                    str += '                                                    <div class="comments_content ask fl pt10 mb10">';
                    str += '                                                        <span class="c000"><a href="#">�����£�</a></span>�ҵ����175cm������65KG�Ҹ�ѡ��ʲô���ͺ�?</div>';
                    str += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                </div>';
                    str += '                                            </div>';
                    str += '                                            <div class="mod_comments_sub ml25">';
                    str += '                                                <ul>';
                    str += '                                                    <li class="comments_item mb10">';
                    str += '                                                        <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/06.jpg" class="yj"></div>';
                    str += '                                                        <div class="comments_content1 ml5 fl">';
                    str += '                                                            <div class="comments_content1 ask fl pt10 mb10">';
                    str += '                                                                <span class="c000"><a href="#">��򵥵�</a></span><span class="hf"> �ظ� </span><span class="c000"><a href="#">�����£�</a></span>����·�������ô��?�᲻������?</div>';
                    str += '                                                            <div class="comments_op fr tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                        </div>';
                    str += '                                                    </li>';
                    str += '                                                    <li class="comments_item mb10">';
                    str += '                                                        <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
                    str += '                                                        <div class="comments_content1 ml5 fl">';
                    str += '                                                            <div class="comments_content1 ask fl pt10 mb10">';
                    str += '                                                                <span class="c000"><a href="#">΢΢</a></span><span class="hf"> �ظ� </span><span class="c000"><a href="#">�����£�</a></span>������ȥľľ���ҿ������ߴ�ܶ࣬���кܶ���ɹ����ͼƬ���Բο���?</div>';
                    str += '                                                            <div class="comments_op fr tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
                    str += '                                                        </div>';
                    str += '                                                    </li>';
                    str += '                                                </ul>';
                    str += '                                            </div>';
                    str += '                                            <div class="shop_answer_x fl mt5"></div>';
                    str += '                                        </li>';
                    str += '                                    </ul>';
                    str += '                                </div>';
                    str += '                                <div class="shop_text fl mt25 f12"><textarea name="textarea" id="textarea" cols="1" class="pl15 pt10 pr10"></textarea></div>';
                    str += '                            </div>';
                    str += '                            <div class="shop_answer_x"></div>';
                    str += '                            <div class="comments_poster_addons yj2">';
                    str += '                                <div class="qz_poster_attach pt3 ml10 fl"><img src="/assets/images/small.png" class="mr5"><span>:����</span></div>';
                    str += '                                <div class="add_at pt3 ml10 fl">@���û�</div>';
                    str += '                                <div class="comments_poster_op fb fl tc ml50 mr20 f14 fb"><a>����</a></div>';
                    str += '                                <div class="comments_poster_op qx fl tc f14 fb"><a>ȡ��</a></div>';
                    str += '                            </div>';
                    str += '                        </div>';
                    str += '                        <!--Ȧ�ѽ��END -->';
                    str += '                    </div>';
                    str += '                    <div class="ks_info_right f1"></div>';
                    str += '                </div>';
                    str += '            </div>';

                    DOM.query(".lattice" + i + " .lattice_ks")[0].innerHTML = str;
                    
                    //���㵯�����ͷλ��
                    var jtNum = (num % 4 == 0) ? 4 : num % 4;
                    DOM.query(".lattice" + i + " .lattice_ks .ks_info_top_c .jt")[0].style.marginLeft = 260 * (jtNum - 1) + (260 - 107) / 2 - 31 + "px";

                    //��̬��ʾ������
                    OpenfadeIn(DOM.query(".lattice" + i + " .lattice_ks")[0], 530);



                    //ɹͼ������
                    SWTICH.scroll(3, ".insingle_list_img", ".insingle_list", ".insingle_info", ".insingle_bg", 4000);


                    //�Զ��������
                    var news = new Kscroll('.comments_list', {
                        prefix: "ks-",
                        hotkey: true,
                        bodydrag: true,
                        allowArrow: false
                    }) 

                    
           // KISSY.io({

           //  dataType: 'json',
           //  url: "/index.php?g=Index&m=Index&a=addquestionoranswer",
           //  data: {
           //      // 'collection_business_id': myid,
           //      'businessid': businessid,
           //      'type': 'top',
           //      'format': 'json'
           //  },
           //  success: function(data) {

           //      if (data.status > 0) {
           //          //���õ���������

           //          //���õ���������
           //          var ques = "";
                  
                  
           //          ques += '                                        <li class="comments_item fl">';
           //          ques += '                                            <div class="comments_item_bd pt10">';
           //          ques += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
           //          ques += '                                                <div class="comments_content ml5 fl">';
           //          ques += '                                                    <div class="comments_content ask fl pt10 mb10">';
           //          ques += '                                                        <span class="c000"><a href="#">��¶��</a></span>����·�������ô��?�᲻������?</div>';
           //          ques += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                </div>';
           //          ques += '                                            </div>';
           //          ques += '                                            <div class="shop_answer_x fl mt5"></div>';
           //          ques += '                                        </li>';
           //          ques += '                                        <li class="comments_item fl">';
           //          ques += '                                            <div class="comments_item_bd mt10">';
           //          ques += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/05.jpg" class="yj"></div>';
           //          ques += '                                                <div class="comments_content ml5 fl">';
           //          ques += '                                                    <div class="comments_content ask fl pt10 mb10">';
           //          ques += '                                                        <span class="c000"><a href="#">�����£�</a></span>�ҵ����175cm������65KG�Ҹ�ѡ��ʲô���ͺ�?</div>';
           //          ques += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                </div>';
           //          ques += '                                            </div>';
           //          ques += '                                            <div class="mod_comments_sub ml25">';
           //          ques += '                                                <ul>';
           //          ques += '                                                    <li class="comments_item mb10">';
           //          ques += '                                                        <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/06.jpg" class="yj"></div>';
           //          ques += '                                                        <div class="comments_content1 ml5 fl">';
           //          ques += '                                                            <div class="comments_content1 ask fl pt10 mb10">';
           //          ques += '                                                                <span class="c000"><a href="#">��򵥵�</a></span><span class="hf"> �ظ� </span><span class="c000"><a href="#">�����£�</a></span>����·�������ô��?�᲻������?</div>';
           //          ques += '                                                            <div class="comments_op fr tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                        </div>';
           //          ques += '                                                    </li>';
           //          ques += '                                                    <li class="comments_item mb10">';
           //          ques += '                                                        <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
           //          ques += '                                                        <div class="comments_content1 ml5 fl">';
           //          ques += '                                                            <div class="comments_content1 ask fl pt10 mb10">';
           //          ques += '                                                                <span class="c000"><a href="#">΢΢</a></span><span class="hf"> �ظ� </span><span class="c000"><a href="#">�����£�</a></span>������ȥľľ���ҿ������ߴ�ܶ࣬���кܶ���ɹ����ͼƬ���Բο���?</div>';
           //          ques += '                                                            <div class="comments_op fr tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                        </div>';
           //          ques += '                                                    </li>';
           //          ques += '                                                </ul>';
           //          ques += '                                            </div>';
           //          ques += '                                            <div class="shop_answer_x fl mt5"></div>';
           //          ques += '                                        </li>';
           //          ques += '                                        <li class="comments_item fl">';
           //          ques += '                                            <div class="comments_item_bd pt10">';
           //          ques += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
           //          ques += '                                                <div class="comments_content ml5 fl">';
           //          ques += '                                                    <div class="comments_content ask fl pt10 mb10">';
           //          ques += '                                                        <span class="c000"><a href="#">��¶��</a></span>����·�������ô��?�᲻������?</div>';
           //          ques += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                </div>';
           //          ques += '                                            </div>';
           //          ques += '                                            <div class="shop_answer_x fl mt5"></div>';
           //          ques += '                                        </li>';
           //          ques += '                                        <li class="comments_item fl">';
           //          ques += '                                            <div class="comments_item_bd pt10">';
           //          ques += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>';
           //          ques += '                                                <div class="comments_content ml5 fl">';
           //          ques += '                                                    <div class="comments_content ask fl pt10 mb10">';
           //          ques += '                                                        <span class="c000"><a href="#">��¶��</a></span>����·�������ô��?�᲻������?</div>';
           //          ques += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                </div>';
           //          ques += '                                            </div>';
           //          ques += '                                            <div class="shop_answer_x fl mt5"></div>';
           //          ques += '                                        </li>';
           //           ques+= '                                        <li class="comments_item fl">';
           //          ques += '                                            <div class="comments_item_bd pt10">';
           //          ques += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/04.jpg" class="yj"></div>'
           //          ques += '                                                <div class="comments_content ml5 fl">';
           //          ques += '                                                    <div class="comments_content ask fl pt10 mb10">';
           //          ques += '                                                        <span class="c000"><a href="#">ques��¶��</a></span>����·�������ô��?�᲻������?</div>';
           //          ques += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                </div>';
           //          ques += '                                            </div>';
           //          ques += '                                            <div class="shop_answer_x fl mt5"></div>';
           //          ques += '                                        </li>';
           //          ques += '                                        <li class="comments_item fl">';
           //          ques += '                                            <div class="comments_item_bd mt10">';
           //          ques += '                                                <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/05.jpg" class="yj"></div>';
           //          ques += '                                                <div class="comments_content ml5 fl">';
           //          ques += '                                                    <div class="comments_content ask fl pt10 mb10">';
           //          ques += '                                                        <span class="c000"><a href="#">�����£�</a></span>�ҵ����175cm������65KG�Ҹ�ѡ��ʲô���ͺ�?</div>';
           //          ques += '                                                    <div class="comments_op fl tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                </div>';
           //          ques += '                                            </div>';
           //          ques += '                                            <div class="mod_comments_sub ml25">';
           //          ques += '                                                <ul>';
           //          ques += '                                                    <li class="comments_item mb10">';
           //          ques += '                                                        <div class="ui_avatar ml10 fl pt10"><img src="/assets/images/06.jpg" class="yj"></div>';
           //          ques += '                                                        <div class="comments_content1 ml5 fl">';
           //          ques += '                                                            <div class="comments_content1 ask fl pt10 mb10">';
           //          ques += '                                                                <span class="c000"><a href="#">��򵥵�</a></span><span class="hf"> �ظ� </span><span class="c000"><a href="#">�����£�</a></span>����·�������ô��?�᲻������?</div>';
           //          ques += '                                                            <div class="comments_op fr tc c000 pt15"><img src="/assets/images/heart.png"><a href="#">�ظ�</a></div>';
           //          ques += '                                                        </div>';
           //          ques += '                                                    </li>';
                

           //          DOM.query(".lattice" + i + " .comments_list ul")[0].innerHTML = ques;             


                    //���Ʒ���������������50����֮��
                    var hfmaxl = 50;
                    $(".lattice" + i + " .lattice_ks .shop_answer textarea").on("keyup", function(ev) {
                        var s = KISSY.DOM.query(".lattice" + i + " .lattice_ks .shop_answer textarea")[0].value.length + 1;
                        if (s > hfmaxl) {
                            KISSY.DOM.query(".lattice" + i + " .lattice_ks .shop_answer textarea")[0].value = KISSY.DOM.query(".lattice" + i + " .lattice_ks .shop_answer textarea")[0].value.substr(0, hfmaxl - 1)
                        }
                    });

                    //����ر������
                    $(".lattice" + i + " .lattice_ks .ks_info_top_c .close").on("click", function(ev) {
                        DOM.query(".lattice" + i)[0].removeChild(DOM.query(".lattice" + i + " .lattice_ks")[0]);
                    });

                    //������ﳵ����PK��
                    $(".lattice" + i + " .lattice_ks .gwc").on("click", function(ev) {


                        $(".pk_shop").show();

                        KISSY.io({
                            dataType: 'json',
                            url: "/index.php?g=Index&m=Index&a=addcollection",
                            data: {
                                // 'collection_business_id': myid,
                                'businessid': businessid,
                                'userid': 1,
                                'type': 'top',
                                'format': 'json'
                            },
                            success: function(data) {

                                if (data.status > 0) {

                                    DOM.query(".pk_shop_info_left")[0].appendChild(document.createElement("div"));

                                    var listitem = data.data[0].collection_id;
                                    DOM.query(".pk_shop_info_left")[0].lastChild.className = "fl pkshoplist" + listitem;

                                    var strs = ""; //�滻�ַ���
                                    strs += '    <div class="pk_shop_pro fl mt5 pkshop' + listitem + '" data-id=' + listitem + '">';
                                    strs += '    <div class="pk_shop_close hidden pkclose' + data.data[0].collection_id + '" data-id=' + data.data[0].collection_id + '" style="display:none">';
                                    strs += '    <img src="/assets/images/close2.png"></div>';
                                    strs += '    <div class="pk_shop_pro_img">';
                                    strs += '    <div class="pk_shop_pro_img">';
                                    strs += '    <img width ="130" height="185" src="/assets/images/shop/' + data.data[0].business_imgs + '" class="yj1 mt15"></div>';
                                    strs += '    </div></div>';
                                    KISSY.DOM.query('.pkshoplist' + listitem)[0].innerHTML = strs;
                                    
                                    //������ﳵ�ر�PK��
                                    $(".pk_shop_button_close").on("click", function(ev) {
                                        $(".pk_shop").hide();
                                    });


                                    $(".pk_shop_info .pk_shop_pro").on("mouseover", function(ev, i) {
                                        var id = DOM.attr(this, 'data-id');
                                        $(".pk_shop_pro .pkclose" + id).show();
                                    });


                                    $(".pk_shop_info .pk_shop_pro").on("mouseout", function(ev, i) {
                                        var id = DOM.attr(this, 'data-id');
                                        $(".pk_shop_pro .pkclose" + id).hide();
                                    });


                                    $(".pk_shop_close").on("click", function(ev) {
                                        var id = DOM.attr(this, 'data-id');

                                        KISSY.io({
                                            dataType: 'json',
                                            url: "/index.php?g=Index&m=Index&a=deleteonecollection",
                                            data: {
                                                'collectionid': id,
                                                'userid': 1,
                                                'type': 'top',
                                                'format': 'json'
                                            },
                                            success: function(data) {

                                                if (data.status > 0) {

                                                    // KISSY.alert('ɾ���ɹ�');
                                                } else {
                                                    // KISSY.alert('���ݴ���');
                                                }
                                            }
                                        });


                                        $(".pkshop" + id).hide();

                                    });



                                } else {
                                    KISSY.alert('�Ѿ����');
                                }
                            }
                        });

                    });



                } else {
                    KISSY.alert('���ݴ���');
                }
            }
        });



    });


    // //����¥�㵼���߶�
    // if (navcHeight > 575) {
    //     DOM.query(".nav_c")[0].style.height = navcHeight + "px";
    // }


});



/****************************
 *
 *Tab�л�
 *
 *****************************/
var tab = 0;
$(".service .s_title li").on("click", function(ev) {
    var tab = DOM.attr(this, 'data-id');

    DOM.removeClass(DOM.query(".service .s_title li"), "current");
    $(".service .tab").hide();

    DOM.addClass(DOM.query(this)[0], "current");
    $(".service .tab" + tab).show();
});



function id(name) {
    return DOM.query(name)[0];
}

/****************************
 *
 *������
 *
 *****************************/
var DIALOG = function() {
    function fadeIn(elem, opacity) {
        var anim;
        if (anim) {
            anim.stop();
        }

        // ��������
        anim = Anim(elem, {
            display: "block",
            filter: "alpha(opacity=" + opacity + ")",
            opacity: opacity
        }, 1);
        anim.run();
    }

    function fadeOut(elem) {
        var anim;
        if (anim) {
            anim.stop();
        }
        // ��������
        anim = Anim(elem, {
            display: "none",
            filter: "alpha(opacity=0)",
            opacity: "0"
        }, 1);
        anim.run();
    }

    return {
        //opBtn:������ť,closeBtn:�رհ�ť,upId:������,shadowId:��Ӱ��,wrapperId:��װ��
        popup: function(opBtn, closeBtn, upId, shadowId, wrapperId) {
            //������
            $(opBtn).on("click", function() {
                id(upId).style.display = "block";
                id(upId).style.left = "40%";
                id(upId).style.top = "40%";
                id(upId).style.width = "300px";

                //��ʾ��Ӱ��
                id(wrapperId).appendChild(document.createElement("div"));
                id(wrapperId).lastChild.className = shadowId;

                fadeIn(id(shadowId), 0.5);
            });
            //���ؿ�
            $(closeBtn).on("click", function() {
                $(upId).hide();
                fadeOut(id(shadowId));
                id(wrapperId).removeChild(id(shadowId));
            });
        }
    }
}();

function fadeIn(elem) {
    DOM.removeClass(elem, "in");
    var anim;
    if (anim) {
        anim.stop();
    }
    // ��������
    anim = Anim(elem, {
        filter: "alpha(opacity=1)",
        opacity: "1"
    });
    anim.run();
}

/****************************
 *
 *ͼƬ�ײ�
 *
 *****************************/

var SWTICH = function() {
    //��������
    function each(arr, callback, thisp) {
        if (arr.forEach) {
            arr.forEach(callback, thisp);
        } else {
            for (var i = 0, len = arr.length; i < len; i++)
                callback.call(thisp, arr[i], i, arr);
        }
    }

    function fadeIn(elem) {
        DOM.removeClass(elem, "in");
        var anim;
        if (anim) {
            anim.stop();
        }
        // ��������
        anim = Anim(elem, {
            filter: "alpha(opacity=1)",
            opacity: "1"
        });
        anim.run();
    }

    function fadeOut(elem) {
        var anim;
        if (anim) {
            anim.stop();
        }
        // ��������
        anim = Anim(elem, {
            filter: "alpha(opacity=0)",
            opacity: "0"
        });
        anim.run();
        DOM.addClass(elem, "in");
    }

    return {
        //count:ͼƬ����,moduleId:��Ҫ������ģ��Id, wrapId:����ͼƬ��DIV,ulId:��ťDIV,infoId����Ϣ��,bgId:����,stopTime��ÿ��ͼƬͣ����ʱ��
        scroll: function(count, wrapId, ulId, infoId, bgId, stopTime) {
            var self = this;
            var targetIdx = 0; //Ŀ��ͼƬ���
            var curIndex = 0; //����ͼƬ���
            //���Li��ť
            var frag = document.createDocumentFragment();
            //console.log(frag);
            this.num = []; //�洢����li��Ӧ�ã�Ϊ���������¼���׼��
            this.info = id(infoId);
            for (var i = 0; i < count; i++) {
                //(this.num[i] = frag.appendChild(document.createElement("li"))).innerHTML = i + 1;
                //���ֲ���ʾ
                (this.num[i] = frag.appendChild(document.createElement("li")));
            }
            //console.log(id(ulId));
            id(ulId).appendChild(frag);
            //��ʼ����Ϣ
            this.img = id(wrapId).getElementsByTagName("a");
            this.info.innerHTML = self.img[0].firstChild.title;
            this.num[0].className = "on";

            //����banner_bgΪ͸��
            var banAnim = Anim(id(bgId), {
                filter: "alpha(opacity=0.3)",
                opacity: "0.3"
            }, 0.01);
            banAnim.run();
            //�����˵�һ���������ͼƬ����Ϊ͸��
            each(this.img, function(elem, idx, arr) {
                if (idx != 0) {
                    DOM.addClass(elem, "in");
                    var anim;
                    if (anim) {
                        anim.stop();
                    }
                    // ��������
                    anim = Anim(elem, {
                        filter: "alpha(opacity=0)",
                        opacity: "0"
                    }, 0.01);
                    anim.run();
                    DOM.addClass(elem, "in");
                }
            });
            //Ϊ���е�li��ӵ���¼�
            each(this.num, function(elem, idx, arr) {
                elem.onclick = function() {
                    self.fade(idx, curIndex, wrapId, ulId);
                    curIndex = idx;
                    targetIdx = idx;
                }
            });
            //�Զ��ֲ�Ч��
            var itv = setInterval(function() {
                if (targetIdx < self.num.length - 1) {
                    targetIdx++;
                } else {
                    targetIdx = 0;
                }
                self.fade(targetIdx, curIndex, wrapId, ulId);
                curIndex = targetIdx;
            }, stopTime);
            id(ulId).onmouseover = function() {
                clearInterval(itv)
            };
            id(ulId).onmouseout = function() {
                itv = setInterval(function() {
                    if (targetIdx < self.num.length - 1) {
                        targetIdx++;
                    } else {
                        targetIdx = 0;
                    }
                    self.fade(targetIdx, curIndex, wrapId, ulId);
                    curIndex = targetIdx;
                }, stopTime);
            }
        },
        fade: function(idx, lastIdx, wrapId, ulId) {
            if (idx == lastIdx) return;
            var self = this;
            //fadeOut(self.img[lastIdx]);
            //fadeIn(self.img[idx]);
            fadeOut(DOM.query(wrapId + " a")[lastIdx]);
            fadeIn(DOM.query(wrapId + " a")[idx]);

            each(self.num, function(elem, elemidx, arr) {
                if (elemidx != idx) {
                    self.num[elemidx].className = '';
                } else {
                    id(ulId).style.background = "";

                    //self.num[elemidx].className = 'on';
                    DOM.query(ulId + " li")[elemidx].className = 'on';
                }
            });
            this.info.innerHTML = self.img[idx].firstChild.title;
        }
    }
}();



/* ��̨ */


KISSY.all(".article-del").on("click", function(ev) {
    var myid = 0;
    myid = DOM.attr(this, 'data-id');
    KISSY.io({
        dataType: 'json',
        url: "/index.php?g=Admin&m=Tip&a=deletearticle",
        data: {
            'del_id': myid,
            'type': 'top',
            'format': 'json'
        },
        success: function(data) {
            if (data.status > 0) {
                KISSY.all('.article-list' + data.data).hide(); //���ﲻ��ʹ��KISSY.DOM
                KISSY.all('.result-status').text("ɾ���ɹ���"); //�������ʹ�á�.text
            }
        }
    });
});

KISSY.all(".tip_add_button").on("click", function(ev) {
    var title = "",
        businessid = 2,
        myurl = "",
        status = 1;
    //status 0��ʾ���� 1��ʾ�½�
    title = KISSY.DOM.query('.tip_title')[0].value;
    businessid = KISSY.DOM.query('.tip_businessid')[0].value;
    myurl = KISSY.DOM.query('.tip_url')[0].value;
    KISSY.io({
        dataType: 'json',
        url: "/index.php?g=Admin&m=Tip&a=insertx",
        data: {
            'tip_title': title,
            'tip_business': businessid,
            'tip_url': myurl,
            'status': status,
            'type': 'top',
            'format': 'json'
        },
        success: function(data) {

            if (data.status > 0) {
                KISSY.alert('OK');
            } else {
                KISSY.alert('���ݴ���');
            }
        }
    });
});

KISSY.all(".article-change").on("click", function(ev) {
    console.log("ddd");
    var myid = 0,
        status = 0; //status 0��ʾ���� 1��ʾ�½�
    myid = DOM.attr(this, 'data-id');
    KISSY.io({
        dataType: 'json',
        url: "/index.php?g=Admin&m=Tip&a=insertarticle",
        data: {
            'update_id': myid,
            'status': status,
            'type': 'top',
            'format': 'json'
        },
        success: function(data) {
            if (data.status > 0) {
                KISSY.all('.article-list' + data.data).hide(); //���ﲻ��ʹ��KISSY.DOM
                KISSY.all('.result-status').text("ɾ���ɹ���"); //�������ʹ�á�.text
            }
        }
    });
});

KISSY.all(".business-del").on("click", function(ev) {
    var myid = 0;
    myid = DOM.attr(this, 'data-id');
    KISSY.io({
        dataType: 'json',
        url: "/index.php?g=Admin&m=Business&a=deletebusiness",
        data: {
            'del_id': myid,
            'type': 'top',
            'format': 'json'
        },
        success: function(data) {
            if (data.status > 0) {
                KISSY.all('.business-list' + data.data).hide(); //���ﲻ��ʹ��KISSY.DOM
                KISSY.all('.result-status').text("ɾ���ɹ���"); //�������ʹ�á�.text
            }
        }
    });
});;
