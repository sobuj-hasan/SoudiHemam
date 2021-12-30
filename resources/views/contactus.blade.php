@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <!-- CONTACT US PART START -->
    <div class="contact-us py-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                    <form method="GET" action="{{ route('contact.message') }}">
                        @csrf
                        <div class="contact-form">
                            <h5 class="mb-4">Massage Us</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-5">
                                        <input type="text" class="form-control input-form" placeholder="Type Your name" name="name">
                                        @error('name')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-5">
                                        <input type="email" class="form-control input-form" placeholder="Enter Your Email" name="email">
                                        @error('email')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-5">
                                        <input type="text" class="form-control input-form" placeholder="Your Phone" name="phone">
                                        @error('phone')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-5">
                                        <input type="text" class="form-control input-form" placeholder="Your Address" name="address">
                                        @error('address')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <textarea style="height: 120px;" type="email" class="form-control" placeholder="Write your text ..." name="message"></textarea>
                                        @error('message')
                                            <span class="text-danger fw-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="btn text-start">
                                    <button type="submit" class="submit-btn">Send Massage</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <div class="contact-info">
                        <h5>Contact info</h5>
                        <hr class="info">
                        <div class="info d-flex mt-4">
                            <i class="fas fa-map-marker-alt mt-1 me-2"></i>
                            <p>Riadah Incubators Startup Studio And corporate factory - Khaldiya Towers - 4th Tower - Faisal Bin Turki Road - Office
                            No. 6 - Floor 13 - Riyadh</p>
                        </div>
                        <div class="info d-flex mt-2">
                            <i class="fas fa-phone-alt mt-1 me-2"></i>
                            <p>+966 55 117 5959</p>
                        </div>
                        <div class="info d-flex mt-2 mb-3">
                            <i class="far fa-envelope mt-1 me-2"></i>
                            <p>info@saudihemam.com</p>
                        </div>
                        <h5>Social Connect</h5>
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







