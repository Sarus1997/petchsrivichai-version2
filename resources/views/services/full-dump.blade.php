@extends('layouts.main')

@section('content')


<section class="main-slider slider3">
    <div class="slide bg-full overlay" style="background-image: url(assets/images/portfolio/DSC_4151.JPG);">
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
        <li>@lang('messages.services_title_6')</li>
    </ul>
</nav>

<div class="wrapper">
    <div class="top">
        <div class="container">
            <div class="title">
                <h1 style="text-align: center">@lang('messages.services_title_6')</h1>
            </div>
        </div>
    </div>

    <section class="team-section section-padding pt-2 service-sec service2 style3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="details text-center">
                        <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_title_6')</h3>
                        <div class="container">
                            <b>@lang('messages.services_title_7')</b>
                            <div class="row">
                                <div class="col col-md-6">
                                    <li>@lang('messages.services_title_8')</li>
                                    <li>@lang('messages.services_title_9')</li>
                                </div>
                                <div class="col col-md-6">
                                    <li>@lang('messages.services_title_10')</li>
                                    <li>@lang('messages.services_title_11')</li>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <!-- blog slider of the page -->
                    <div class="blog-slider">
                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="assets/images/portfolio/services-1.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="assets/images/portfolio/T-C2-C0040.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="assets/images/portfolio/services-2.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
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
