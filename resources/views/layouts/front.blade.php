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
        .w-100{
            width: 100% !important;
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
        /* CSS Multiple Whatsapp Chat */
        .whatsapp-name {
            font-size: 16px;
            font-weight: 600;
            padding-bottom: 0;
            margin-bottom: 0;
            line-height: 0.5;
        }

        #whatsapp-chat {
            box-sizing: border-box !important;

            outline: none !important;
            position: fixed;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
            bottom: 90px;
            right: 30px;
            overflow: hidden;
            z-index: 99;
            animation-name: showchat;
            animation-duration: 1s;
            transform: scale(1);
        }
        a.blantershow-chat {
            /*   background: #009688; */
            background: #fff;
            color: #404040;
            position: fixed;
            display: flex;
            font-weight: 400;
            justify-content: space-between;
            z-index: 98;
            bottom: 70px;
            right: 30px;
            font-size: 15px;
            padding: 10px 20px;
            border-radius: 30px;
            box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
        }
        a.blantershow-chat svg {
            transform: scale(1.2);
            margin: 0 10px 0 0;
        }
        .header-chat {
            /*   background: linear-gradient(to right top, #6f96f3, #164ed2); */
            background: #009688;
            background: #095e54;
            color: #fff;
            padding: 20px;
        }
        .header-chat h3 {
            margin: 0 0 10px;
        }
        .header-chat p {
            font-size: 14px;
            line-height: 1.7;
            margin: 0;
        }
        .info-avatar {
            position: relative;
        }
        .info-avatar img {
            border-radius: 100%;
            width: 50px;
            float: left;
            margin: 0 10px 0 0;
        }

        a.informasi {
            padding: 20px;
            display: block;
            overflow: hidden;
            animation-name: showhide;
            animation-duration: 0.5s;
        }
        a.informasi:hover {
            background: #f1f1f1;
        }
        .info-chat span {
            display: block;
        }
        #get-label,
        span.chat-label {
            font-size: 12px;
            color: #888;
        }
        #get-nama,
        span.chat-nama {
            margin: 5px 0 0;
            font-size: 15px;
            font-weight: 700;
            color: #222;
        }
        #get-label,
        #get-nama {
            color: #fff;
        }
        span.my-number {
            display: none;
        }
        /* .blanter-msg {
          color: #444;
          padding: 20px;
          font-size: 12.5px;
          text-align: center;
          border-top: 1px solid #ddd;
        } */
        textarea#chat-input {
            border: none;
            font-family: "Arial", sans-serif;
            width: 100%;
            height: 50px;
            outline: none;
            resize: none;
            padding: 10px;
            font-size: 14px;
        }

        a#send-it {
            width: 30px;
            font-weight: 700;
            padding: 10px 10px 0;
            background:#eee;
            border-radius: 10px;

        svg {
            fill:#a6a6a6;
            height: 24px;
            width: 24px;
        }
        }

        .first-msg {
            background: transparent;
            padding: 30px;
            text-align: center;
        & span {
              background: #e2e2e2;
              color: #333;
              font-size: 14.2px;
              line-height: 1.7;
              border-radius: 10px;
              padding: 15px 20px;
              display: inline-block;
          }
        }

        .start-chat .blanter-msg {
            display: flex;
        }
        #get-number {
            display: none;
        }
        a.close-chat {
            position: absolute;
            top: 5px;
            right: 15px;
            color: #fff;
            font-size: 30px;

        }

        @keyframes ZpjSY{
            0% {
                background-color: rgb(182, 181, 186);
            }
            15% {
                background-color: rgb(17, 17, 17);
            }
            25% {
                background-color: rgb(182, 181, 186);
            }
        }

        @keyframes hPhMsj {
            15% {
                background-color: rgb(182, 181, 186);
            }
            25% {
                background-color: rgb(17, 17, 17);
            }
            35% {
                background-color: rgb(182, 181, 186);
            }
        }

        @keyframes iUMejp {
            25% {
                background-color: rgb(182, 181, 186);
            }
            35% {
                background-color: rgb(17, 17, 17);
            }
            45% {
                background-color: rgb(182, 181, 186);
            }
        }


        @keyframes showhide {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
        }
        @keyframes showchat {
            from {
                transform: scale(0);
                opacity: 0;
            }
        }
        @media screen and (max-width: 480px) {
            #whatsapp-chat {
                width: auto;
                left: 5%;
                right: 5%;
                font-size: 80%;
            }
        }
        .hide {
            display: none;
            animation-name: showhide;
            animation-duration: 0.5s;
            transform: scale(1);
            opacity: 1;
        }
        .show {
            display: block;
            animation-name: showhide;
            animation-duration: 0.5s;
            transform: scale(1);
            opacity: 1;
        }

        .whatsapp-message-container {
            display: flex;
            z-index: 1;
        }

        .whatsapp-message {
            padding: 7px 14px 6px;
            background-color: rgb(255, 255, 255);
            border-radius: 0px 8px 8px;
            position: relative;
            transition: all 0.3s ease 0s;
            opacity: 0;
            transform-origin: center top 0px;
            z-index: 2;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
            margin-top: 4px;
            margin-left: -54px;
            max-width: calc(100% - 66px);
        }

        .whatsapp-chat-body {
            padding: 20px 20px 20px 10px;
            background-color: rgb(230, 221, 212);
            position: relative;
        &::before {
             display: block;
             position: absolute;
             content: "";
             left: 0px;
             top: 0px;
             height: 100%;
             width: 100%;
             z-index: 0;
             opacity: 0.08;
             background-image: url("https://elfsight.com/assets/chats/patterns/whatsapp.png");
         // background-image: url(https://res.cloudinary.com/eventbree/image/upload/v1575782560/Widgets/whatsappbg_opt.jpg);
         }
        }

        .dAbFpq {
            display: flex;
            z-index: 1;
        }

        .eJJEeC {
            background-color: rgb(255, 255, 255);
            width: 52.5px;
            height: 32px;
            border-radius: 16px;
            display: flex;
            -moz-box-pack: center;
            justify-content: center;
            -moz-box-align: center;
            align-items: center;
            margin-left: 10px;
            opacity: 0;
            transition: all 0.1s ease 0s;
            z-index: 1;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
        }

        .hFENyl {
            position: relative;
            display: flex;
        }

        .ixsrax {
            height: 5px;
            width: 5px;
            margin: 0px 2px;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            top: 0px;
            background-color: rgb(158, 157, 162);
            animation-name: ZpjSY;
        }

        .dRvxoz {

            height: 5px;
            width: 5px;
            margin: 0px 2px;
            background-color: rgb(182, 181, 186);
            border-radius: 50%;
            display: inline-block;
            position: relative;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            top: 0px;
            animation-name: hPhMsj;
        }

        .kAZgZq {
            padding: 7px 14px 6px;
            background-color: rgb(255, 255, 255);
            border-radius: 0px 8px 8px;
            position: relative;
            transition: all 0.3s ease 0s;
            opacity: 0;
            transform-origin: center top 0px;
            z-index: 2;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
            margin-top: 4px;
            margin-left: -54px;
            max-width: calc(100% - 66px);
        &::before {
             position: absolute;
             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
             background-position: 50% 50%;
             background-repeat: no-repeat;
             background-size: contain;
             content: "";
             top: 0px;
             left: -12px;
             width: 12px;
             height: 19px;
         }
        }

        .bMIBDo {
            font-size: 13px;
            font-weight: 700;
            line-height: 18px;
            color: rgba(0, 0, 0, 0.4);
        }

        .iSpIQi {
            font-size: 14px;
            line-height: 19px;
            margin-top: 4px;
            color: rgb(17, 17, 17);
        }

        .iSpIQi {
            font-size: 14px;
            line-height: 19px;
            margin-top: 4px;
            color: rgb(17, 17, 17);
        }

        .cqCDVm {
            text-align: right;
            margin-top: 4px;
            font-size: 12px;
            line-height: 16px;
            color:
                rgba(17, 17, 17, 0.5);
            margin-right: -8px;
            margin-bottom: -4px;
        }
        /*end whatsap popup css*/

    </style>

