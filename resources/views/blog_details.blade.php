@extends('layouts.app')
@section('title', 'News Details')
@section('content')
    <!-- OUR BLOG DETAILS PART START -->
    <section class="courses-part py-5">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-12 mb-5">
                    <h6>{{ $single_blog->title }}</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">{!! $single_blog->description !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR BLOG DETAILS PART END -->

    <!-- RELATED NEWS PART START -->
    <section id="latest-news-part" class="latest-news-part mb-5">
        <div class="container py-lg-5">
            <span>Media Center</span>
            <h4 class="mt-4">Related News</h4>
            <hr class="latest-news">
            <div class="row justify-content-center">
                @foreach ($related_blog as $blog)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4">
                        <div class="card">
                            <img src="{{ asset('assets/img/news_img/') }}/{{ $blog->image }}" class="card-img-top" alt="latest-img">
                            <div class="card-body">
                                <span>{{ $blog->created_at->diffForHumans() }}</span>
                                <h6 class="mt-3">{{ Str::limit($blog->title, 48, $end='...') }}</h6>
                                <p class="paragraph mt-3 p-2">{{ Str::limit($blog->title, 70, $end='...')  }}</p>
                                <a href="{{ route('blog.details', $blog->slug) }}"><em>Read More ></em></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @empty($blog)
                    <p class="alert alert-info text-danger">Nothing to show any related blog</p>
                @endempty
            </div>
        </div>
    </section>
    <!-- RELATED NEWS PART END -->
@endsection