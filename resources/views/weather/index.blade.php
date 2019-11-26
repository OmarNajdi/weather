<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Weather</title>

    <link rel="apple-touch-icon" href="https://getbootstrapadmin.com/remark/base/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="https://getbootstrapadmin.com/remark/base/assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/css/bootstrap.min.css?v4.0.2">
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/css/bootstrap-extend.min.css?v4.0.2">
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/base/assets/css/site.min.css?v4.0.2">

    <!-- Plugins -->
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/animsition/animsition.min.css?v4.0.2">
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/asscrollable/asScrollable.min.css?v4.0.2">
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/switchery/switchery.min.css?v4.0.2">
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/intro-js/introjs.min.css?v4.0.2">
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/slidepanel/slidePanel.min.css?v4.0.2">
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/vendor/flag-icon-css/flag-icon.min.css?v4.0.2">

    <!-- Page -->
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/base/assets/examples/css/widgets/weather.min.css?v4.0.2">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/fonts/web-icons/web-icons.min.css?v4.0.2">
    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/fonts/brand-icons/brand-icons.min.css?v4.0.2">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

    <link rel="stylesheet" href="https://getbootstrapadmin.com/remark/global/fonts/weather-icons/weather-icons.min.css?v4.0.2">

    <!--[if lt IE 9]>
    <script src="https://getbootstrapadmin.com/remark/global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="https://getbootstrapadmin.com/remark/global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="https://getbootstrapadmin.com/remark/global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="https://getbootstrapadmin.com/remark/global/vendor/breakpoints/breakpoints.min.js?v4.0.2"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition ">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-expand-md"
     role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="https://getbootstrapadmin.com/remark/base/assets/images/logo.png" title="Remark">
            <span class="navbar-brand-text hidden-xs-down"> Weather</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>

    <div class="navbar-container container-fluid">


        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>


<!-- Page -->
<div class="page" style="margin-left: 0px !important; min-height: 100% !important;">
    <div class="page-header">
        <h1 class="page-title">Weather</h1>
    </div>

    <div class="page-content page-content-example container-fluid">
        <div class="row">
            <div class="col-xxl-7">
                <!-- Card -->
                <div class="card card-shadow weather">
                    <div class="card-header card-header-transparent cover overlay">
                        <img class="cover-image h-xl-450" src="https://getbootstrapadmin.com/remark/global/photos/city-7-960x480.jpg"
                             alt="...">
                        <div class="overlay-panel">
                            <span class="font-size-40 white">{{ $hourly->city }}</span>
                            <div class="weather-location input-search float-right mt-10">
                                <input type="text" class="form-control form-control-sm grey-200" placeholder="Location">
                                <button type="submit" class="input-search-btn">
                                    <i class="icon wb-search grey-400" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-white">
                        <div class="row no-space">
                            <div class="col-lg-4 col-md-5 pl-30 py-30">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="vertical-align">
                                            <img width=50 src="{{ $daily->forecast[0]->iconLink }}">
                                        </div>
                                    </div>

                                    <div class="col-8">
                      <span class="blue-600 font-size-40">{{intval($daily->forecast[0]->highTemperature)}}&deg;
                        <span class="font-size-30">C</span>
                      </span>
                                        <span class="font-size-18 blue-grey-700">/</span>
                                        <span class="font-size-18 blue-grey-700">{{intval($daily->forecast[0]->lowTemperature)}}&deg;
                        <span class="font-size-16">C</span>
                      </span>
                                        <p class="font-size-14 mb-0">{{ Carbon\Carbon::now()->toDateString() }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-7">
                                <div class="row no-space text-center">

                                    @foreach (array_slice($hourly->forecast,0,6) as $f)

                                        <div class="col-2">
                                            <div class="weather-day vertical-align">
                                                <div class="vertical-align-middle font-size-16">
                                                    <div class="mb-10">{{ Carbon\Carbon::createFromFormat("HmdY", $f->localTime)->format('g:i A') }}</div>
                                                    <img width=24 src="{{ $f->iconLink }}">
                                                    <div>{{ $f->temperature }}&deg;
                                                        <span class="font-size-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-xxl-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-7">
                        <!-- Card -->
                        <div class="card card-inverse card-shadow bg-primary white text-center">
                            <div class="card-block p-25">
                                <h3 class="white">
                                    <span class="font-size-30">{{ $hourly->city }}, </span>{{ $hourly->country }}
                                </h3>
                                <p class="weather-day-date mb-30">
                                    <span class="mr-5">{{$daily->forecast[0]->weekday}}</span>
                                    {{  Carbon\Carbon::parse($daily->forecast[0]->utcTime)->toFormattedDateString() }}

                                </p>
                                <div class="mb-30">
                                    <img width=120 src="{{ $daily->forecast[0]->iconLink }}">

                                    <div class="inline-block">
                      <span class="font-size-50">{{$daily->forecast[0]->highTemperature}}&deg;
                        <span class="font-size-40">C</span>
                      </span>
                                        <p class="text-center">{{$daily->forecast[0]->description}}</p>
                                    </div>
                                </div>
                                <div class="row no-space">


                                    @foreach (array_slice($daily->forecast,0,6) as $d)


                                        <div class="col-2">
                                            <div>
                                                <div class="mb-10">{{  $d->weekday }}</div>
                                                <img width=24 src="{{ $d->iconLink }}">
                                                <div>{{ $d->highTemperature }}&deg;
                                                    <span class="font-size-12">C</span>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->



<!-- Core  -->
<script src="https://getbootstrapadmin.com/remark/global/vendor/babel-external-helpers/babel-external-helpers.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/jquery/jquery.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/popper-js/umd/popper.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/bootstrap/bootstrap.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/animsition/animsition.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/mousewheel/jquery.mousewheel.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/asscrollbar/jquery-asScrollbar.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/asscrollable/jquery-asScrollable.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/ashoverscroll/jquery-asHoverScroll.min.js?v4.0.2"></script>

<!-- Plugins -->
<script src="https://getbootstrapadmin.com/remark/global/vendor/switchery/switchery.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/intro-js/intro.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/screenfull/screenfull.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/vendor/slidepanel/jquery-slidePanel.min.js?v4.0.2"></script>

<!-- Plugins For This Page -->
<script src="https://getbootstrapadmin.com/remark/global/vendor/skycons/skycons.js?v4.0.2"></script>

<!-- Scripts -->
<script src="https://getbootstrapadmin.com/remark/global/js/Component.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/js/Plugin.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/js/Base.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/js/Config.min.js?v4.0.2"></script>

<script src="https://getbootstrapadmin.com/remark/base/assets/js/Section/Menubar.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/base/assets/js/Section/GridMenu.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/base/assets/js/Section/Sidebar.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/base/assets/js/Section/PageAside.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/base/assets/js/Plugin/menu.min.js?v4.0.2"></script>

<!-- Config -->
<script src="https://getbootstrapadmin.com/remark/global/js/config/colors.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/base/assets/js/config/tour.min.js?v4.0.2"></script>
<script>
    Config.set('assets', '../assets');
</script>

<!-- Page -->
<script src="https://getbootstrapadmin.com/remark/base/assets/js/Site.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/js/Plugin/asscrollable.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/js/Plugin/slidepanel.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/global/js/Plugin/switchery.min.js?v4.0.2"></script>
<script src="https://getbootstrapadmin.com/remark/base/assets/examples/js/widgets/weather.min.js?v4.0.2"></script>


</body>

</html>
