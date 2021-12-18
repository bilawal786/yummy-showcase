<!doctype html>
<html lang="en">
<?php
$gs = \App\GeneralSettings::find(1);
?>
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{$gs->sitename}}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('front/assets/images/Yummy-box-picto.png')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('front/assets/css/font-awesome.min.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('front/assets/css/custom-animation.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <style>

        /* Slideshow container */
        .slideshow-container {
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 2.5s;
            animation-name: fade;
            animation-duration: 5.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
        .appie-header-main-menu ul > li .sub-menu {
            min-width: 250px;
            max-width: 200px;
        }
        .desktopview{
            background-image:url('{{asset($gs->d1)}}'); background-repeat: no-repeat; background-size: 100% 100%; text-align: center; height: 100vh
        }
        .mar{
            margin-top: 100px
        }
        .appie-hero-area {
            padding-top: 90px;
        }
        .appie-hero-content.appie-hero-content-6 ul li a {
            background: #9b2cfa;
            border-color: #9b2cfa;
            display: flex;
            align-items: center;
            font-size: 8px;
            font-weight: 400;
            padding-top: 0px;
            padding-bottom: 6px;
        }
        .appie-hero-area {
            padding-top: 100px;
             padding-bottom: 0px;
            overflow: hidden;
            position: relative;
            z-index: 10;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        @media only screen and (max-width: 600px) {
            .desktopview{
                background-image:url('{{asset($gs->d4)}}'); background-repeat: no-repeat; background-size: 100% 100%; text-align: center; height: 100vh;
            }
            .mar{
                margin-top: 150px
            }
            .appie-hero-content {
                 margin-bottom: 5px;
                text-align: center;
            }
        }
    </style>

</head>

<body>

<!--====== PRELOADER PART START ======-->

{{--<div class="loader-wrap">--}}
{{--    <div class="preloader"><div class="preloader-close">Preloader Close</div></div>--}}
{{--    <div class="layer layer-one"><span class="overlay"></span></div>--}}
{{--    <div class="layer layer-two"><span class="overlay"></span></div>--}}
{{--    <div class="layer layer-three"><span class="overlay"></span></div>--}}
{{--</div>--}}

<!--====== PRELOADER PART ENDS ======-->

<!--====== OFFCANVAS MENU PART START ======-->

<div class="off_canvars_overlay">

</div>
<div class="offcanvas_menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="offcanvas-brand text-center mb-40">
                        <img src="{{asset($gs->logo)}}" alt="">
                    </div>
                    <div id="menu" class="text-left ">

                        <ul  class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="{{route('front.index')}}">Particulier</a>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="{{route('front.comm')}}">Commerçants</a>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="{{route('front.advantage')}}">Avantage</a>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="#">Mouvement</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('front.blog')}}">Blogs</a></li>
                                    <li><a href="{{route('front.ambition')}}">Nos ambitions</a></li>
                                    <li><a href="{{route('front.objective')}}">Nos objectifs </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children active"><a href="{{route('front.contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas-social">
                        <ul class="text-center">
                            <li><a href="{{$gs->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$gs->instagram}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== OFFCANVAS MENU PART ENDS ======-->

<!--====== PART START ======-->

<header class="appie-header-area appie-header-2-area appie-sticky">
    <div class="container">
        <div class="header-nav-box header-nav-box-7">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-sm-5 col-6 order-1 order-sm-1">
                    <div class="appie-logo-box">
                        <a href="{{route('front.index')}}">
                            <img src="{{asset($gs->logo)}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-1 col-sm-1 order-3 order-sm-2">
                    <div class="appie-header-main-menu">
                        <ul>
                            <li>
                                <a href="{{route('front.index')}}">Particulier</a>
                            </li>
                            <li>
                                <a href="{{route('front.comm')}}">Commerçants</a>
                            </li>
                            <li>
                                <a href="{{route('front.advantage')}}">Avantage</a>
                            </li>
                            <li>
                                <a href="#">Mouvement <i class="fal fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('front.blog')}}">Blogs</a></li>
                                    <li><a href="{{route('front.ambition')}}">Nos ambitions</a></li>
                                    <li><a href="{{route('front.objective')}}">Nos objectifs </a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('front.contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1  col-md-7 col-sm-6 col-6 order-2 order-sm-3">
                    <div class="appie-btn-box text-right">
                        <div class="toggle-btn ml-30 canvas_open d-lg-none d-block">
                            <i style="color: black" class="fa fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')


<section class="appie-footer-area appie-footer-3-area  appie-footer-5-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-about-widget footer-about-widget-3">
                    <div class="logo">
                        <a href="#"><img width="150px" src="{{asset($gs->footer_logo)}}" alt=""></a>
                    </div>
                    <div class="social mt-30">
                        <ul>
                            <li><a href="{{$gs->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$gs->instagram}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-navigation footer-navigation-3">
                    <h4 class="title">Plan du site</h4>
                    <ul>
                        <li><a href="{{route('front.index')}}">Particuliers</a></li>
                        <li><a href="{{route('front.comm')}}">Commerçant</a></li>
                        <li><a href="{{route('front.advantage')}}">Avantage</a></li>
                        <li><a href="{{route('front.contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-navigation footer-navigation-3">
                    <h4 class="title">INFOS LÉGALES</h4>
                    <ul>
                        <li><a href="{{route('front.terms')}}">CONDITIONS GÉNÉRALES D'UTILISATION</a></li>
                        <li><a href="{{route('front.policy')}}">MENTIONS LÉGALES</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-navigation footer-widget-info">
                    <h4 class="title">Contact</h4>
                    <ul>
                        <li><a href="mailto:{{$gs->email}}"><i class="fal fa-envelope"></i>{{$gs->email}}</a></li>
                        <li><a ><i class="fal fa-phone"></i>{{$gs->phone}}</a></li>
                        <li><a ><i class="fal fa-map"></i>{{$gs->address}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copyright d-flex align-items-center justify-content-between pt-35">
                    <div class="apps-download-btn" style="display:none">
                        <ul>
                            <li><a href="#"><i class="fab fa-apple"></i> Download for iOS</a></li>
                            <li><a class="item-2" href="#"><i class="fab fa-google-play"></i> Download for Android</a></li>
                        </ul>
                    </div>
                    <div class="copyright-text">
                        <p>Copyright © 2021 YummyBox. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== APPIE FOOTER PART ENDS ======-->


<!--====== APPIE BACK TO TOP PART ENDS ======-->
<div class="back-to-top">
    <a href="#"><i class="fal fa-arrow-up"></i></a>
</div>
<!--====== APPIE BACK TO TOP PART ENDS ======-->


<!--====== jquery js ======-->
<script src="{{asset('front/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('front/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

<!--====== Bootstrap js ======-->
<script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/assets/js/popper.min.js')}}"></script>

<!--====== wow js ======-->
<script src="{{asset('front/assets/js/wow.js')}}"></script>

<!--====== Slick js ======-->
<script src="{{asset('front/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('front/assets/js/waypoints.min.js')}}"></script>

<!--====== TweenMax js ======-->
<script src="{{asset('front/assets/js/TweenMax.min.js')}}"></script>

<!--====== Slick js ======-->
<script src="{{asset('front/assets/js/slick.min.js')}}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>

<!--====== Main js ======-->
<script src="{{asset('front/assets/js/main.js')}}"></script>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>
</body>

</html>