</head>
<div id='whatsapp-chat' class='hide'>
    <div class='header-chat'>
        <div class='head-home'>
            <div class='info-avatar'><img src='{{asset('front/assets/images/Yummy-box-picto.png')}}' /></div>
            <p style="color: white"><span class="whatsapp-name">Yummy Box</span><br><small>Répond généralement dans l'heure</small></p>

        </div>
        <div class='get-new hide'>
            <div id='get-label'></div>
            <div id='get-nama'></div>
        </div>
    </div>
    <div class='home-chat'>

    </div>
    <div class='start-chat'>
        <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
            <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
                <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
                    <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
                    </div>
                </div>
                <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
                    <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">Yummy Box</div>
                    <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Salut 👋<br><br>Comment puis-je t'aider?</div>
                    {{--                    <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div>--}}
                </div>
            </div>
        </div>

        <div class='blanter-msg'>
            <textarea id='chat-input' placeholder='Écrire un message' maxlength='120' row='1'></textarea>
            <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"/></svg></a>

        </div>
    </div>
    <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg>Discuter</a>

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
                                <a href="#">Avantage</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('front.parrainage')}}">Parrainage </a></li>
                                    <li><a href="{{route('front.ambass')}}">Ambassadeur </a></li>
                                    <li><a href="{{route('front.coin')}}">Yummy coin </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="#">Mouvement</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('front.blog')}}">Blog</a></li>
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
                                <a href="#">Avantage <i class="fal fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('front.parrainage')}}">Parrainage </a></li>
                                    <li><a href="{{route('front.ambass')}}">Ambassadeur </a></li>
                                    <li><a href="{{route('front.coin')}}">Yummy coin </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mouvement <i class="fal fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('front.blog')}}">Blog</a></li>
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
<script>
    /* Whatsapp Chat Widget by www.bloggermix.com */
    $(document).on("click", "#send-it", function() {
        var a = document.getElementById("chat-input");
        if ("" != a.value) {
            var b = $("#get-number").text(),
                c = document.getElementById("chat-input").value,
                d = "https://web.whatsapp.com/send",
                e = b,
                f = "&text=" + c;
            if (
                /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                    navigator.userAgent
                )
            )
                var d = "whatsapp://send";
            var g = d + "?phone=+590690283282" + e + f;
            window.open(g, "_blank");
        }
    }),
        $(document).on("click", ".informasi", function() {
            (document.getElementById("get-number").innerHTML = $(this)
                .children(".my-number")
                .text()),
                $(".start-chat,.get-new")
                    .addClass("show")
                    .removeClass("hide"),
                $(".home-chat,.head-home")
                    .addClass("hide")
                    .removeClass("show"),
                (document.getElementById("get-nama").innerHTML = $(this)
                    .children(".info-chat")
                    .children(".chat-nama")
                    .text()),
                (document.getElementById("get-label").innerHTML = $(this)
                    .children(".info-chat")
                    .children(".chat-label")
                    .text());
        }),
        $(document).on("click", ".close-chat", function() {
            $("#whatsapp-chat")
                .addClass("hide")
                .removeClass("show");
        }),
        $(document).on("click", ".blantershow-chat", function() {
            $("#whatsapp-chat")
                .addClass("show")
                .removeClass("hide");
        });

</script>
</body>

</html>
