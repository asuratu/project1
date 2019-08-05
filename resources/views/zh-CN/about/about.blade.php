@extends('layouts.app')
@section('title', $category->category_name)
@section('meta')
    <meta name="keywords" content="{{ $category->keywords }}"/>
    <meta name="description" content="{{ $category->description }}"/>
@endsection
@push('css')
    <link rel="stylesheet" href="/css/about.css">
    <style>
        header .navbox .navli:nth-child(2) .navTl span{
            color: #0095fe;
        }
    </style>
@endpush
@section('content')
    <div class="bannerbox">
        <div class="pcbanner" style="background-image:url({{ $category->image_url }})"></div>
        <div class="mobanner" style="background-image:url(images/about_01_m.jpg)"></div>
        <div class="wrap">
            <div class="title">{{ $category->category_name }}</div>
        </div>
    </div>
    <div class="about_a outwrapper">
        <div class="wrap clearfix">
            <div class="lcontent">
                <div class="top clearfix">
                    <div class="there clearfix">
                        <img src="/images/home.png" alt="">
                        <span>{{ $category->category_name }}</span>
                    </div>
                </div>
                <div class="center">
                    <a id="a1"></a>
                    {!! $categories[0]->substance !!}
                    <a id="a2"></a>
                    {!! $categories[1]->substance !!}
                    <a id="a3"></a>
                    {!! $categories[2]->substance !!}
                    <a id="a4"></a>
                    {!! $categories[3]->substance !!}

                </div>
            </div>
            <div class="rtsidebar">
                <div class="title">{{ $category->category_name }}</div>
                @foreach($categories as $item)
                    <a href="{{ $item->url }}" class="md">{{ $item->category_name }}</a>
                @endforeach
                <div class="pageimg">
                    <img src="/images/about_16.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(function () {

            var yearbar = creatYear();

            var honor = creatHonor();

            function creatYear() {
                var val = {
                    slidesPerView: 9,
                    nextButton: ".next_year",
                    prevButton: ".prev_year",
                    direction: "vertical",

                }

                val = assignOBJ(val);

                return new Swiper("#yearbar", val);
            }
            $(".about_a .lcontent .center .div_4 .yearbar #yearbar .swiper-slide").click(
                function () {
                    var t = $(this);
                    scrollHS(t);
                }
            )
            var yearBox = $(".yearBox");
            var rth = $(".about_a .rtscrollbox").outerHeight();
            console.log(rth)
            $(".about_a .rtscrollbox").scroll(function (e) {
                var top = $(this).scrollTop();
                for (var i = 0; i < yearBox.length; i++) {
                    var ti = $(yearBox[i]);
                    var scrollTop = ti.position().top;
                    console.log(scrollTop + "几" + i);
                    if (top - 60 > (scrollTop - (rth / 2)) && top < (scrollTop + ti.outerHeight())) {
                        var ind = ti.index();
                        $(".about_a .lcontent .center .div_4 .yearbar #yearbar .swiper-slide").eq(ind).addClass("actslide").siblings().removeClass("actslide");
                    }
                }
            })

            function scrollHS(a) {
                var ind = a.index();
                var scrollTop = $(".yearBox").eq(ind).position().top;
                $(".about_a .rtscrollbox").animate({
                    scrollTop: scrollTop
                }, 500)
            }


            function creatHonor(){
                var val = {
                    pagination:"#honorSP",
                    loop:true,
                    slidesPerView:4,
                    slidesPerGroup:4,
                    spaceBetween:"3.6585%",
                    breakpoints:{
                        768:{
                            slidesPerView:2,
                            slidesPerGroup:2
                        }
                    }
                }

                val = assignOBJ(val);
                return new Swiper("#honor", val);
            }

        })
    </script>
@endpush

