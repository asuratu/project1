var ua = navigator.userAgent;
var ipad = ua.match(/(iPad).*OS\s([\d_]+)/),
    isIphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/),
    isAndroid = ua.match(/(Android)\s+([\d.]+)/),
    isMobile = isIphone || isAndroid;
/*这里是做公共头部与底部的*/


var head = '<header class="fadeInRight wow"><div class="headwrap clearfix"><a href="index.html"class="logobox"><img src="images/logo.png"alt=""></a><a href="tel:+"class="tel-btn wow fadeInDown"data-wow-delay="500ms"></a><ul class="navbox"><li class="navli"><a href="index.html"class="navTl"><span class="cn">首页</span></a></li><li class="navli"><a href="about.html"class="navTl"><span class="cn">公司概况</span></a><div class="subox"><a href="about.html#a1"class="te">公司简介</a><a href="about.html#a2"class="te">企业文化</a><a href="about.html#a3"class="te">发展历程</a><a href="about.html#a4"class="te">荣誉资质</a></div></li><li class="navli"><a href="retail.html"class="navTl"><span class="cn">服务业务</span></a><div class="subox"><a href="retail.html">零售业IT解决方案</a><a href="base.html">IT基础设施</a><a href="defend.html">业务系统运营/维护</a><a href="newretail.html">零售业新店IT支持</a><a href="retailsale.html">零售业系统软件销售</a><a href="itsale.html">IT设备销售</a></div></li><li class="navli"><a href="sass-service.html"class="navTl"><span class="cn">SAAS服务</span></a><div class="subox"><a href="sass-service.html">SAAS服务</a><a href="service.html#a1">下载中心</a><a href="service.html#a2">在线留言</a><a href="service.html#a3">FAQ问答</a></div></li><li class="navli"><a href="partner.html"class="navTl"><span class="cn">解决方案展示</span></a><div class="subox"><a href="partner.html#a1">大客户展示</a><a href="partner.html#a2">合作伙伴</a></div></li><li class="navli"><a href="news.html"class="navTl"><span class="cn">新闻资讯</span></a></li><li class="navli"><a href="contact.html"class="navTl"><span class="cn">联系我们</span></a><div class="subox"><a href="contact.html#a1">联系我们</a><a href="contact.html#a2">人才招聘</a></div></li></ul></div></header><div class="leg"></div><div class="mohead clearfix"><a class="logoBox"href="index.html"><img src="images/logo.png"/></a><div class="menu"><span></span><span></span><span></span></div></div><div class="maskout"><img src="images/close.png"/></div><ul class="menu_sub"><li><div class="subTitle bignav"><a href="index.html">首页</a></div></li><li><div class="subTitle">公司概况</div><div class="subbox"><a href="about.html#a1"class="te">公司简介</a><a href="about.html#a2"class="te">企业文化</a><a href="about.html#a3"class="te">发展历程</a><a href="about.html#a4"class="te">荣誉资质</a></div></li><li><div class="subTitle">服务业务</div><div class="subbox"><a href="retail.html">零售业IT解决方案</a><a href="base.html">IT基础设施</a><a href="defend.html">业务系统运营/维护</a><a href="newretail.html">零售业新店IT支持</a><a href="retailsale.html">零售业系统软件销售</a><a href="itsale.html">IT设备销售</a></div></li><li><div class="subTitle">SAAS服务</div><div class="subbox"><a href="sass-service.html">SAAS服务</a><a href="service.html#a1">下载中心</a><a href="service.html#a2">在线留言</a><a href="service.html#a3">FAQ问答</a></div></li><li><div class="subTitle">解决方案展示</div><div class="subbox"><a href="partner.html#a1">大客户展示</a><a href="partner.html#a2">合作伙伴</a></div></li><li><div class="subTitle bignav">新闻资讯</div></li><li><div class="subTitle">联系我们</div><div class="subbox"><a href="contact.html#a1">联系我们</a><a href="contact.html#a2">人才招聘</a></div></li></ul>';
var foot = '<footer><div class="wrap "><div class="top clearfix"><div class="lt"><a href="index.html"class="ftlogo"><img src="images/ftlogo.png"alt=""></a><div class="enjoybox"><a href=""class="wx enbtn hoverbtn"><img src="images/enjoy_01.png"class="nor"alt=""><img src="images/enjoy_01_m.png"class="act"alt=""></a><a href=""class="wx enbtn hoverbtn"><img src="images/enjoy_02.png"class="nor"alt=""><img src="images/enjoy_02_m.png"class="act"alt=""></a><a href=""class="wx enbtn hoverbtn"><img src="images/enjoy_03.png"class="nor"alt=""><img src="images/enjoy_03_m.png"class="act"alt=""></a></div><div class="ewmbox"><img src="images/ewm.png"alt=""></div></div><div class="rt"><ul class="fnavbox clearfix"><li><a href="about.html"class="tl">公司概况</a><a href="about.html#a1"class="te">公司简介</a><a href="about.html#a2"class="te">企业文化</a><a href="about.html#a3"class="te">发展历程</a><a href="about.html#a4"class="te">荣誉资质</a></li><li><a href="retail.html"class="tl">服务业务</a><a href="retail.html"class="te">零售业IT解决方案</a><a href="base.html"class="te">IT基础设施</a><a href="defend.html"class="te">业务系统运营/维护</a><a href="newretail.html"class="te">零售业新店IT支持</a><a href="retailsale.html"class="te">零售业系统软件销售</a><a href="itsale.html"class="te">IT设备销售</a></li><li><a href="sass-service.html"class="tl">SAAS服务</a><a href="sass-service.html"class="te">SAAS服务</a><a href="service.html#a1"class="te">下载中心</a><a href="service.html#a2"class="te">在线留言</a><a href="service.html#a3"class="te">FAQ问答</a></li><li><a href="partner.html"class="tl">解决方案展示</a><a href="partner.html#a1"class="te">大客户展示</a><a href="partner.html#a2"class="te">合作伙伴</a></li><li><a href="news.html"class="tl">新闻资讯</a><a href="news.html"class="te">风采展示</a></li><li><a href="contact.html"class="tl">联系我们</a><a href="contact.html#a1"class="te">联系我们</a><a href="contact.html#a2"class="te">人才招聘</a></li></ul></div></div><div class="bottom"><span>Copyright©2009-2019 Vinx China Co.,Ltd.All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;浙ICP 10021893号</span><a href="http://www.68team.com"target="_blank"rel="noopener noreferrer">网站建设：翰臣科技</a></div></div></footer>';
$("body").prepend(head).append(foot);
/*
*页面滚动函数;
*/
var changenav2 = false;

