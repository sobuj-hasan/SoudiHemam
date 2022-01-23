@extends('layouts.app')
@section('title', 'Features & Capabilities')
@section('content')
    <!-- SERVICE BANNER START -->
    <section class="banner">
        <div class="overlay">
            <div class="container py-lg-5">
                <div class="row py-5">
                    <div class="col-12 text-center">
                        <h4>@lang('home.features_and_possibilities')</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE BANNER END -->

    <!-- FEATURES AND CAPABILITIES STAR -->
    <section class="features-capabilities py-5">
        <div class="container">
            <div class="row py-lg-5 justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text1')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text2')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text3')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text4')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text5')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text6')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text7')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text8')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text9')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text10')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text11')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text12')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text13')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text14')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text15')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text16')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text17')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text18')</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="feature-card">
                        <p class="paragraph">@lang('home.features_and_possibilities_text19')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES AND CAPABILITIES END -->

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







