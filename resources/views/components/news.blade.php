
<section class="team-section section-padding pt-2 service-sec service2 style3">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <p style="font-size: 30px; color: #000000"><b>@lang('messages.News_Name')</b></p>
            </div>
            <div class="col-md-2">
                <a href="{{route('news-more')}}">
                <button class="btn2">
                        <span class="text" style="float: left; font-size: 15px">@lang('messages.click_more')</span>
                        <span>@lang('messages.click')</span>
                </button>
            </a>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="row">
                <!-- blog slider of the page -->
                <div class="blog-slider">
                    {{-- 1 --}}
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
                                        <span>@lang('messages.click')</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- 2 --}}
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

                    {{-- 3 --}}
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
                                <a href="{{route('news_2')}}">
                                <button class="btn2" style="width: 100%;"><span
                                            class="text">@lang('messages.story_btn')</span><span>@lang('messages.click')</span></button></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- blog slider of the page end -->
            </div>
        </div>
</section>



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
