@extends('layouts.app')
@section('title', 'Our Partner')
@section('content')
    <!-- OUR PARTNER BANNER START -->
    <section class="banner" style="background-image: url({{ asset('assets/img/photos/our-partner-banner.png') }});">
        <div class="overlay">
            <div class="container py-lg-5">
                <div class="row py-5">
                    <div class="col-12 text-center">
                        <h4>Our Partners</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PARTNER BANNER END -->

    <!-- OUR BUSENESS PARTNER START -->
    <section class="who-we-are my-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="{{ asset('assets/img/photos/our-partners.png') }}" alt="event">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <h4 class="mt-2">Our Business Partners</h4>
                    <p class="paragraph mt-4 pe-lg-5">It implements giant projects for many companies, as the services it provides to its clients include internal and
                    external procedures for operations using multiple channels and across several commercial activities. It provides its
                    customers with integrated call center solutions and deals with all types of communications and call center interactions
                    to provide processing services and deal with all inquiries, requests, activations, complaints, telemarketing, surveys
                    and others.<br><br>
                    In addition, the company undertakes all operational support activities for these companies, including training
                    activities, knowledge management, performance quality control, advisory services, and the development of standards and
                    procedures for improving operations.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR BUSENESS PARTNER END -->

    <!-- OUR PARTNER BRAND START -->
    <section class="partner-brand py-5">
        <div class="container text-center">
            <h4 class="pb-5">Our Partners</h4>
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand1.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand2.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand3.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand4.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand5.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand6.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand7.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand8.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand9.png') }}" alt="brand-img">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 pb-4">
                    <div class="brand">
                        <img src="{{ asset('assets/img/brands/brand10.png') }}" alt="brand-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PARTNER BRAND END -->

    <!-- SUBSCRIBER PART START -->
    <section class="get-notificaiton my-5">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1">
                    <h3 class="mt-1">Get Notification</h3>
                    <p class="paragraph">Subscribe here to get update notification in your mail</p>
                </div>
                @include('app_components.subscriber')
            </div>
        </div>
    </section>
    <!-- SUBSCRIBER PART END -->
@endsection

