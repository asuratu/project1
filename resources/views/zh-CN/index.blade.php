@extends('layouts.app')
@section('title', '首页')
@section('meta')
    <meta name="keywords" content="{{ '22'}}"/>
    <meta name="description" content="{{ '22'}}"/>
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <style>
        header .navbox .navli:nth-child(1) .navTl span {
            color: #0095fe;
        }
    </style>
@endpush
@section('content')
    <div class="inbanner_box">
        <div class="swiper-container" id="inbanner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/ind_01.jpg" class="pcbanner" alt="">
                    <img src="images/ind_01_m.jpg" class="mobanner" alt="">
                    <div class="wrap">
                        <div class="line"></div>
                        <div class="st ali_r">面向零售业/餐饮业</div>
                        <div class="tl ali_b">提供全球一站式IT解决方案</div>
                        <div class="moreBtn">了解更多</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/ind_01.jpg" class="pcbanner" alt="">
                    <img src="images/ind_01_m.jpg" class="mobanner" alt="">
                    <div class="wrap">
                        <div class="line"></div>
                        <div class="st ali_r">面向零售业/餐饮业</div>
                        <div class="tl ali_b">提供全球一站式IT解决方案</div>
                        <div class="moreBtn">了解更多</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/ind_01.jpg" class="pcbanner" alt="">
                    <img src="images/ind_01_m.jpg" class="mobanner" alt="">
                    <div class="wrap">
                        <div class="line"></div>
                        <div class="st ali_r">面向零售业/餐饮业</div>
                        <div class="tl ali_b">提供全球一站式IT解决方案</div>
                        <div class="moreBtn">了解更多</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap clearfix otwrap pcbanner">
            <div class="dy"></div>
            <div class="numbox clearfix">
                <div class="num counter">30</div>
                <div class="text">
                    <div class="icon">+</div>
                    <div class="te">30多年零售业IT经验</div>
                </div>
            </div>
            <div class="numbox clearfix">
                <div class="num counter">225</div>
                <div class="text">
                    <div class="icon">+</div>
                    <div class="te">225多人的技术团队</div>
                </div>
            </div>
            <div class="numbox clearfix">
                <div class="num counter">18</div>
                <div class="text">
                    <div class="icon">+</div>
                    <div class="te ali_r">18个全球营销网点</div>
                </div>
            </div>
            <div class="ljwjs">
                <span>了解维杰思</span>
            </div>
        </div>
    </div>
    <div class="ind_a">
        <img src="images/ind_06.png" class="zwtp wow fadeIn pcbanner" data-wow-delay="600ms" alt="">
        <div class="wrap clearfix">
            <div class="lt pcbanner">
                <img src="images/ind_02.png" class="wow zoomIn" ms="ms" alt="">
                <img src="images/ind_03.png" class="ps1 zoomIn wow" ms="ms" alt="">
                <img src="images/ind_04.png" class="ps2 zoomIn wow" ms="ms" alt="">
                <img src="images/ind_05.png" class="ps3 zoomIn wow" ms="ms" alt="">

                <div class="yn pf" ms="ms"><span class="tl ali_r">越南</span><span class="te">Vinx
                        Malaysia Sdn.Bhd</span></div>
                <div class="mlxy pf  " ms="ms"><span class="tl ali_r">马来西亚</span><span
                            class="te">Vinx Malaysia Sdn.Bhd</span>
                </div>
                <div class="hz pf actpf " ms="ms"><span class="tl ali_r"><span class="b">维杰思科技</span><span
                                class="s">杭州</span></span></div>
                <div class="tg pf" ms="ms"><span class="tl ali_r">泰国</span><span class="te">Vinx
                        Malaysia Sdn.Bhd</span></div>

            </div>
            <div class="ltimg mobanner">
                <img src="images/ind_17.png" alt="">
            </div>
            <div class="rt">
                <div class="title wow fadeInUp_qs100" ms="ms">品牌介绍</div>
                <div class="infobox">
                    <div class="tl wow fadeInUp_qs100" ms="ms">经营目标</div>
                    <div class="te wow fadeInUp_qs100" ms="ms">从日本到中国，从中国到亚洲，再从亚洲走向世界,
                        我们，将成为全球化ICT服务公司。</div>
                </div>
                <div class="infobox">
                    <div class="tl wow fadeInUp_qs100" ms="ms">经营目标</div>
                    <div class="te wow fadeInUp_qs100" ms="ms">从日本到中国，从中国到亚洲，再从亚洲走向世界,
                        我们，将成为全球化ICT服务公司。</div>
                </div>
                <a href="" class="moreBtn wow fadeInUp_qs100" ms="ms">了解更多</a>
            </div>
        </div>
    </div>
    <div class="ind_b clearfix">
        <div class="lt">
            <div class="iconlist clearfix">
                <div class="icon acticon wow fadeInUp_qs100" ms="ms">
                    <div class="imgbox">
                        <img src="images/ind_07.png" alt="">
                    </div>
                    <div class="te">111零售业IT解决方案</div>
                </div>
                <div class="icon wow fadeInUp_qs100" ms="ms">
                    <div class="imgbox">
                        <img src="images/ind_08.png" alt="">
                    </div>
                    <div class="te">IT基础设施建设</div>
                </div>
                <div class="icon wow fadeInUp_qs100" ms="ms">
                    <div class="imgbox">
                        <img src="images/ind_09.png" alt="">
                    </div>
                    <div class="te">业务系统运营/维护</div>
                </div>
            </div>
            <div class="iconlist clearfix">
                <div class="icon wow fadeInUp_qs100" ms="ms">
                    <div class="imgbox">
                        <img src="images/ind_10.png" alt="">
                    </div>
                    <div class="te">零售业系统软件销售</div>
                </div>
                <div class="icon wow fadeInUp_qs100" ms="ms">
                    <div class="imgbox">
                        <img src="images/ind_11.png" alt="">
                    </div>
                    <div class="te">零售业新店IT支持</div>
                </div>
                <div class="icon wow fadeInUp_qs100" ms="ms">
                    <div class="imgbox">
                        <img src="images/ind_12.png" alt="">
                    </div>
                    <div class="te">IT设备销售</div>
                </div>
            </div>

            <div class="jl">
                <div class="title">
                    <span class="tl wow fadeInUp_qs100" ms="ms">公司主要IT服务业务 - </span><span class="zs">ENTER</span>
                </div>
                <div class="te wow fadeInUp_qs100" ms="ms">亚洲零售行业系统集成专家</div>
            </div>
        </div>

        <div class="rt wow fadeInRight_qs100" ms="ms">
            <div class="swiper-container" id="main">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(images/ind_13.png)">
                        <div class="tlbox">
                            <div class="num">01</div>
                            <div class="tl">零售业新店IT支持</div>
                            <a href="" class="moreBtn">了解更多</a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(images/ind_13.png)">

                    </div>
                    <div class="swiper-slide" style="background-image: url(images/ind_13.png)">

                    </div>
                    <div class="swiper-slide" style="background-image: url(images/ind_13.png)">

                    </div>
                    <div class="swiper-slide" style="background-image: url(images/ind_13.png)">

                    </div>
                    <div class="swiper-slide" style="background-image: url(images/ind_13.png)">

                    </div>
                </div>
                <div class="swiper-pagination" id="mainSP"></div>
            </div>
        </div>
    </div>
    <div class="ind_c">
        <div class="wrap">
            <a href="news.html" class="newsmk mk  wow fadeInLeft_qs100" ms="ms"
               style="background-image: url(images/ind_14.jpg)">
                <div class="title">新闻资讯</div>
                <div class="newtl">
                    <div class="time">2019-07-20</div>
                    <div class="te">维杰思科技梦起徽杭古道</div>
                </div>
                <div class="moreBtn">了解更多</div>
            </a>
            <a href="join.html" class="hr mk wow fadeInLeft_qs100" ms="ms"
               style="background-image: url(images/ind_15.jpg)">
                <div class="title">人才招聘</div>
                <div class="moreBtn">了解更多</div>
            </a>
            <div class="cont mk  wow fadeInLeft_qs100" ms="ms" style="background-image: url(images/ind_16.jpg)">
                <div class="title">联系我们</div>
                <div class="addr">
                    杭州市滨江区物联网街369号大华
                    江虹国际创新园A座1801号
                </div>
                <a class="tel" href="tel:+0571-2899-5858"><span>0571-2899-5858</span></a>
            </div>
        </div>
    </div>
    <div class="ind_d">
        <div class="title wow fadeInUp_qs100" ms="ms">合作伙伴</div>
        <div class="parwrap">

            <div class="swiper-container wow fadeInUp_qs100" ms="ms" id="partner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/par_01.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/par_02.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/par_03.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/par_04.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/par_05.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/par_06.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/par_07.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="moreBtn wow fadeInUp_qs100" ms="ms">了解更多</a>
    </div>
    <div class="ind_e wow fadeInUp_qs100" ms="ms">
        <div class="ali_m tebox"><span class="text">如有需求请联系</span><span class="email">info.service@cn.vinx.asia</span>
        </div>
        <a href="mailto:info.service@cn.vinx.asia" class="ali_m embtn">
            <span>邮件咨询</span>
        </a>
    </div>

    <div class="rtsidebar_s">
        <div class="btnbox">
            <a href="" class="btn">
                <span>在线</span>
                <span>咨询</span>
            </a>
        </div>
        <div class="btnbox">
            <a class="btn" href="tel:+"><span>联系</span><span>我们</span></a>
        </div>
        <div class="btnbox">
            <div class="btn wx">
                <img src="images/smimg.png" alt="">
            </div>
            <div class="ewmimg">
                <img src="images/ewm.png" alt="">
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(function () {
            $('.counter').countUp();

            var inbanner = creatInbanner();
            var mainYW = creatMainYw();


            var partner = creatPartner();

            $(".ind_b .lt .iconlist .icon").hover(
                function () {
                    var t = $(this);
                    var ind = t.index();
                    var pi = t.parent().index();
                    if (pi > 0) {
                        ind = pi * 3 + ind;
                    }
                    $(".acticon").removeClass("acticon");
                    $(this).addClass("acticon");
                    mainYW.slideTo(ind, 700, false)
                }
            )
        })
    </script>
@endpush

