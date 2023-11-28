@extends('layouts.main')

@section('content')


<section class="main-slider slider3">
    <div class="slide bg-full overlay" style="background-image: url(assets/images/portfolio/palm-policy-banner-1.webp);">
        <div class="holder text-center">
            <h2 class="heading text-uppercase">@lang('messages.News_Name')</h2>
        </div>
    </div>
</section>

<nav class="breadcrumbs text-center text-uppercase">
    <ul class="list-unstyled">
        <li><a href="{{route('home')}}">@lang('messages.topbar_home')</a></li>
        <li>/</li>
        <li><a href="{{route('news-more')}}">@lang('messages.News_Details')</a></li>
        <li>/</li>
        <li>@lang('messages.News_Head_01')</li>
    </ul>
</nav>

<div class="wrapper" style="background-color: #ECECEC">
    <div class="top">
        <div class="container">
            <div class="title">
                <h1 style="text-align: center">@lang('messages.News_Name')</h1>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="card first">
                <img src="assets/images/news/news_01.png" width="100%">
                <h2 style="color: #2D4981">@lang('messages.News_Head_01')</h2>
                <p class="date">@lang('messages.News_Date_01')</p>
                <hr>
                <p class="text" style="text-align: justify">@lang('messages.News_Detail_01')</p>
            </div>
        </div>
    </div>
</div>

@stop


