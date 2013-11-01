

var DOM = KISSY.DOM, Event = KISSY.Event, Anim = KISSY.Anim;
var $ = KISSY.all;


/****************************
*
*������λ
*
*****************************/

GS.addListener('windowScroll', function (e) {

    var t = e.scrollTop;

    if (t >= 550) {
        $(".nav").show();
    } else {
        $(".nav").hide();
    }

});


[1, 2, 3, 4, 5, 6, 7, 8, 9].forEach(function (i) {

    /****************************
    *
    *ǰ̨ҳ������ƶ���������
    *
    *****************************/
    var myid = 0;

    KISSY.all(".main" + i + " .lattice-info").c_on("mouseover", function (ev) {
        myid = DOM.attr(this, 'data-id');

        if (KISSY.DOM.query(".main" + i + " .lattice" + myid + " img")[0]) {
            $(".main" + i + " .latticesel" + myid).hide();
            $(".main" + i + " .latticesel" + myid).show();

            DOM.query(".main" + i + " .lattice" + myid)[0].style.zIndex = '10';
            $(".dim" + i).show();
        }
    });


    KISSY.all(".main" + i + " .lattice-info").c_on("mouseout", function (ev) {

        if (KISSY.DOM.query(".main" + i + " .lattice" + myid + " img")[0]) {
            DOM.query(".main" + i + " .lattice" + myid)[0].style.zIndex = '1';
            $(".main" + i + " .latticesel" + myid).hide();
            $(".dim" + i).hide();
        }

    });



    /****************************
    *
    *Tab�л�
    *
    *****************************/
    $(".ask-tit" + i + " li").c_on("mouseover", function () {
        var myid = DOM.attr(this, 'data-id');

        KISSY.DOM.removeClass($(".ask-tit" + i + " li"), "current");
        $(".ask-con" + i + " .ask-bottom-con").hide();

        KISSY.DOM.addClass($(this), "current");
        $(".ask-con" + i + " .ask-bottom-con" + myid).show();
    });


});


KISSY.all(".content-main").c_on("mouseout", function (ev) {

    $(".content-main .lattice-con-sel").hide();
    DOM.query(".content-main .lattice-con")[0].style.zIndex = '1';
    $(".dim").hide();

});







/****************************
*
*ͼƬ�ײ�
*
*****************************/

var DOM = KISSY.DOM;
var Anim = KISSY.Anim;
var SWTICH = function () {
    function id(name) { return DOM.query("." + name)[0]; }
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
        anim = Anim(elem, { filter: "alpha(opacity=1)", opacity: "1" });
        anim.run();
    }
    function fadeOut(elem) {
        var anim;
        if (anim) {
            anim.stop();
        }
        // ��������
        anim = Anim(elem, { filter: "alpha(opacity=0)", opacity: "0" });
        anim.run();
        DOM.addClass(elem, "in");
    }

    return {
        //count:ͼƬ����,wrapId:����ͼƬ��DIV,ulId:��ťDIV,infoId����Ϣ����stopTime��ÿ��ͼƬͣ����ʱ��
        scroll: function (count, wrapId, ulId, infoId, stopTime) {
            var self = this;
            var targetIdx = 0;      //Ŀ��ͼƬ���
            var curIndex = 0;       //����ͼƬ���
            //���Li��ť
            var frag = document.createDocumentFragment();
            console.log(frag);
            this.num = [];    //�洢����li��Ӧ�ã�Ϊ���������¼���׼��
            this.info = id(infoId);
            for (var i = 0; i < count; i++) {
                (this.num[i] = frag.appendChild(document.createElement("li"))).innerHTML = i + 1;
            }
            console.log(id(ulId));
            id(ulId).appendChild(frag);
            //��ʼ����Ϣ
            this.img = id(wrapId).getElementsByTagName("a");
            this.info.innerHTML = self.img[0].firstChild.title;
            this.num[0].className = "on";

            //����banner_bgΪ͸��
            var banAnim = Anim(id("banner_bg"), { filter: "alpha(opacity=0.3)", opacity: "0.3" }, 0.01);
            banAnim.run();
            //�����˵�һ���������ͼƬ����Ϊ͸��
            each(this.img, function (elem, idx, arr) {
                if (idx != 0) {
                    DOM.addClass(elem, "in");
                    var anim;
                    if (anim) {
                        anim.stop();
                    }
                    // ��������
                    anim = Anim(elem, { filter: "alpha(opacity=0)", opacity: "0" }, 0.01);
                    anim.run();
                    DOM.addClass(elem, "in");
                }
            });

            //Ϊ���е�li��ӵ���¼�
            each(this.num, function (elem, idx, arr) {
                elem.onclick = function () {
                    self.fade(idx, curIndex);
                    curIndex = idx;
                    targetIdx = idx;
                }
            });
            //�Զ��ֲ�Ч��
            var itv = setInterval(function () {
                if (targetIdx < self.num.length - 1) {
                    targetIdx++;
                } else {
                    targetIdx = 0;
                }
                self.fade(targetIdx, curIndex);
                curIndex = targetIdx;
            }, stopTime);
            id(ulId).onmouseover = function () { clearInterval(itv) };
            id(ulId).onmouseout = function () {
                itv = setInterval(function () {
                    if (targetIdx < self.num.length - 1) {
                        targetIdx++;
                    } else {
                        targetIdx = 0;
                    }
                    self.fade(targetIdx, curIndex);
                    curIndex = targetIdx;
                }, stopTime);
            }
        },
        fade: function (idx, lastIdx) {
            if (idx == lastIdx) return;
            var self = this;
            fadeOut(self.img[lastIdx]);
            fadeIn(self.img[idx]);
            each(self.num, function (elem, elemidx, arr) {
                if (elemidx != idx) {
                    self.num[elemidx].className = '';
                } else {
                    id("list").style.background = "";
                    self.num[elemidx].className = 'on';
                }
            });
            this.info.innerHTML = self.img[idx].firstChild.title;
        }
    }
} ();
SWTICH.scroll(4, "banner_list", "list", "banner_info", 4000);






