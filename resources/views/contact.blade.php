@extends('layouts.main')

@section('content')


<section class="main-slider slider3">
    <div class="slide bg-full overlay" style="background-image: url(assets/images/banner/contact-banner.png);">
        <div class="holder text-center">
            <h2 class="heading text-uppercase">@lang('messages.contact_name')</h2>
        </div>
    </div>
</section>

<nav class="breadcrumbs text-center text-uppercase">
    <ul class="list-unstyled">
        <li><a href="home.html">@lang('messages.topbar_home')</a></li>
        <li>/</li>
        <li>@lang('messages.topbar_services')</li>
    </ul>
</nav>


<div class="wrapper">
    <div class="top">
        <div class="container">
            <div class="title">
                <h1 style="text-align: center">@lang('messages.contact_name')</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="list-unstyled" style="text-align: center;"><br>
                    <img src="assets/images/logo/pc-logo-2.svg" width="150" height="150">
                    <p style="text-align: center; font-size: 17px" class="gradient-text2">@lang('messages.Contact_Head')</p>
                </div>
                    <hr style="height: 1.5px; width: 18rem; float: left;">
                    <hr style="height: 1.5px; width: 18rem; float: right;">
                </h2>
            </div>
        </div>
    </div>

<!-- contact sec of the page -->
<section class="content-sec" style="background-color: #ececec">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <h4>@lang('messages.Contact_Head')</h4>
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
                <h4 class="marg">@lang('messages.Contact_From')</h4>
                <!-- Contact Form of the page -->
                <form action="#" class="contact-form" style="background-color: #ffffff">
                    <fieldset class="container-fluid">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="fname">@lang('messages.Contact_Name_first')</label>
                                    <input type="text" id="fname" class="form-control" placeholder="@lang('messages.Contact_Name_first')"><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">@lang('messages.Contact_Name_last')</label>
                                    <input type="text" id="lname" class="form-control" placeholder="@lang('messages.Contact_Name_last')"><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email">@lang('messages.Contact_Email_')</label>
                                    <input type="email" id="email" class="form-control" placeholder="@lang('messages.Contact_Email_')"><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="tel">@lang('messages.Contact_Tel_')</label>
                                    <input type="tel" id="tel" class="form-control" placeholder="@lang('messages.Contact_Tel_')"><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="subject">@lang('messages.Contact_Subject')</label>
                                    <input type="text" id="subject" class="form-control" placeholder="@lang('messages.Contact_Subject')"><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="message">@lang('messages.Contact_Message')</label>
                                    <input type="text" id="message" class="form-control" placeholder="@lang('messages.Contact_Message')">
                                </div>
                            </div>
                        </div>

                        {{-- <textarea class="form-control" placeholder="Your Message"></textarea> --}}<hr>
                        <button class="btn2 btn-primary text-uppercase" type="submit"><span class="text">&nbsp; @lang('messages.Contact_Send') &nbsp;</span><span>@lang('messages.click')</span></button>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact sec of the page end -->
<!-- map sec of the page -->
<section class="map-sec">
    <h3 style="text-align: center">@lang('messages.footer_map')</h3>
    <p style="text-align: center; font-size: 17px" class="gradient-text2">@lang('messages.Contact_Head')</p>
    <hr style="text-align: center; width: 50%;"><br>
    <div class="map" style="border: 2px solid #dbdbdb;">
        <div class="map-info">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1969.548972078307!2d99.37785077718438!3d9.145626437174313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1700128481175!5m2!1sth!2sth"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>



    <!-- start site-news -->
    <x-news></x-news>

</div>

<style>
    .contact-form {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

    .form-control {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);

    }
</style>

@stop
