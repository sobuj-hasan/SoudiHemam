@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Banner part Start -->
    <section class="banner-section">
        <div class="overlay py-5">
            <div class="container py-lg-5">
                <div class="row py-lg-4">
                    <div class="col-12">
                        <div class="banner-content">
                            <h1 class="banner-title">@lang('home.helloworld')</h1>
                            <h2 class="mt-4">@lang('home.we_are_able_to_work')</h2>
                            <img src="assets/img/photos/banner-line1.png" alt="banner-line">
                            <img class="ms-4" src="assets/img/photos/banner-line2.png" alt="banner-line">
                            <img class="ms-4" src="assets/img/photos/banner-line3.png" alt="banner-line">
                            <div class="banner-btn pt-5">
                                <a class="custom-btn mt-4" href="{{ route('business.scope') }}">@lang('home.aboutus')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner part End -->

    <!-- OUR WORK TYPE PART START -->
    <section class="work-type mt-5 mb-lg-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="assets/img/photos/work-type.png" alt="event">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.list1')</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.list2')</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.list3')</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">@lang('home.list4')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR WORK TYPE PART END -->

    <!-- ACHIVEMENT PART START -->
    <section class="counter-section">
        <div class="overlay">
            <div class="container py-lg-3">
                <div class="row justify-content-center py-lg-5">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <div class="span d-flex justify-content-center">
                            <h3 class="counter">150 </h3>
                            <h3> +</h3>
                        </div>
                        <p>@lang('home.brand_company')</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <div class="span d-flex justify-content-center">
                            <h3 class="counter">40 </h3>
                            <h3> +</h3>
                        </div>
                        <p>@lang('home.country_service')</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <div class="span d-flex justify-content-center">
                            <h3 class="counter">12 </h3>
                            <h3> +</h3>
                        </div>
                        <p>@lang('home.native_language')</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <div class="span d-flex justify-content-center">
                            <h3 class="counter">1500 </h3>
                            <h3> +</h3>
                        </div>
                        <p>@lang('home.active_employee')</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <h3>24/7</h3>
                        <p>@lang('home.live_support')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ACHIVEMENT PART END -->

    <!-- WHO WE ARE PART START -->
    <section class="who-we-are my-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <h4 class="">@lang('home.who_we_are')</h4>
                    <p class="paragraph mt-4 pe-lg-5">@lang('home.who_we_are_text')</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="assets/img/photos/who-we-are.png" alt="event">
                </div>
            </div>
        </div>
    </section>
    <!-- WHO WE ARE PART END -->

    <!-- OUR SERVICES START -->
    <section class="service-part py-5">
        <div class="container pt-lg-5 pb-lg-3 text-center">
            <h4 class="mb-5">@lang('home.our_services')</h4>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service1.png" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service1')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service2.png" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service2')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service3.png" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service3')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service4.png" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service4')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service5.png" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service5')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service6.png" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service6')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service7.png" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service7')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service8.png" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service8')</p>
                    </div>
                </div>

                <div class="service-btn pt-3">
                    <a class="custom-btn mt-lg-4" href="{{ route('service') }}">@lang('home.view_all')</a>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR SERVICES END -->

    <!-- HOME INFO SECTION START -->
    <section class="home-info-section py-5">
        <div class="container text-center py-lg-4">
            <p class="paragraph">@lang('home.service_provider')</p>
            <img src="assets/img/photos/info-line.png" alt="info-line">
            <div class="row mt-5 mb-4 justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/img/photos/Establishing,-developing,-operating-and-managing-multiple-integrated-call-centers-and-channels.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="paragraph mt-4">@lang('home.service_provider1')</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/img/photos/Providing-outsourcing-services-and-outsourcing-the-operations-of-the-various-institutional-tasks.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="paragraph mt-4">@lang('home.service_provider2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-lg-4">
                    <div class="card">
                        <img src="assets/img/photos/Providing-innovative-solutions-and-methodologies-to-support-operations-and-management.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="paragraph mt-4">@lang('home.service_provider3')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME INFO SECTION END -->

    <!-- TRAINING SECTION START -->
    <section class="training-section">
        <div class="container">
            <div class="row pb-5">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h4 class="">@lang('home.rehabilitation_and_training')</h4>
                    <p class="paragraph mt-4 pe-lg-5">@lang('home.rehabilitation_and_training1')</p>
                    <p class="paragraph pe-lg-5">@lang('home.rehabilitation_and_training2')</p>
                    <p class="paragraph pe-lg-5">@lang('home.rehabilitation_and_training3')</p>
                    <p class="paragraph pe-lg-5">@lang('home.rehabilitation_and_training4')</p>
                    <div class="mt-5">
                        <a class="readmore-btn" href="{{ route('qualification.training') }}">@lang('home.read_more')</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="assets/img/photos/Rehabilitation-&-Training-of-Blind.png" alt="event">
                </div>
            </div>
        </div>
    </section>
    <!-- TRAINING SECTION END -->

    <!-- TESTIMONIAL PART START -->
    <section class="testimonial-part py-5 my-lg-5">
        <div class="container coma">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="user" src="assets/img/users/testimonial.png" alt="testimonial-img">
                    <p class="paragraph mt-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form,
                        by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                        of
                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <div class="author my-4">
                        <span> <img src="assets/img/photos/testimonial-line.png" alt="line"> &nbsp;&nbsp;&nbsp; Asadullah Galib</span>
                    </div>
                    <div class="icon">
                        <i class="fas fa-circle m-2 active"></i>
                        <i class="fas fa-circle m-2"></i>
                        <i class="fas fa-circle m-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL PART END -->

    <!-- LATEST NEWS PART START -->
    <section id="latest-news-part" class="latest-news-part my-5">
        <div class="container py-lg-5">
            <span>Media Center</span>
            <h4 class="mt-4">Latest News</h4>
            <hr class="latest-news">
            <div class="row justify-content-center">
                @foreach ($blogs as $blog)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4">
                        <div class="card">
                            <img src="assets/img/news_img/{{ $blog->image }}" class="card-img-top" alt="latest-img">
                            <div class="card-body">
                                <span>{{ $blog->created_at->diffForHumans() }}</span>
                                <h6 class="mt-3">{{ Str::limit($blog->title, 48, $end='...') }}</h6>
                                <p class="paragraph mt-3 p-2">{{ Str::limit($blog->title, 70, $end='...')  }}</p>
                                <a href="{{ route('blog.details', $blog->slug) }}"><em>Read More ></em></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- LATEST NEWS PART END -->

    <!-- SUBSCRIBER PART START -->
    <section class="subscribe-part my-5">
        <div class="container">
            <div class="row pb-lg-4">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h4>Get Notification</h4>
                    <p>Subscribe here to get update notification in your mail</p>
                </div>
                @include('app_components.subscriber')
            </div>
        </div>
    </section>
    <!-- SUBSCRIBER PART END -->
@endsection











