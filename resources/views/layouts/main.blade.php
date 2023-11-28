<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the HandheldFriendly -->
    <meta name="HandheldFriendly" content="True">
    <!-- set the description -->
    <meta name="description" content="Amlogistic | Transportation &amp; Logistics HTML Template">
    <!-- set the Keyword -->
    <meta name="keywords" content="">
    <meta name="author" content="Amlogistic | Transportation &amp; Logistics HTML Template">

    <title>@lang('messages.topbar_name')</title>

    <!-- include the site stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Arizonia%7CRoboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="assets/css/icofont.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="assets/css/colors.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">


    <!-- css other -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/slide.css">
    <link rel="stylesheet" href="assets/css/gradient-text.css">
    <link rel="stylesheet" href="assets/css/button.css">
    <link rel="stylesheet" href="assets/css/main-slider.css">
    <link rel="stylesheet" href="assets/css/time-line.css">
    <link rel="stylesheet" href="assets/css/news.css">
    <link rel="stylesheet" href="assets/css/tracking-sec.css">
    <link rel="stylesheet" href="assets/css/blog-slider.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="path/to/owl.carousel.css">
    <link rel="stylesheet" href="path/to/owl.theme.default.css">

    <!-- Owl Carousel JavaScript -->
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/owl.carousel.min.js"></script>

</head>

<body>
    <div id="wrapper">

        <!-- Start header -->
        <x-navbar></x-navbar>

        <main id="main">
            <!-- Start header -->
            @yield('content')
            <!-- start site-footer -->

        </main>
        <x-footer></x-footer>
        <!-- end site-footer -->

        <span id="back-top" class="text-center md-round fa fa-angle-up"></span>

        <div id="loader" class="loader-holder">
			<div class="block"><img src="assets/images/logo/pc-logo-2.svg" width="100%" alt="loader"></div>
		</div>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        $(".changeLang").change(function () {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>

    <!-- popup-holder of the page end here -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/jquery.main.js"></script>

</body>

</html>
