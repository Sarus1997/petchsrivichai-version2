@extends('layouts.main')

@section('content')


<section class="main-slider">
    <!-- slide of the page -->
    <div class="slide bg-full overlay" style="background-image: url(assets/images/banner/b233c2.webp);">
        <div class="holder">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 style="color: #F5F5F7">@lang('messages.nav_home')</h2>
                        <span class="sub-title">@lang('messages.nav_title')</span>
                        <div class="btn-holder">
                            <a href="{{route ('services')}}"
                                class="btn-primary text-center text-uppercase active md-round">@lang('messages.nav_services_btn')</a>
                            <a href="{{route ('story')}}"
                                class="btn-primary text-center text-uppercase md-round">@lang('messages.nav_about_btn')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide bg-full overlay" style="background-image: url(assets/images/banner/fe9680.webp);">
        <div class="holder">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 style="color: #F5F5F7">@lang('messages.nav_home')</h2>
                        <span class="sub-title">@lang('messages.nav_title')</span>
                        <div class="btn-holder">
                            <a href="{{route ('services')}}"
                                class="btn-primary text-center text-uppercase active md-round">@lang('messages.nav_services_btn')</a>
                            <a href="{{route ('story')}}"
                                class="btn-primary text-center text-uppercase md-round">@lang('messages.nav_about_btn')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide bg-full overlay" style="background-image: url(assets/images/banner/services-banner.png);">
        <div class="holder">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 style="color: #F5F5F7">@lang('messages.nav_home')</h2>
                        <span class="sub-title">@lang('messages.nav_title')</span>
                        <div class="btn-holder">
                            <a href="{{route ('services')}}"
                                class="btn-primary text-center text-uppercase active md-round">@lang('messages.nav_services_btn')</a>
                            <a href="{{route ('story')}}"
                                class="btn-primary text-center text-uppercase md-round">@lang('messages.nav_about_btn')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- abt detail of the page -->
<section class="abt-detail container">
    <div class="row">
        <div class="col">
            <h2 class="text-uppercase text-center">@lang('messages.story_title')
            <hr style="width: 50%">
        </h2>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-6">
            <p style="text-align: justify; text-indent: 4em;">@lang('messages.story_content')</p>
            <a href="{{route ('story')}}">
                <button class="btn2"><span class="text"
                        style="float: left;">@lang('messages.nav_about_btn')</span><span>@lang('messages.click')</span>
                </button>
            </a>
            <br><br>
        </div>
        <div class="col col-md-6">
            <img src="assets/images/banner/fe9680.webp" class="img-responsive">
        </div>
    </div>
</section>


<section id="video" class="fade-effect py-16" style="display: flex; justify-content: center; align-items: center; height: 65vh;">
    <div class="container">
        <hr>
        <iframe width="100%" height="550" src="https://www.youtube.com/embed/iupXf-CipHc" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
</section>

<!-- Counter holder of the page -->
<section class="team-section section-padding pt-2" style="background-image: url(assets/images/img09.jpg);">
    <div class="container">
        <div class="text-uppercase text-center">
                <br>
                <h1 style="color: aliceblue">@lang('messages.services_name')</h1>
                <h3 style="color: aliceblue">@lang('messages.services_more')</h3>
                <hr style="width: 50%">
        </div>
    </div>
    <br>
    <div class="container">
        <div class="container">
            <div class="row" >
                <div class="col col-md-4 text-center">
                    <img src="https://web.fedepalma.org/international/wp-content/uploads/2020/02/900x490px.jpg" alt=""
                        style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                </div><br>
                <div class="col col-md-8" style="background: #F5F5F7; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
                    <div class="details">
                        <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_more_1')</h3>
                            <p style="text-align: justify;">@lang('messages.services_more_1_1')</p>
                            <div style="text-align: right;">
                                <a href="{{route ('services')}}">
                                    <button class="btn2">
                                        <span class="text" style="float: left;">@lang('messages.services_btn')</span>
                                        <span>@lang('messages.click')</span>
                                    </button>
                                </a>
                            </div>
                    </div>
                    <hr style="float: right; width: 50%;">
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row" >
                <div class="col col-md-4 text-center">
                    <img src="https://www.musimmas.com/wp-content/uploads/2022/05/FFB.jpg" alt=""
                        style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                </div><br>
                <div class="col col-md-8" style="background: #F5F5F7; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
                    <div class="details">
                        <h3 style="color: #3190AF; font-size: 2rem">@lang('messages.services_more_2')</h3>
                            <p>@lang('messages.services_more_2_1')</p>
                            <p style="text-indent: 2em; text-align: justify">@lang('messages.services_more_3')</p>
                        <div style="text-align: right;">
                            <a href="{{route ('services')}}">
                                <button class="btn2">
                                    <span class="text" style="float: left;">@lang('messages.services_btn')</span>
                                    <span>@lang('messages.click')</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <hr style="float: right; width: 50%;">
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col col-md-4 text-center">
                    <img src="assets/images/our-story/our-services-1.jpg" alt=""
                        style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                </div><br>
                <div class="col col-md-8" style="background: #F5F5F7; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
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
                            <a href="{{route ('services')}}">
                                <button class="btn2"><span class="text"
                                        style="float: left;">@lang('messages.services_btn')</span><span>@lang('messages.click')</span></button></a>
                        </div>
                        <hr style="float: right; width: 50%;">
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col col-md-4 text-center">
                    <img src="assets/images/our-story/our-services-2.jpg" alt=""
                        style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
                </div><br>
                <div class="col col-md-8" style="background: #F5F5F7; border: 1px solid #ccc; border-radius: 8px; padding: 20px;">
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
                            <a href="{{route ('services')}}">
                                <button class="btn2"><span class="text"
                                        style="float: left;">@lang('messages.services_btn')</span><span>@lang('messages.click')</span></button></a>
                        </div>
                    </div>
                    <hr style="float: right; width: 50%;">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</section>


<!-- contact sec of the page -->
<section class="content-sec container">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-uppercase text-center">@lang('messages.Contact_Name')
                    <hr style="width: 50%">
                </h2>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <h3>@lang('messages.Contact_Head')</h3>
            <!-- Contact list of the page -->
            <ul class="list-unstyled contact-list">
                <li>
                    <span class="icon ti-map-alt"></span>
                    <address>@lang('messages.Contact_Head_address_01')</address>
                </li>
                <li>
                    <span class="icon ti-headphone-alt"></span>
                    <span class="tel">
                        <a href="tel:077284917-9">@lang('messages.Contact_Head_tel')</a>
                    </span>
                </li>
                <li>
                    <span class="icon ti-email"></span>
                    <span class="mail">
                        <a href="mailto:info@pce.com">@lang('messages.Contact_Head_email')</a>
                    </span>
                </li>
                <li>
                    <span class="icon ti-printer"></span>
                    <span class="mail">
                        <a href="mailto:info@pce.com">@lang('messages.contact_Head_fax_1')</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="col-xs-12 col-sm-8">
            <h3 class="marg">@lang('messages.footer_map')</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.0940241644357!2d99.37817069842502!3d9.145980598673072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1700103216754!5m2!1sth!2sth"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- contact sec of the page end -->


<!-- start site-news -->
<x-news></x-news>
@stop