/****************************
*
*������
*
*****************************/

function fadeIn(elem, opacity) {
    var anim;
    if (anim) {
        anim.stop();
    }

    // ��������
    anim = Anim(elem, { display: "block", filter: "alpha(opacity=" + opacity + ")", opacity: opacity }, 1);
    anim.run();
}
function fadeOut(elem) {
    var anim;
    if (anim) {
        anim.stop();
    }
    // ��������
    anim = Anim(elem, { display: "none", filter: "alpha(opacity=0)", opacity: "0" }, 1);
    anim.run();

}


$(".personal-info-img").c_on("click", function () {

    KISSY.DOM.query(".ks-dialog")[0].style.display = "block";
    KISSY.DOM.query(".ks-dialog")[0].style.left = "40%";
    KISSY.DOM.query(".ks-dialog")[0].style.top = "40%";
    KISSY.DOM.query(".ks-dialog")[0].style.width = "300px";


    //��ʾ��Ӱ��
    KISSY.DOM.query(".wrapper")[0].appendChild(document.createElement("div"));
    KISSY.DOM.query(".wrapper")[0].lastChild.className = "ks-mask";

    fadeIn(KISSY.DOM.query(".ks-mask")[0], 0.5);

});

$(".xgnc").c_on("click", function () {

    KISSY.DOM.query(".dialog1")[0].style.display = "block";
    KISSY.DOM.query(".dialog1")[0].style.left = "40%";
    KISSY.DOM.query(".dialog1")[0].style.top = "40%";
    KISSY.DOM.query(".dialog1")[0].style.width = "300px";


    //��ʾ��Ӱ��
    KISSY.DOM.query(".wrapper")[0].appendChild(document.createElement("div"));
    KISSY.DOM.query(".wrapper")[0].lastChild.className = "ks-mask";

    fadeIn(KISSY.DOM.query(".ks-mask")[0], 0.5);

});

//�ر�
$(".ksclose1").c_on("click", function () {

    $(".dialog1").hide();

    fadeOut(KISSY.DOM.query(".ks-mask")[0]);

    KISSY.DOM.query(".wrapper")[0].removeChild(KISSY.DOM.query(".ks-mask")[0]);

});



$(".hf").c_on("click", function () {
    KISSY.DOM.query(".dialog2")[0].style.display = "block";
    KISSY.DOM.query(".dialog2")[0].style.left = "40%";
    KISSY.DOM.query(".dialog2")[0].style.top = "40%";
    KISSY.DOM.query(".dialog2")[0].style.width = "300px";


    //��ʾ��Ӱ��
    KISSY.DOM.query(".wrapper")[0].appendChild(document.createElement("div"));
    KISSY.DOM.query(".wrapper")[0].lastChild.className = "ks-mask";

    fadeIn(KISSY.DOM.query(".ks-mask")[0], 0.5);
});

//�ر�
$(".ksclose2").c_on("click", function () {

    $(".dialog2").hide();

    fadeOut(KISSY.DOM.query(".ks-mask")[0]);

    KISSY.DOM.query(".wrapper")[0].removeChild(KISSY.DOM.query(".ks-mask")[0]);

});















