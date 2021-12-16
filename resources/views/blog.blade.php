@extends('layouts.front')
@section('content')
    <div class="appie-page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-page-title-item">
                        <h3 class="title">Blog </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blogpage-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        @foreach($blogs as $blog)
                        <div class="col-lg-4">
                            <div class="post-item-1">
                                <img src="{{asset($blog->photo)}}" alt="">
                                <div class="b-post-details">
                                    <div class="bp-meta">
                                        <a href="#"><i class="fal fa-clock"></i>{{$blog->created_at->format('d-m-y')}}</a>
                                    </div>
                                    <h3><a href="">{{$blog->title}}</a></h3>
                                    <a class="read-more" href="{{route('single.post', ['id' => $blog->id])}}">Lire la suite<i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
