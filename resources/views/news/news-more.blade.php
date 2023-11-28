@extends('layouts.main')

@section('content')


<section class="main-slider slider3">
    <div class="slide bg-full overlay"
        style="background-image: url(assets/images/portfolio/palm-policy-banner-1.webp);">
        <div class="holder text-center">
            <h2 class="heading text-uppercase">@lang('messages.News_Name')</h2>
        </div>
    </div>
</section>

<nav class="breadcrumbs text-center text-uppercase">
    <ul class="list-unstyled">
        <li><a href="{{route('home')}}">@lang('messages.topbar_home')</a></li>
        <li>/</li>
        <li>@lang('messages.News_Details')</li>
    </ul>
</nav>


<div class="wrapper" style="background-color: #ECECEC">
    <div class="top">
        <div class="container">
            <div class="title">
                <h1 style="text-align: center">@lang('messages.News_Details')</h1>
            </div>
        </div>
    </div>

<br>
<section class="service-sec service2 style3 ">
    <div class="container">
        <div class="row">
            <div class="owl-carousel">
                <div class="block-slider">
                    <div class="col-xs-12 col-sm-4">
                        <div class="service-holder">
                            <div class="img-holder">
                                <a href="{{route('news_1')}}"><img src="assets/images/news/news_01.png"
                                        style="width: 100%;" class="img-fluid"></a>
                            </div>
                            <div class="txt-holder">
                                <time class="time" datetime="02-03-2017 20:00"><i
                                        class="fas fa-calendar"></i>&nbsp;@lang('messages.News_Date_01')</time>
                                <hr>
                                <p>@lang('messages.News_Head_01')</p><br>
                                <a href="{{route ('news_1')}}">
                                <button class="btn2" style="width: 100%;">
                                        <span class="text">@lang('messages.story_btn')</span>
                                        <span>@lang('messages.click')</span></button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="service-holder">
                            <div class="img-holder">
                                <a href="{{route('news_2')}}"><img src="assets/images/news/news_02.png"
                                        style="width: 100%;" class="img-fluid"></a>
                            </div>
                            <div class="txt-holder">
                                <time class="time" datetime="02-03-2017 20:00"><i class="fas fa-calendar"></i>&nbsp;
                                    @lang('messages.News_Date_02')</time>
                                <hr>
                                <p>@lang('messages.News_Head_02')</p>
                                <a href="{{route('news_2')}}">
                                <button class="btn2" style="width: 100%;"><span
                                            class="text">@lang('messages.story_btn')</span><span>@lang('messages.click')</span></button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="service-holder">
                            <div class="img-holder">
                                <a href="{{route('news_3')}}"><img src="assets/images/news/news_03.png"
                                        style="width: 100%;" class="img-fluid"></a>
                            </div>
                            <div class="txt-holder">
                                <time class="time" datetime="02-03-2017 20:00"><i
                                        class="fas fa-calendar"></i>&nbsp;@lang('messages.News_Date_03')</time>
                                <hr>
                                <p>@lang('messages.News_Head_03')</p>
                                <a href="{{route('news_3')}}">
                                <button class="btn2" style="width: 100%;"><span
                                            class="text">@lang('messages.story_btn')</span><span>@lang('messages.click')</span></button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</div>



<style>
    .service-holder {
        border: 1px solid #eeeeee;
        padding: 15px;
    }

    .service-sec {
        position: relative;

    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
    }
</style>


@stop
