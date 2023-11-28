@extends('layouts.main')

@section('content')


<section class="main-slider slider3">
    <div class="slide bg-full overlay" style="background-image: url(assets/images/story/story-banner.png);">
        <div class="holder text-center">
            <h2 class="heading text-uppercase">@lang('messages.topbar_story')</h2>
        </div>
    </div>
</section>

<nav class="breadcrumbs text-center text-uppercase">
    <ul class="list-unstyled">
        <li><a href="{{route('home')}}">@lang('messages.topbar_home')</a></li>
        <li>/</li>
        <li>@lang('messages.topbar_story')</li>
    </ul>
</nav>

<div class="wrapper">
    <div class="top">
        <div class="container">
            <div class="title">
                <h1 style="text-align: center">@lang('messages.topbar_story')</h1>
            </div>
        </div>
    </div>
    <section class="abt-detail" style="background-color: #ececec">
        <div class="container">
            <div class="row display-flex">
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <div class="img-holder text-center"><img src="assets/images/story/pc-logo-story.svg" alt="image description" class="img-responsive"></div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-6" style="text-align: justify">
                    <p class="gradient-text1" style="text-align: center; font-size: 30px">@lang('messages.Story_page_01')</p>
                    <hr>
                    <p style="text-indent: 4em;">@lang('messages.Story_page_02')</p>
                    <p style="text-indent: 4em;">@lang('messages.Story_page_03')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- abt detail of the page end -->

    <section class="abt-detail" style="width: 100%; object-fit: cover; background-image: url(assets/images/img09.jpg);">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 style="color: azure" class="text-uppercase text-center">@lang('messages.topbar_story')
                        <hr style="height: 1.5px; width: 30rem; float: left;">
                        <hr style="height: 1.5px; width: 30rem; float: right;">
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="timeline">
                <ul>
                <li>
                    <span>@lang('messages.Story_2527_Head')</span>
                    <div class="content">
                    <h3>@lang('messages.Story_2527')</h3>
                    <p>
                        @lang('messages.Story_2527_2')
                    </p>
                    </div>
                </li>

                <li>
                    <span>@lang('messages.Story_2531_Head')</span>
                    <div class="content">
                    <h3>@lang('messages.Story_2531')</h3>
                    <p>
                        @lang('messages.Story_2531_2')
                    </p>
                    </div>
                </li>

                <li>
                    <span>@lang('messages.Story_2535_Head')</span>
                    <div class="content">
                    <h3>@lang('messages.Story_2535')</h3>
                    <p>
                        @lang('messages.Story_2535_2')
                    </p>
                    </div>
                </li>

                <li>
                    <span>@lang('messages.Story_2535_Head')</span>
                    <div class="content">
                    <h3>@lang('messages.Story_2535')</h3>
                    <p>
                        @lang('messages.Story_2535_2')
                    </p>
                    </div>
                </li>

                <li>
                    <span>@lang('messages.Story_2539_Head')</span>
                    <div class="content">
                    <h3>@lang('messages.Story_2539')</h3>
                    <p>
                        @lang('messages.Story_2539_2')
                    </p>
                    </div>
                </li>

                <li>
                    <span>@lang('messages.Story_2553_Head')</span>
                    <div class="content">
                    <h3>@lang('messages.Story_2553')</h3>
                    <p>
                        @lang('messages.Story_2553_2')
                    </p>
                    </div>
                </li>

                <li>
                    <span>@lang('messages.Story_2553_Head')</span>
                    <div class="content">
                    <h3>@lang('messages.Story_2553')</h3>
                    <p>
                        @lang('messages.Story_2553_2')
                    </p>
                    </div>
                </li>

                <li>
                    <span>@lang('messages.Story_2561_Head')</span>
                    <div class="content">
                    <h3>@lang('messages.Story_2561')</h3>
                    <p>
                        @lang('messages.Story_2561_2')
                    </p>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </section>

        <!-- start site-news -->
        <x-news></x-news>
</div>




@stop