var TOP = false;

if ($(".outwrapper .wrap .rtsidebar").length > 0) {
    var sideTop = $(".outwrapper .wrap .rtsidebar").offset().top -170;
    var sideHeight = $(".outwrapper .wrap .rtsidebar").height();
}

document.addEventListener('scroll', scrollFunc2);
function scrollFunc2(event) {
    var scrollDistance = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    if (scrollDistance >= 100) { // 触发的位置
        if (changenav2 == false) {
            changenav2 = true;
            $("header").addClass("actheader");
        }
    } else {
        changenav2 = false;
        $("header").removeClass("actheader");
    }
    if (scrollDistance > window.innerHeight) {
        if (TOP == false) {
            TOP = true;
            $(".backTop").addClass("actbacTop");
        }
    } else {
        TOP = false;
        $(".backTop").removeClass("actbacTop");
    }

    if (scrollDistance >= sideTop && scrollDistance <  $('footer').offset().top - $('.rtsidebar ').height() - 170) {
        $(".rtsidebar").addClass("actsidebar");
        $(".rtsidebar").css({
            right: (document.body.clientWidth - $(".rtsidebar").parent().width()) / 2 + "px",
            width: ($(".rtsidebar").parent().width() * 0.25731) + "px"
        });
    } else {
        $(".rtsidebar").removeClass("actsidebar");
    }
    
    if(scrollDistance >= $('footer').offset().top - $('.rtsidebar ').height() - 170){

       $(".rtsidebar").addClass("absoluteRt"); 
       $(".rtsidebar").css({
        right:0
    })
    }else{
        $(".rtsidebar").removeClass("absoluteRt"); 
       
    }
}


$(".subTitle").click(function () {
    var _this = $(this);
    _this.toggleClass("menuact");
    _this.siblings(".subbox").stop(true, false).slideToggle();
    _this.parent("li").siblings("li").find(".subbox").stop(true, false).slideUp(300);
    _this.parent("li").siblings("li").find(".subTitle").removeClass("menuact");
})
//菜单点击事件
$(".menu").click(function () {
    $(".maskout").fadeIn(300);
    $(".menu_sub").css("right", "0");
    $("video").css("display", "none");
})
$(".maskout").click(function () {
    $(".maskout").fadeOut(300);
    $(".menu_sub").css("right", "-70%");
})
/*判断是不是IE*/
function isIE() { //ie?
    if (!!window.ActiveXObject || "ActiveXObject" in window)
        return true;
    else
        return false;
}

