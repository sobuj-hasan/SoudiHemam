@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.app')
@section('title', 'Our Services')
@section('content')
    <!-- SERVICE BANNER START -->
    <section class="banner">
        <div class="overlay">
            <div class="container py-lg-5">
                <div class="row py-5">
                    <div class="col-12 text-center">
                        <h4>@lang('home.our_services')</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE BANNER END -->

    <!-- UNIQ SERVICE PART START -->
    <section class="uniq-service-part py-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-border">
                            @if ($locale == 'ar')
                                <h4><strong>السعوديين </strong> <span>همم </span> يقدم خدمة فريدة من نوعها</h4>
                            @else
                                <h4><strong>SAUDI</strong> <span>HEMAM</span> PROVIDE A <strong>UNIQUE</strong> SERVICE</h4>
                            @endif
                            <div class="lets-btn mt-5 mb-2">
                                <a class="hemam-btn" href="#">@lang('home.lets_check')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <p class="paragraph p-2 p-lg-4 mt-4">@lang('home.our_services_text')</p>
                    <div class="text-box">
                        <div class="row d-flex">
                            <div class="left">
                                <h1>01</h1>
                            </div>
                            <div class="right">
                                <p class="paragraph">@lang('home.our_services_text2')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- UNIQ SERVICE PART END -->

    <!-- OUR SERVICES START -->
    <section class="service-part py-5">
        <div class="container py-lg-4 text-center">
            <h4 class="mb-5">@lang('home.services_area')</h4>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service1.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service1')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service2.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service2')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service3.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service3')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service4.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service5')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service1.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service5')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service1.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service6')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service5.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service7')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service6.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service8')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service7.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service9')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service6.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service10')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service8.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service11') </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service1.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service12')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service1.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service13')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="service">
                        <img class="mt-4" src="{{ asset('assets/img/icon/service6.png') }}" alt="service-img">
                        <p class="paragraph p-4">@lang('home.service14')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR SERVICES END -->

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
