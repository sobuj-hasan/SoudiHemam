@extends('layouts.app')
@section('title', 'Business Scope')
@section('content')
    <!-- SERVICE BANNER START -->
    <section class="banner business-scope-banner">
        <div class="overlay">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-12 text-center">
                        <h4>Our Business Scope</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE BANNER END -->

    <!-- UNIQ SERVICE PART START -->
    <section class="uniq-service-part business-page py-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-border">
                            <h4><strong><span>THE ACTIVITIES</span></strong> AND SECTORS <strong><span>SERVED</span></strong> BY SAUDI <strong><span>HEMAM</span></strong></h4>
                            <div class="lets-btn mt-5 mb-2">
                                <a href="" class="hemam-btn">Let's Check</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <p class="paragraph p-2 p-lg-4 mt-4">Saudi Hemam is looking forward to provide reliable services and from the aspirations of the public, private and third
                    sectors in partnership with many partners, based on the needs of customers, as they target the Saudi Hemam in
                    partnership with many parties</p>
                    <div class="text-box">
                        <div class="row d-flex">
                            <div class="left">
                                <!-- No any text -->
                            </div>
                            <div class="right">
                                <h1 style="font-size: 60px;" class="fw-bold">02</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- UNIQ SERVICE PART END -->

    <!-- BUSINESS SCOPE PART START -->
    <section class="business-scope mt-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/Insurance-and-banking-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Insurance and banking sector</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/Health-Sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Health Sector</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/logistic-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Logistic Sector</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/tourism-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Tourism Sector</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/mining-secctor.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Mining Sector</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/hospitality-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Hospitality Sector</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/construction-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Construction Sector</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/research-and-development.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Research and Development</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/industrial-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Inductrial Sector</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img src="{{ asset('assets/img/photos/Agriculture-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">Agricultural Sector</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- BUSINESS SCOPE PART END -->

    <!-- SUBSCRIBER PART START -->
    <section class="subscribe-part my-5">
        <div class="container">
            <div class="row py-lg-4">
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





