<!-- footer of the page -->
<footer id="footer" class="bg-full" style="background-image: url(assets/images/img13.jpg);">
    <!-- footer holder of the page -->
    <div class="footer-holder container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="logo text-uppercase" style="display: flex; align-items: center;">
                    <a href="{{route ('home')}}"><img src="assets/images/logo/pc-logo-2.svg" style="width: 60px;"></a>
                    <span style="font-size: 15px;">&nbsp; @lang('messages.topbar_name')</span>
                </div>
                <br>
                <br>
                <br>
                <ul class="list-unstyled contactlist">
                    <p style="text-align: justify"> &nbsp;&nbsp;&nbsp;&nbsp; @lang('messages.nav_title')</p>
                </ul>
            </div>


            {{-- <div class="col-xs-8 col-sm-6 col-md-3">
                <h3 class="mar">@lang('messages.menu')</h3>
                <ul class="list-unstyled f-nav">
                    <li><a href="{{route ('story')}}">@lang('messages.topbar_story')</a></li>
                    <li><a href="{{route ('services')}}">@lang('messages.topbar_services')</a></li>
                    <li><a href="{{route ('contact')}}">@lang('messages.topbar_contact')</a></li>
                </ul>
            </div> --}}

            <div class="col-xs-12 col-sm-6 col-md-3">
                <h3>@lang('messages.contact_name')</h3>
                <!-- contact list of the page -->
                <ul class="list-unstyled contactlist">
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
                <!-- contact list of the page end -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h3>@lang('messages.footer_map')</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1969.548972078307!2d99.37785077718438!3d9.145626437174313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1700128481175!5m2!1sth!2sth"
                    width="100%"
                    height="350"
                    style="border:0;"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- subscribe form of the page end -->
            </div>
        </div>
    </div>
    <!-- footer area of the page -->
    <div class="footer-area">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>@lang('messages.footer_copy')</p>
                </div>
            </div>

        </div>
    </div>
</footer>
