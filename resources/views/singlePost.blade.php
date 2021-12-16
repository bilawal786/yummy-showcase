@extends('layouts.front')
@section('content')
    <div class="appie-page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-page-title-item">
                        <h3 class="title">{{$blog->title}} </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blogpage-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="single-post-area">
                        <div class="post-thumb">
                            <img src="{{asset($blog->photo)}}" alt="">
                        </div>
                        {!! $blog->description !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
