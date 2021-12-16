@extends('layouts.front')
@section('content')
    <div class="appie-page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-page-title-item">
                        <h3 class="title">Termes et conditions </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section>
        <div class="container" style="margin-top: 40px">
            <div class="row" style="text-align: justify">
                <div class="col-lg-12">
                    <div class="appie-section-title">
                        {!! $gs->terms !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
