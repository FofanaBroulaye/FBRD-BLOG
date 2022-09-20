@extends('layouts.master')
@section('content')
    <div class="hero-wrap" style="background-image: url('../images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="">Home</a></span>
                            <span>Blog</span></p>
                        <h1 class="mb-4 bread">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @foreach($listPostsbyUsers as $listPostsbyUser)
                    <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <img src="{{asset('/storage/' . $listPostsbyUser->image)}}" width="200px" height="250px" alt="">
                        <div class="text mt-3 d-block">
                            <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">{{$listPostsbyUser->created_at->format('d M Y')}}</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li>{{$listPostsbyUsers->links('pagination::bootstrap-5')}}</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    @include('database.edit')--}}
@endsection




