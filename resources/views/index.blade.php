@extends('layouts.front')
@section('content')
<section class="appie-hero-area appie-hero-7-area" style="background-color: #fed53d">
    <div class="row" style="background-color: black; ">
        <div class="col-md-4" style="margin-top: 10px !important;">
            <h2 style="color: white; font-size: 26px; text-align: center">YUMMY BOX</h2>
        </div>
        <div class="col-md-4" style="margin-top: 10px !important;">
                <h2 style="color: white; font-size: 26px; text-align: center">TELECHARGEZ MAINTENANT</h2>
        </div>
        <div class="col-md-4" style="margin-bottom: 5px">
            <div class="appie-hero-content appie-hero-content-6 appie-hero-content-7" >
                <ul style="margin-top: 5px !important;">
                    <li><a href="{{$gs->d6}}"><i class="fab fa-apple"></i> <span>Disponible sur <span>App Store</span></span></a></li>
                    <li><a class="item-2" href="{{$gs->d5}}"><i class="fab fa-google-play"></i> <span>Disponible sur <span>Google Play</span></span></a></li>
                </ul>
                <div class="info">

                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <a class="w-100" href="{{$gs->d10}}"> <img src="{{asset($gs->d7??'03.jpeg')}}" style="width:100%"></a>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <a class="w-100" href="{{$gs->d11}}"> <img src="{{asset($gs->d8??'03.jpeg')}}" style="width:100%"></a>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <a class="w-100" href="{{$gs->d12}}"> <img src="{{asset($gs->d9??'03.jpeg')}}" style="width:100%"></a>
            </div>

        </div>

        <div style="text-align:center; display: none">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="desktopview">

        </div>
    </div>
</section>

<!--====== APPIE HERO PART ENDS ======-->

<!--====== APPIE COUNTER PART START ======-->


<section class="appie-counter-area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="appie-single-service text-center mt-30">
                    <div class="icon">
                        <i class="fas fa-mobile-alt"></i>
                        <span>1</span>
                    </div>
                    <h4 class="appie-title">Découvrez</h4>
                    <p>les commerçants partenaires autour de vous</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="appie-single-service text-center mt-30 item-2">
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span>2</span>
                    </div>
                    <h4 class="appie-title">Choisissez</h4>
                    <p>un commerce et un type de panier (végé, bio, halal...)</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="appie-single-service text-center mt-30 item-3">
                    <div class="icon">
                        <i class="fas fa-credit-card"></i>
                        <span>3</span>
                    </div>
                    <h4 class="appie-title">Payez</h4>
                    <p>en toute sécurité</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="appie-single-service text-center mt-30 item-4">
                    <div class="icon">
                        <i class="fas fa-shopping-bag"></i>
                        <span>4</span>
                    </div>
                    <h4 class="appie-title">Récupérez</h4>
                    <p>votre panier chez le commerçant pendant la tranche horaire indiquée</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="appie-counter-area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">

            </div>
            <div class="col-lg-8 col-md-8">
                <iframe width="100%" height="400"
                        src="https://www.youtube.com/embed/{{$gs->video}}">
                </iframe>
            </div>
            <div class="col-lg-2 col-md-2">

            </div>
        </div>
    </div>
</section>
<!--====== APPIE COUNTER PART ENDS ======-->
<!--====== APPIE PROJECT 3 PART START ======-->

<section class="appie-project-3-area appie-project-5-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appie-project-3-box d-block d-md-flex justify-content-between align-items-center">
                    <h4 class="title">Je suis un</h4>
                    <ul>
                        <li><a href="commercant.html">Commerçant</a></li>

                        <li><a class="item-2" href="#">&nbsp;&nbsp;Particulier&nbsp;&nbsp;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== APPIE PROJECT 3 PART ENDS ======-->

<!--====== APPIE FOOTER PART START ======-->
@endsection
