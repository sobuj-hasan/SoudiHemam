@extends('layouts.app')
@section('title', 'Our Partner')
@section('content')
    <!-- OUR PARTNER BANNER START -->
    <section class="banner" style="background-image: url({{ asset('assets/img/photos/our-partner-banner.png') }});">
        <div class="overlay">
            <div class="container py-lg-5">
                <div class="row py-5">
                    <div class="col-12 text-center">
                        <h4>@lang('home.our_partner')</h4>
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
                    <h4 class="mt-2">@lang('home.our_business_partners')</h4>
                    <p class="paragraph mt-4 pe-lg-5">@lang('home.our_business_partners_article')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR BUSENESS PARTNER END -->

    <!-- OUR PARTNER BRAND START -->
    <section class="partner-brand py-5">
        <div class="container text-center">
            <h4 class="pb-5">@lang('home.our_partner')</h4>
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
                    <h3 class="mt-1">@lang('home.get_notification')</h3>
                    <p class="paragraph">@lang('home.get_update_notificatin')</p>
                </div>
                @include('app_components.subscriber')
            </div>
        </div>
    </section>
    <!-- SUBSCRIBER PART END -->
@endsection

