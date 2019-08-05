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
        <div class="pcbanner" style="background-image:url(images/ser_01.jpg)"></div>
        <div class="mobanner" style="background-image:url(images/ser_01_m.jpg)"></div>
        <div class="wrap">
            <div class="title">{{ $parent->category_name }}</div>
        </div>
    </div>
    <div class="ser_a outwrapper">
        <div class="wrap clearfix">
            <div class="lcontent">
                <div class="top clearfix">
                    <div class="there clearfix">
                        <img src="images/home.png" alt="">
                        <span>{{ $parent->category_name }}</span>
                    </div>
                </div>
                <div class="center">
                    <div class="div_1">
                        <div class="tpbox clearfix">
                            <div class="divtl">{{ $category->category_name }}</div>

                            <div class="btnbox">
                                <div class="btn sq">免费申请使用</div>
                                <div class="btn down">SASS 资料下载<img src="images/ser_03.png" alt=""></div>
                            </div>
                        </div>
                        <div class="imgbox1">
                            <div class="img"><img src="images/ser_04.jpg" alt=""></div>
                            <div class="img"><img src="images/ser_05.jpg" alt=""></div>
                        </div>

                        <div class="thistlbox">
                            <div class="tl">全体Image</div>
                            <div class="text">对应时间内，任何时间任何地点都可以进行提问</div>
                        </div>

                        <div class="infotext">
                            <p>１）没有语言的问题（方言），不论地点，任何时间都可以录入问题</p>
                            <p>２）对应进度实时（手机端和WEB画面）的可以看到。</p>
                            <p>３）可以直接添加现场的照片和小视频，描述问题更加简单。</p>
                        </div>
                        <div class="thisimg1">
                            <img src="images/ser_06.jpg" alt="">
                        </div>
                    </div>
                    {!! $category->substance !!}
                </div>
            </div>
            <div class="rtsidebar">
                <div class="title">{{ $parent->category_name }}</div>
{{--                <a href="sass-service.html" class="md actmd">{{ $parent->category_name }}</a>--}}
                @foreach($categories as $item)
                    <a href="{{ $item->url }}" class="md">{{ $item->category_name }}</a>
                @endforeach
                <div class="pageimg">
                    <img src="{{asset('images/ser_02.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="down_mask down1">
        <div class="wrap">

            <div class="left">
                <div class="closedown">
                    <img src="{{asset('images/closedown.png')}}" alt="">
                </div>
                <div class="tlbox pfm">如需获取下载资料请填写以下信息，我们电话核实后，会以邮件形式发送给您。</div>

                <div class="outbox">
                    <div class="indiv">
                        <div class="inpbox clearfix">
                            <div class="tl pfm">* 姓名</div>
                            <input type="text">
                        </div>
                        <div class="inpbox clearfix">
                            <div class="tl pfm">* 公司名称</div>
                            <input type="text">
                        </div>
                        <div class="inpbox clearfix">
                            <div class="tl pfm">* 联系电话</div>
                            <input type="text">
                        </div>
                        <div class="inpbox clearfix">
                            <div class="tl pfm">* 联系邮箱</div>
                            <input type="text">
                        </div>
                        <div class="subbtn">提交</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="down_mask down2">
        <div class="wrap">

            <div class="left">
                <div class="closedown">
                    <img src="{{asset('images/closedown.png')}}" alt="">
                </div>
                <div class="tlbox pfm">如需免费试用请填写以下信息，我们电话核实后，会以邮件形式发送给您。</div>

                <div class="outbox">
                    <div class="indiv">
                        <div class="inpbox clearfix">
                            <div class="tl pfm">* 姓名</div>
                            <input type="text">
                        </div>
                        <div class="inpbox clearfix">
                            <div class="tl pfm">* 公司名称</div>
                            <input type="text">
                        </div>
                        <div class="inpbox clearfix">
                            <div class="tl pfm">* 联系电话</div>
                            <input type="text">
                        </div>
                        <div class="inpbox clearfix">
                            <div class="tl pfm">* 联系邮箱</div>
                            <input type="text">
                        </div>
                        <div class="subbtn">提交</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

