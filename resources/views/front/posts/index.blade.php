@extends('front.layout.app')

@section('content')


        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('front')}}/assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>All news</h1>
                            <h2 class="subheading">Breaking News</h2>
                            {{-- <span class="meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on August 24, 2023
                            </span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach($posts as $post)
                        
                    <div class="post-preview">
                        <a href="{{url('samplePosts/'.$post->id)}}">
                            <h2 class="post-title">{{$post->title}}</h2>
                            <h3 class="post-subtitle">{{\Str::limit($post->content,100)}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="{{url('samplePosts/'.$post->id)}}">{{$post->user->name}}</a>
                            on {{$post->created_at->format('d/m/Y')}}
                        </p>
                    </div>
                    
                    <!-- Divider-->
                    <hr class="my-4" />
                    @endforeach
                    <!-- Pager-->
                    {{$posts->links()}}
                </div>
            </div>
        </div>

@endsection