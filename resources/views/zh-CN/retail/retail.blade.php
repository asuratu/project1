@extends('layouts.app')
@section('title', $category->category_name)
@section('meta')
    <meta name="keywords" content="{{ $category->keywords }}"/>
    <meta name="description" content="{{ $category->description }}"/>
@endsection
@push('css')
    <link rel="stylesheet" href="/css/service.css">
    <style>
        header .navbox .navli:nth-child(3) .navTl span{
            color: #0095fe;
        }
    </style>
@endpush
@section('content')
    <div class="bannerbox">
        <div class="pcbanner" style="background-image:url({{ $parent->image_url }})"></div>
        <div class="mobanner" style="background-image:url({{asset('images/ser_01_m.jpg')}})"></div>
        <div class="wrap">
            <div class="title">{{ $parent->category_name }}</div>
        </div>
    </div>
    <div class="ser_b outwrapper">
        <div class="wrap clearfix">
            <div class="lcontent">
                <div class="top clearfix">
                    <div class="there clearfix">
                        <img src="/images/home.png" alt="">
                        <span>{{ $parent->category_name }}</span>
                    </div>
                </div>
                <div class="center">
                    <div class="div_1">
                        <div class="divtl wow fadeInUp_qs100" ms="ms">{{ $category->category_name }}</div>
                        <div class="bk">
                            <div class="tl wow fadeInUp_qs100" ms="ms">概要</div>
                            <div class="text nomb wow fadeInUp_qs100" ms="ms">
                                {{ $category->synopsis }}
                            </div>
                        </div>
                        {!! $category->substance !!}
                    </div>
                </div>
            </div>
            <div class="rtsidebar">
                <div class="title">{{ $parent->category_name }}</div>
                @foreach($categories as $item)
                    <a href="{{ $item->url }}" class="md">{{ $item->category_name }}</a>
                @endforeach
                <div class="pageimg">
                    <img src="/images/ser_02.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

