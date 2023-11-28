<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Top header of the page -->
                <div class="top-header">
                    <!-- Align left of the page -->
                    <ul class="list-unstyled align-left">
                        <select class="form-control changeLang" style="background-color: white;">
                            <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>@lang('messages.thai')</option>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>@lang('messages.english')</option>
                        </select>

                    </ul>
                    <!-- Align left of the page end -->
                    <!-- Socail network of the page -->
                    <ul class="list-unstyled socail-network">
                        <li><a href="#"><i class="social_facebook"></i></a></li>
                        <li><a href="#"><i class="social_googleplus"></i></a></li>
                        <li><a href="#"><i class="social_twitter"></i></a></li>
                        <li><a href="#"><i class="social_linkedin"></i></a></li>
                        <li><a href="#"><i class="social_pinterest"></i></a></li>
                    </ul>
                    <!-- Socail network of the page end -->
                </div>
                <!-- Top header of the page end -->
            </div>
        </div>
        <!-- header holder of the page -->
        <div class="row header-holder">
            <div class="col-xs-12">
                <div class="logo text-uppercase" style="display: flex; align-items: center;">
                    <a href="{{route ('home')}}"><img src="assets/images/logo/pc-logo-2.svg" style="width: 40px;"></a>
                    <span style="font-size: 15px;" class="gradient-text1">&nbsp; @lang('messages.topbar_name')</span>
                </div>

                <a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
                <!-- Nav of the page -->
                <nav id="nav">
                    <ul class="list-unstyled">
                        <li class="active"><a href="{{route ('home')}}">@lang('messages.topbar_home')</a></li>
                        <li><a href="{{route ('story')}}">@lang('messages.topbar_story')</a></li>
                        <li><a href="{{route ('services')}}">@lang('messages.topbar_services')</a></li>
                        <li><a href="{{route ('contact')}}">@lang('messages.topbar_contact')</a></li>
                    </ul>
                </nav>
                <!-- Nav of the page end -->
            </div>
        </div>
        <!-- header holder of the page end -->
    </div>
</header>
