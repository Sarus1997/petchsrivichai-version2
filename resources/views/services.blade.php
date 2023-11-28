@extends('layouts.main')

@section('content')


<section class="main-slider slider3">
    <div class="slide bg-full overlay" style="background-image: url(assets/images/banner/services-banner.png);">
        <div class="holder text-center">
            <h2 class="heading text-uppercase">@lang('messages.topbar_services')</h2>
            <hr style="height: 0.5px; width: 50%;">
            <p style="color: #fbfbfb;">@lang('messages.services_head')</p>
            <br>
        </div>
    </div>
</section>

<nav class="breadcrumbs text-center text-uppercase">
    <ul class="list-unstyled">
        <li><a href="{{route ('home')}}">@lang('messages.topbar_home')</a></li>
        <li>/</li>
        <li>@lang('messages.topbar_services')</li>
    </ul>
</nav>

<div class="wrapper">
    <div class="top">
        <div class="container">
            <div class="title">
                <h1 style="text-align: center">@lang('messages.services_more')</h1>
            </div>
        </div>
    </div>


    <!-- Counter holder of the page -->
    <section class="team-section section-padding pt-2" >
        <br>
        <div class="container">
            <div class="container">
                <div class="row" style="background: #fbfbfb; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
                    <div class="col col-md-4 text-center">
                        <img src="https://web.fedepalma.org/international/wp-content/uploads/2020/02/900x490px.jpg" alt=""
                            style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                    </div><br>
                    <div class="col col-md-6" >
                        <div class="details">
                            <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_more_1')</h3>
                                <p style="text-align: justify;">@lang('messages.services_more_1_1')</p>
                                <div style="text-align: right;">
                                    <a href="{{route ('product-1')}}">
                                        <button class="btn2">
                                            <span class="text" style="float: left;">@lang('messages.services_btn')</span>
                                            <span>@lang('messages.click')</span>
                                        </button>
                                    </a>
                                </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <br>

            <div class="container">
                <div class="row" style="background: #fbfbfb; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
                    <div class="col col-md-4 text-center">
                        <img src="https://www.musimmas.com/wp-content/uploads/2022/05/FFB.jpg" alt=""
                            style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                    </div><br>
                    <div class="col col-md-6" >
                        <div class="details">
                            <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_more_2')</h3>
                                <p>@lang('messages.services_more_2_1')</p>
                                <p style="text-indent: 2em; text-align: justify">@lang('messages.services_more_3')</p>
                            <div style="text-align: right;">
                                <a href="{{route ('product-2')}}">
                                    <button class="btn2">
                                        <span class="text" style="float: left;">@lang('messages.services_btn')</span>
                                        <span>@lang('messages.click')</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <br>

            <div class="container">
                <div class="row" style="background: #fbfbfb; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
                    <div class="col col-md-4 text-center">
                        <img src="assets/images/portfolio/jan.jpg" alt=""
                            style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                    </div><br>
                    <div class="col col-md-6" >
                        <div class="details">
                            <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_title')</h3>
                            <div class="container">
                                <b>@lang('messages.services_title_1')</b>
                                <div class="row">
                                    <div class="col col-md-3">
                                        <li>@lang('messages.services_title_2')</li>
                                        <li>@lang('messages.services_title_3')</li>
                                    </div>
                                    <div class="col col-md-3">
                                        <li>@lang('messages.services_title_2')</li>
                                        <li>@lang('messages.services_title_3')</li>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div style="text-align: right;">
                                <a href="{{route ('trailer')}}">
                                    <button class="btn2"><span class="text"
                                            style="float: left;">@lang('messages.services_btn')</span><span>@lang('messages.click')</span></button></a>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <br>

            <div class="container">
                <div class="row" style="background: #fbfbfb; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
                    <div class="col col-md-4 text-center">
                        <img src="assets/images/portfolio/services-1.jpg" alt=""
                            style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                    </div><br>
                    <div class="col col-md-6" >
                        <div class="details">
                            <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_title_6')</h3>
                            <div class="container">
                                <b>@lang('messages.services_title_7')</b>
                                <div class="row">
                                    <div class="col col-md-3">
                                        <li>@lang('messages.services_title_8')</li>
                                        <li>@lang('messages.services_title_9')</li>
                                        <li>@lang('messages.services_title_10')</li>
                                    </div>
                                    <div class="col col-md-3">
                                        <li>@lang('messages.services_title_11')</li>
                                        <li>@lang('messages.services_title_12')</li>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: right;">
                                <a href="{{route ('full-dump')}}">
                                    <button class="btn2"><span class="text"
                                            style="float: left;">@lang('messages.services_btn')</span><span>@lang('messages.click')</span></button></a>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>

    <!-- start site-news -->
    <x-news></x-news>
</div>


@stop
