@extends('layouts.front')
@section('content')
    <div class="appie-page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-page-title-item">
                        <h3 class="title">Yummy coin </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container" style="margin-top: 40px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="400ms">
                        <div class="row r">
                            <div class="col-lg-12">
                                <img style="width: 100%" src="{{asset($gs->d18)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 40px">
            <div class="row" style="text-align: justify">
                <div class="col-lg-12">
                    <div class="appie-section-title">
                        {!! $gs->d15 !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
