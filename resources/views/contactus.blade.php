@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <!-- CONTACT US PART START -->
    <div class="contact-us py-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 mb-3">
                    <form method="GET" action="{{ route('contact.message') }}">
                        @csrf
                        <div class="contact-form">
                            <h5 class="mb-4">@lang('home.message_us')</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-5">
                                        <input type="text" class="form-control input-form" placeholder="@lang('home.type_your_name')" name="name">
                                        @error('name')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-5">
                                        <input type="text" class="form-control input-form" placeholder="@lang('home.enter_your_email')" name="email">
                                        @error('email')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-5">
                                        <input type="text" class="form-control input-form" placeholder="@lang('home.your_phone')" name="phone">
                                        @error('phone')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-5">
                                        <input type="text" class="form-control input-form" placeholder="@lang('home.your_address')" name="address">
                                        @error('address')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <textarea style="height: 120px;" type="email" class="form-control" placeholder="@lang('home.write_your_text')" name="message"></textarea>
                                        @error('message')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="btn text-start">
                                    <button type="submit" class="submit-btn">@lang('home.send_message')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <div class="contact-info">
                        <h5>@lang('home.contact_info')</h5>
                        <hr class="info">
                        <div class="info d-flex mt-4">
                            <i class="fas fa-map-marker-alt mt-1 me-2"></i>
                            <p>@lang('home.office_address')</p>
                        </div>
                        <div class="info d-flex mt-2">
                            <i class="fas fa-phone-alt mt-1 me-2"></i>
                            <p>+966 55 117 5959</p>
                        </div>
                        <div class="info d-flex mt-2 mb-3">
                            <i class="far fa-envelope mt-1 me-2"></i>
                            <p>info@saudihemam.com</p>
                        </div>
                        <h5>@lang('home.social_connect')</h5>
                        <hr class="info">
                        <div class="social">
                            <ul class="d-flex">
                                <li class="ms-1 me-1">
                                    <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                </li>
                                <li class="ms-1 me-1">
                                    <a href="#"> <i class="fab fa-twitter"></i> </a>
                                </li>
                                <li class="ms-1 me-1">
                                    <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                </li>
                                <li class="ms-1 me-1">
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                </li>
                                <li class="ms-1 me-1">
                                    <a href="#"> <i class="fab fa-pinterest-p"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT US PART END -->

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








