@extends('layouts.main')

@section('content')


<section class="main-slider slider3">
    <div class="slide bg-full overlay" style="background-image: url(https://web.fedepalma.org/international/wp-content/uploads/2020/02/900x490px.jpg);">
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
        <li><a href="{{route ('services')}}">@lang('messages.topbar_services')</a></li>
        </li>
        <li>/</li>
        <li>@lang('messages.services_more')</li>
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

    <section class="team-section section-padding pt-2 service-sec service2 style3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="details">
                        <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_more_1')</h3>
                        <p style="text-indent: 2em; text-align: justify;">@lang('messages.services_more_1_1')</p>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- blog slider of the page -->
                    <div class="blog-slider">
                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="https://www.thailandtechshow.com/upload_technology/655_3.png"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_2')</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="https://www.cpiagrotech.com/wp-content/uploads/2019/02/knowledge-101-pic05-300x188.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_3')</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="https://www.chonklang.com/uploads/article/1563944189_Vegetable_Oil.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_4')</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="https://nepalchemical.com/wp-content/uploads/2019/07/Methanol-600x401.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_5')</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- blog slider of the page end -->
                </div>
            </div>
            <hr>
        </div>
    </section>
</div>

    <!-- blog slider news -->
    <x-news></x-news>

@stop
