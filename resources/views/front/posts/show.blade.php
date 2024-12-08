@extends('front.layout.app')

@section('content')


        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>All news</h1>
                            <span class="subheading">Breaking News</span>
                            {{-- <span class="meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on August 24, 2023
                            </span> --}}
                        </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                        <h2>{{$post->title}}</h2>
                        <div class="">
                            <img src="{{asset('uploads/posts/'.$post->image)}}" alt="" width="100%">
                        </div>
                        <div class="">
                            <p>{{$post->content}}</p>
                        </div>
                    <!-- Pager-->
                    {{-- {{$posts->links()}} --}}
                </div>
            </div>
        </div>

@endsection