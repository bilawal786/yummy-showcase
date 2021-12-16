@extends('layouts.front')
@section('content')
<section class="appie-hero-area appie-hero-7-area" style="background-image:url('{{asset($gs->d1)}}'); background-repeat: no-repeat; background-size: 100% 100%; text-align: center; height: 100vh">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">

            </div>
            <div class="col-lg-5">

            </div>
        </div>
    </div>
</section>

<!--====== APPIE HERO PART ENDS ======-->

<!--====== APPIE COUNTER PART START ======-->


<section class="appie-counter-area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="appie-single-service text-center mt-30 wow animated fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="icon">
                        <i class="fas fa-mobile-alt"></i>
                        <span>1</span>
                    </div>
                    <h4 class="appie-title">Découvrez</h4>
                    <p>les commerçants partenaires autour de vous</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="appie-single-service text-center mt-30 item-2 wow animated fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span>2</span>
                    </div>
                    <h4 class="appie-title">Choisissez</h4>
                    <p>un commerce et un type de panier (végé, bio, halal...)</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="appie-single-service text-center mt-30 item-3 wow animated fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 600ms; animation-name: fadeInUp;">
                    <div class="icon">
                        <i class="fas fa-credit-card"></i>
                        <span>3</span>
                    </div>
                    <h4 class="appie-title">Payez</h4>
                    <p>en toute sécurité</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="appie-single-service text-center mt-30 item-4 wow animated fadeInUp animated" data-wow-duration="2000ms" data-wow-delay="800ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 800ms; animation-name: fadeInUp;">
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
                <div class="appie-project-3-box d-block d-md-flex justify-content-between align-items-center wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="400ms">
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
