@extends('layouts.app')
@section('title', $category->category_name)
@section('meta')
    <meta name="keywords" content="{{ $category->keywords }}"/>
    <meta name="description" content="{{ $category->description }}"/>
@endsection
@push('css')
    <link rel="stylesheet" href="css/service.css">
    <style>
        header .navbox .navli:nth-child(4) .navTl span {
            color: #0095fe;
        }
    </style>
@endpush
@section('content')
    <div class="bannerbox">
        <div class="pcbanner" style="background-image:url({{ $category->image_url }})"></div>
        <div class="mobanner" style="background-image:url(images/ser_01_m.jpg)"></div>
        <div class="wrap">
            <div class="title">{{ $category->category_name }}</div>
        </div>
    </div>
    <div class="ser_h outwrapper">
        <div class="wrap clearfix">
            <div class="lcontent">
                <div class="top clearfix">
                    <div class="there clearfix">
                        <img src="images/home.png" alt="">
                        <span>{{ $category->category_name }}</span>
                    </div>
                </div>
                <div class="center">
                    <a id="a1"></a>
                    <div class="div_1">
                        <div class="divtl">{{ $categories[0]->category_name }}</div>
                        <div class="downcenter">
                            <div class="topimg"></div>
                            <div class="downlist clearfix">
                                @foreach($download as $item)
                                <a class="downli" href="sass-service.html">
                                    <div class="lte">
                                        <span>{{ $item->title }}</span>
                                    </div>
                                    <div class="downbtn moreBtn pcbanner">点击下载</div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a id="a2"></a>
                    <div class="div_2">
                        <div class="divtl">在线留言</div>
                        <div class="msgbox clearfix">
                            <div class="left">
                                <div class="inpbox inpbox1 clearfix">
                                    <div class="inp">
                                        <div class="tl">姓名</div>
                                        <input type="text">
                                    </div>
                                    <div class="inp">
                                        <div class="tl">电话<span>*</span></div>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="inpbox">
                                    <div class="inp">
                                        <div class="tl">公司名称</div>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="inpbox">
                                    <div class="inp">
                                        <div class="tl">邮箱<span>*</span></div>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="inpbox">
                                    <div class="inp">
                                        <div class="tl">咨询内容</div>
                                        <textarea name="" id=""></textarea>
                                    </div>
                                </div>
                                <div class="yzmbox clearfix">
                                    <input type="text">
                                    <div class="yzmimg"><img src="images/yzm.jpg" alt=""></div>
                                </div>


                                <div class="subbtn">
                                    提交
                                </div>
                            </div>

                            <div class="rt"></div>
                        </div>
                    </div>
                    <a
                        id="a3                                                                                                                                                                                                     "></a>
                    <div class="div_3">
                        <div class="divtl">FAQ问答</div>
                        <div class="faqbox">
                            <div class="faqli actli">
                                <div class="tp">
                                    1. 具备Excel,Word的基本操作知识
                                    <div class="jtbox">
                                        <img src="images/faqjt_a.png" class="nor" alt="">
                                        <img src="images/faqjt.png" class="act" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    VINX公司前身为日本大型连锁商超的信息系统子公司、所以对流通.服务行业系统相关有着长年累计下来的丰富经验和实际案例、并通过日本富士软件集团的技术力量.VINX将零售企业信息系统部和IT企业的优势汇集到一起并进行了改革。本着【从客户的家督考虑问题】的社训向中国，日本及东南亚各国的流通.服务行业的企业客户提供全面的IT解决方案。
                                </div>
                            </div>
                            <div class="faqli">
                                <div class="tp">
                                    1. 具备Excel,Word的基本操作知识
                                    <div class="jtbox">
                                        <img src="images/faqjt_a.png" class="nor" alt="">
                                        <img src="images/faqjt.png" class="act" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    VINX公司前身为日本大型连锁商超的信息系统子公司、所以对流通.服务行业系统相关有着长年累计下来的丰富经验和实际案例、并通过日本富士软件集团的技术力量.VINX将零售企业信息系统部和IT企业的优势汇集到一起并进行了改革。本着【从客户的家督考虑问题】的社训向中国，日本及东南亚各国的流通.服务行业的企业客户提供全面的IT解决方案。
                                </div>
                            </div>
                            <div class="faqli">
                                <div class="tp">
                                    1. 具备Excel,Word的基本操作知识
                                    <div class="jtbox">
                                        <img src="images/faqjt_a.png" class="nor" alt="">
                                        <img src="images/faqjt.png" class="act" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    VINX公司前身为日本大型连锁商超的信息系统子公司、所以对流通.服务行业系统相关有着长年累计下来的丰富经验和实际案例、并通过日本富士软件集团的技术力量.VINX将零售企业信息系统部和IT企业的优势汇集到一起并进行了改革。本着【从客户的家督考虑问题】的社训向中国，日本及东南亚各国的流通.服务行业的企业客户提供全面的IT解决方案。
                                </div>
                            </div>
                            <div class="faqli">
                                <div class="tp">
                                    1. 具备Excel,Word的基本操作知识
                                    <div class="jtbox">
                                        <img src="images/faqjt_a.png" class="nor" alt="">
                                        <img src="images/faqjt.png" class="act" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    VINX公司前身为日本大型连锁商超的信息系统子公司、所以对流通.服务行业系统相关有着长年累计下来的丰富经验和实际案例、并通过日本富士软件集团的技术力量.VINX将零售企业信息系统部和IT企业的优势汇集到一起并进行了改革。本着【从客户的家督考虑问题】的社训向中国，日本及东南亚各国的流通.服务行业的企业客户提供全面的IT解决方案。
                                </div>
                            </div>
                            <div class="faqli">
                                <div class="tp">
                                    1. 具备Excel,Word的基本操作知识
                                    <div class="jtbox">
                                        <img src="images/faqjt_a.png" class="nor" alt="">
                                        <img src="images/faqjt.png" class="act" alt="">
                                    </div>
                                </div>
                                <div class="text">
                                    VINX公司前身为日本大型连锁商超的信息系统子公司、所以对流通.服务行业系统相关有着长年累计下来的丰富经验和实际案例、并通过日本富士软件集团的技术力量.VINX将零售企业信息系统部和IT企业的优势汇集到一起并进行了改革。本着【从客户的家督考虑问题】的社训向中国，日本及东南亚各国的流通.服务行业的企业客户提供全面的IT解决方案。
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rtsidebar">
                <div class="title">SAAS服务</div>
                <a href="sass-service.html" class="md">SAAS服务</a>
                <a href="service.html#a1" class="md actmd">下载中心</a>
                <a href="service.html#a2" class="md">在线留言</a>
                <a href="service.html#a3" class="md">FAQ问答</a>
                <div class="pageimg">
                    <img src="images/ser_21.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function () {
            $(".down_mask").click(function () {
                $(this).removeClass("actdown");
            })

            $(".down").click(function () {
                $(".down_mask").addClass("actdown");
            })
            $(".down_mask .left").click(function (e) {
                stopBubble(e);
            })
            $(".down_mask .left .closedown").click(function (e) {
                stopBubble(e);
                $(".down_mask").removeClass("actdown");
            })

            $(".ser_h .div_3 .faqbox .faqli .tp").on("click", function () {
                var t = $(this);
                var par = t.parent();
                par.toggleClass("actli").siblings().removeClass("actli");
                t.siblings().slideToggle(500);
                par.siblings().find(".text").slideUp(500);
            })
        })
    </script>
@endpush

