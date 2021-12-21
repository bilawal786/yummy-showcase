@extends('layouts.front')
@section('content')
    <div class="appie-page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-page-title-item">
                        <h3 class="title">Ambassadeur    </h3>
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
                                <img style="width: 100%" src="{{asset($gs->d17)}}" alt="">
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
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="appie-fun-fact-play">
                        <div class="row">
                            <style></style>
                            <iframe src="https://tripetto.app/run/6NWGTUZDY0" style="background: #ffffff;border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="300px" width="600px" allowfullscreen></iframe>
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
                        {!! $gs->d14 !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
