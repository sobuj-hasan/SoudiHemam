@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.app')
@section('title', 'Business Scope')
@section('content')
    <!-- SERVICE BANNER START -->
    <section class="banner business-scope-banner">
        <div class="overlay">
            <div class="container py-lg-5">
                <div class="row py-5">
                    <div class="col-12 text-center">
                        <h4>@lang('home.our_business_scope')</h4>
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
                            @if ($locale == 'ar')
                                <h4><strong><span>الأنشطة </span></strong>  والقطاعات التي <strong><span> يخدمها</span></strong> بواسطة <strong><span> الهمام السعودي</span></strong></h4>
                            @else
                                <h4><strong><span>THE ACTIVITIES</span></strong> AND SECTORS <strong><span>SERVED</span></strong> BY THE <strong><span>SAUDI HEMAM</span></strong></h4>
                            @endif
                            <div class="lets-btn mt-5 mb-2">
                                <a href="{{ route('service') }}#service-part">@lang('home.lets_check')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <p class="paragraph p-2 p-lg-4 mt-4">@lang('home.business_scope_text')</p>
                    <div class="text-box">
                        <div class="row d-flex">
                            <div class="left">
                                <!-- No any text -->
                            </div>
                            <div class="right">
                                <h1 style="font-size: 60px; height: 80px;" class="fw-bold"></h1>
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
                    <img class="w-100" src="{{ asset('assets/img/photos/Insurance-and-banking-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.insurance_banking_sector')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/Health-Sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.health_sector')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/logistic-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.logistic_sector')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/tourism-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.tourism_sector')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/mining-secctor.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.mining_sector')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/hospitality-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.hospitality_sector')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/construction-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.construction_sector')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/research-and-development.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.research_and_development')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/industrial-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.industrial_sector')</h5>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 text-center">
                    <img class="w-100" src="{{ asset('assets/img/photos/Agriculture-sector.png') }}" alt="business-scope">
                    <h5 class="mt-2 mb-4">@lang('home.agricultural_sector')</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- BUSINESS SCOPE PART END -->

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