$("header .navbox .navli").hover(
    function () {
        var t = $(this);
        t.find(".subox").stop(true, false).slideDown(400);
    },
    function () {
        var t = $(this);
        t.find(".subox").stop(true, false).slideUp(400);
    }
)

/*组止冒泡*/
function stopBubble(e) {
    //如果提供了事件对象，则这是一个非IE浏览器
    if (e && e.stopPropagation)
        //因此它支持W3C的stopPropagation()方法
        e.stopPropagation();
    else
        //否则，我们需要使用IE的方式来取消事件冒泡
        window.event.cancelBubble = true;
}


/*阻止浏览器的默认行为*/
function stopDefault(e) {
    //阻止默认浏览器动作(W3C)
    if (e && e.preventDefault)
        e.preventDefault();
    //IE中阻止函数器默认动作的方式
    else
        window.event.returnValue = false;
    return false;
}


var ms = 0;



new WOW(
    {
        callback: function (e) {
            var tps = $(e).attr("ms");
            console.log(tps);
            switch (tps) {
                case "ms":
                    ms += .1;
                    $(e).css("animation-delay", ms + "s");
                    break;
            }
            $(e).addClass("wow2");
        }
    }).init();

var timeOuts = null;
function setTimes() {
    timeOuts = setTimeout(function () {
        ms = 0;
    }, 150);
}
$(window).scroll(function () {
    /*滚动时先清除上一个定时器,然后再设置新的定时器,以免出现多个定时器造成混乱*/
    clearTimeout(timeOuts);
    setTimes();
})



var swiper = {
    speed: 700,
    slideToClickedSlide: true,
    autoplayDisableOnInteraction: false,
    paginationClickable: true
}


function assignOBJ(e) {
    var b = {};
    for (var a in swiper) {
        if (!e[a]) {
            e[a] = swiper[a];
        }
    }
    return e;
}

// function extend (destination, source) {
//     for (var property in source) {
//         if (source.hasOwnProperty(property)) {
//             destination[property] = source[property];
//         }
//     }
//     return destination;
// };
$("header .navbox .navli").hover(
    function () {
        var t = $(this);
        t.find(".subox").stop(true, false).slideDown(400);
    },
    function () {
        var t = $(this);
        t.find(".subox").stop(true, false).slideUp(400);
    }
)


$(function () {
    hidden();
    $(".backTop").click(
        function () {
            $("html,body").animate({
                scrollTop: 0
            }, 1000)
        }
    )
})

function hidden() {
    var overs = document.getElementsByClassName("over");
    for (var i = 0; i < overs.length; i++) {
        var el = overs[i];
        var s = el.innerHTML;
        var n = el.offsetHeight;
        for (k = 0; k < s.length; k++) {
            el.innerHTML = s.substr(0, k);
            console.log(n, el.scrollHeight);
            if (n < el.scrollHeight) {
                el.style.overflow = 'hidden';
                el.innerHTML = s.substr(0, k - 3) + '...';
                break;
            }
        }
    }
}



// 首页
function creatInbanner() {
    var val = {
        loop: true,
        autoplay: 5000,
        effect: "fade",
        fade: {
            crossFade: true
        }
    }
    val = assignOBJ(val);

    return new Swiper("#inbanner", val);
}

// 首页
function creatMainYw() {
    var val = {
        effect: "fade",
        fade: {
            crossFade: true
        },
        pagination: "#mainSP",
        onlyExternal: true,
        onSlideChangeStart: function (e) {
            var ind = e.realIndex;
            $(".acticon").removeClass("acticon");
            console.log(ind);
            if (ind > 2) {
                ind = ind - 3;
                $(".ind_b .lt .iconlist").eq(1).find(".icon").eq(ind).addClass("acticon")
            } else {
                $(".ind_b .lt .iconlist").eq(0).find(".icon").eq(ind).addClass("acticon")
            }

        }
    }
    val = assignOBJ(val);

    return new Swiper("#main", val);
}


function creatPartner() {
    var val = {
        slidesPerView: 7,
        slidesPerGroup: 7,
        autoplay: 5000,
        loop: true,
        spaceBetween: "3.5211%",
        breakpoints:{
            768:{
                slidesPerView: 3,
                slidesPerGroup: 3,
            }
        }
    }
    val = assignOBJ(val);

    return new Swiper("#partner", val);
}