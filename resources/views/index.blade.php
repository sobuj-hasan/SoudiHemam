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
                            <h1 class="banner-title">Hello World !</h1>
                            <h2 class="mt-4">We are also able to do work</h2>
                            <img src="assets/img/photos/banner-line1.png" alt="banner-line">
                            <img class="ms-4" src="assets/img/photos/banner-line2.png" alt="banner-line">
                            <img class="ms-4" src="assets/img/photos/banner-line3.png" alt="banner-line">
                            <div class="banner-btn pt-5">
                                <a class="custom-btn mt-4" href="{{ route('business.scope') }}">About Us</a>
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
                        <p class="ps-4 pe-lg-5 mt-3">I can be your mute and deaf audible voice</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">I am able to connect you to the big world with a motor disability</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">I am able to be your guide. You blind one</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">I can be part of the prisoner change</p>
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
                        <h3>150+</h3>
                        <p>Brand Company</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <h3>40+</h3>
                        <p>Country Service</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <h3>12+</h3>
                        <p>Native Language</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <h3>1500+</h3>
                        <p>Active Online Employee</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mt-4 mb-2 text-center counter-part">
                        <h3>24/7</h3>
                        <p>Live Support</p>
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
                    <h4 class="">Who we are?</h4>
                    <p class="paragraph mt-4 pe-lg-5">Saudi Hemam is a business center and a unique entity that aspires to provide vital support and effective support by
                    relying on the people of determination in the community and spreading the spirit of innovation and production, based on
                    the words of the Crown Prince, Prince Muhammad bin Salman, that Saudi Hemam is like Jabal Tuwaiq, and we seek to provide
                    an integrated set of services</p>
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
            <h4 class="mb-5">Our Services</h4>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service1.png" alt="service-img">
                        <p class="paragraph p-4">Establishing, developing, operating and managing digital call centers</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service2.png" alt="service-img">
                        <p class="paragraph p-4">Digital interaction services and business enablement through new channels </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service3.png" alt="service-img">
                        <p class="paragraph p-4">Undertaking services for work and attribution of corporate operational activities </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service4.png" alt="service-img">
                        <p class="paragraph p-4">Digital marketing and e-marketing services </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service5.png" alt="service-img">
                        <p class="paragraph p-4">Social media and management services </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service6.png" alt="service-img">
                        <p class="paragraph p-4">Chahbot services And Event registration services </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service7.png" alt="service-img">
                        <p class="paragraph p-4">Customer Experience and Relationship Management Services </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="assets/img/icon/service8.png" alt="service-img">
                        <p class="paragraph p-4">Media center management services </p>
                    </div>
                </div>

                <div class="service-btn pt-3">
                    <a class="custom-btn mt-lg-4" href="{{ route('service') }}">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR SERVICES END -->

    <!-- HOME INFO SECTION START -->
    <section class="home-info-section py-5">
        <div class="container text-center py-lg-4">
            <p class="paragraph">Saudi Hemam is a trusted entity specialized in providing integrated solutions to support business by people of
            determination as a creative team and as a reliable entity that provides its services with the help of its main partners
            as they are from the exclusive elite. Our role is through</p>
            <img src="assets/img/photos/info-line.png" alt="info-line">
            <div class="row mt-5 mb-4 justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/img/photos/Establishing,-developing,-operating-and-managing-multiple-integrated-call-centers-and-channels.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="paragraph mt-4">Establishing, developing, operating and managing multiple integrated call centers and channels (traditional digital and
                            community) for government agencies and agencies, the private sector and the third sector</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="assets/img/photos/Providing-outsourcing-services-and-outsourcing-the-operations-of-the-various-institutional-tasks.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="paragraph mt-4">Providing outsourcing services and outsourcing the operations of the various institutional tasks of the entities to
                            government agencies and agencies, the private sector and the third sector</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-lg-4">
                    <div class="card">
                        <img src="assets/img/photos/Providing-innovative-solutions-and-methodologies-to-support-operations-and-management.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="paragraph mt-4">Providing innovative solutions and methodologies to support operations and management by using it as an external
                            operator to provide services on behalf of the providing or supervising service or commercial organization or
                            organization</p>
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
                    <h4 class="">Rehabilitation & Training of Blind</h4>
                    <p class="paragraph mt-4 pe-lg-5">We in Saudi Hemam are always motivated by a passion for rehabilitation and training to unleash people of determination
                    and help them advance, discover strengths and reach high levels of performance. We think about the concerns of the Saudi
                    Hemam in the sense that investing in the human element is the greatest investment.</p>
                    <div class="mt-5">
                        <a class="readmore-btn" href="{{ route('qualification.training') }}">Read More</a>
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
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4">
                    <div class="card">
                        <img src="assets/img/news_img/latest-news1.png" class="card-img-top" alt="latest-img">
                        <div class="card-body">
                            <span>16 Dec 2021</span>
                            <h6 class="mt-3">There are many variations of passages of Lorem..</h6>
                            <p class="paragraph mt-3 p-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#"><em>Read More ></em></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4">
                    <div class="card">
                        <img src="assets/img/news_img/latest-news2.png" class="card-img-top" alt="latest-img">
                        <div class="card-body">
                            <span>16 Dec 2021</span>
                            <h6 class="mt-3">There are many variations of passages of Lorem..</h6>
                            <p class="paragraph mt-3 p-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#"><em>Read More ></em></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4">
                    <div class="card">
                        <img src="assets/img/news_img/latest-news3.png" class="card-img-top" alt="latest-img">
                        <div class="card-body">
                            <span>16 Dec 2021</span>
                            <h6 class="mt-3">There are many variations of passages of Lorem..</h6>
                            <p class="paragraph mt-3 p-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#"><em>Read More ></em></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-4">
                    <div class="card">
                        <img src="assets/img/news_img/latest-news4.png" class="card-img-top" alt="latest-img">
                        <div class="card-body">
                            <span>16 Dec 2021</span>
                            <h6 class="mt-3">There are many variations of passages of Lorem..</h6>
                            <p class="paragraph mt-3 p-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#"><em>Read More ></em></a>
                        </div>
                    </div>
                </div>
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











