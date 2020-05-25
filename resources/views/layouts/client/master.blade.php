<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
	<!-- ==============================================
	CSS
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">

	<!-- ==============================================
	Google Fonts
	=============================================== -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <script type="text/javascript" src="{{asset('assets/js/modernizr.min.js')}}"></script>
    @stack('style')
</head>

<body>

	@include('layouts.client.header')


	<!-- BANNER -->
    @if(request()->routeIs('index'))
        <div class="section banner" >
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('assets/images/slide-1.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="wrap-caption">
                                    <div class="caption-heading">WELCOME TO PRO SOCCER</div>
                                    <div class="caption-desc">This template is using bootstrap framework, works totally responsive, easy to customise, well commented codes and seo friendly.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/images/slide-2.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="wrap-caption">
                                    <div class="caption-heading">WE ARE PROFESSIONAL FOOTBALL CLUB</div>
                                    <div class="caption-desc">This template is using adobe muse making it easier to edit, add content, and without having to use the coding in the edit.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/images/slide-3.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="wrap-caption">
                                    <div class="caption-heading">WE ARE DREAM CLUB</div>
                                    <div class="caption-desc">This template is using adobe muse making it easier to edit, add content, and without having to use the coding in the edit.</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" ></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" ></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- END CAROUSEL -->

        </div>
    @else
        <div class="section subbanner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="caption">@yield('title')</div>
                    </div>
                </div>
            </div>
        </div>
    @endif

	@yield('content')
	<!-- FOOTER SECTION -->
	@include('layouts.client.footer');
	<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
	<script type='text/javascript' src='{{asset('assets/js/jqBootstrapValidation.js')}}'></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
	@stack('script')



</body>
</html>
