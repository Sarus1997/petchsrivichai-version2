@extends('layouts.main')

@section('content')


<section class="main-slider slider3">
    <div class="slide bg-full overlay" style="background-image: url(https://i.natgeofe.com/n/22e2b8e9-ddc7-421e-afba-86226b57e90d/palm-oil-road-oil-palm-plantation-2_3x2.jpg);">
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
                        <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_more_2')</h3>
                        <p>@lang('messages.services_more_2_1')</p>
                        <p style="text-indent: 2em; text-align: justify">@lang('messages.services_more_3')</p>
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
                                    <img src="https://www.asiabiomass.com/wp-content/uploads/2023/03/ABM-Website-Pictures-Product-Palm-kernel-shells_01-jpg.webp"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_8')</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="https://admineenergy.com/images/%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%87%E0%B8%94%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B2%E0%B8%A5%E0%B9%8C%E0%B8%A1-1.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_9')</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="https://media.setinvestnow.com/setinvestnow/Images/2022/Nov/Thaipublica_%E0%B8%9B%E0%B8%B2%E0%B8%A5%E0%B9%8C%E0%B8%A1%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%A1%E0%B8%B1%E0%B8%99_TGE_14-e1661958015690-768x511.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_10')</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="https://2.bp.blogspot.com/-pFDmPUfSWjw/UOMGLyZVosI/AAAAAAAAeCg/e0pmGAX8Jx4/s1600/%E0%B9%84%E0%B8%A1%E0%B9%89%E0%B8%AA%E0%B8%B1%E0%B8%9A.JPG"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_11')</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4">
                            <div class="service-holder">
                                <div class="img-holder">
                                    <img src="https://www.greenpeace.org/static/planet4-thailand-stateless/2019/09/c758f768-gp01k77.jpg"
                                        style="width: 365px; height: 200px; object-fit: cover" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <hr>
                                    <p class="heading2" style="text-align: center; font-size: 15px">
                                        @lang('messages.services_title_12')</p>
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
