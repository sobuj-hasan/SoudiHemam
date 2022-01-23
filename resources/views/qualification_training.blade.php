@extends('layouts.app')
@section('title', 'Qualification Training')
@section('content')
    <!-- OUR PARTNER BANNER START -->
    <section class="banner" style="background-image: url({{ asset('assets/img/photos/qualification-training-banner.png') }});">
        <div class="overlay">
            <div class="container py-lg-5">
                <div class="row py-5">
                    <div class="col-12 text-center">
                        <h4>@lang('home.qualification_and_training')</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PARTNER BANNER END -->

    <!-- QUALIFICATION AND TRAINING START -->
    <section class="qualification py-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <img class="img-fluid" src="{{ asset('assets/img/photos/qualification-img1.png') }}" alt="qualification-img">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                    <p class="paragraph mt-5">@lang('home.the_motto_of_saudi')</p>
                    <h4>@lang('home.saudi_hemam_qualification_and_training_title')</h4>
                    <div class="qualification-two mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                                <img src="{{ asset('assets/img/photos/qualification-img2.png') }}" alt="qualification-img">
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                                <p class="paragraph mt-4">@lang('home.saudi_hemam_qualification_and_training_text')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- QUALIFICATION AND TRAINING END -->

    <!-- REHABILITATION PART START -->
    <section class="rehabilitation-part py-5">
        <div class="container">
            <h6>@lang('home.Rehabilitation_and_training_of_blind')</h6>
            <hr class="rehabilitation">
            <div class="row pb-4">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-3">
                    <div class="card">
                        <p class="paragraph">@lang('home.Rehabilitation_text1')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-3">
                    <div class="card">
                        <p class="paragraph">@lang('home.Rehabilitation_text2')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-3">
                    <div class="card">
                        <p class="paragraph">@lang('home.Rehabilitation_text3')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-3">
                    <div class="card">
                        <p class="paragraph">@lang('home.Rehabilitation_text4')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- REHABILITATION PART END -->

    <!-- OUR COURSES PART START -->
    <section class="courses-part py-5">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-5">
                    <h6>@lang('home.Videography_and_montage_course_for_the_deaf_and_dumb')</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">@lang('home.Videography_and_montage_course_for_the_deaf_and_dumb_article')</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-5">
                    <h6>@lang('home.Digital_marketing')</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">@lang('home.Digital_marketing_article')</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h6>@lang('home.Motion_graphics_course')</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">@lang('home.Motion_graphics_course_article')</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h6>@lang('home.Call_center_course')</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">@lang('home.Call_center_course_article')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR COURSES PART END -->

    <!-- HOW TO CREATE WEBSITE START -->
    <section class="create-website-part">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="{{ asset('assets/img/photos/mobile-apps.png') }}" alt="event">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <h4 class="mt-3 mb-5">@lang('home.How_to_create_a_website')</h4>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.How_to_create_a_website_text1')</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.How_to_create_a_website_text2')</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.How_to_create_a_website_text3')</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.How_to_create_a_website_text4')</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.How_to_create_a_website_text5')</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.How_to_create_a_website_text6')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOW TO CREATE WEBSITE END -->

    <!-- SUBSCRIBER PART START -->
    <section class="get-notificaiton my-5">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1">
                    <h3 class="mt-1">@lang('home.get_notification')</h3>
                    <p class="paragraph">@lang('home.get_update_notificatin')</p>
                </div>
                @include('app_components.subscriber')
            </div>
        </div>
    </section>
    <!-- SUBSCRIBER PART END -->
@endsection

