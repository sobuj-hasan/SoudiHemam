<!DOCTYPE html>
<html lang="en">
<!-- <html lang="ar" dir="rtl"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | SaudiHemam</title>
    <!--    GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--    BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--    FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- Notify css --}}
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />
    <!--    SLICK SLIDER-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!--    MAIN CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="css/arabic.css"> -->
</head>

<body>

    <!--    HEADER SECTION-->
    <header class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <div class="logo d-flex justify-content-between align-items-center">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                        </a>
                        <i class="fa fa-bars d-md-none" onClick="mobileClick()" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-8 d-none d-md-block">
                    <div class="menubar">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('service') }}">Services</a></li>
                            <li><a href="{{ route('qualification.training') }}">Training </a></li>
                            <li><a href="{{ route('features.capabilities') }}">Features</a></li>
                            <li><a href="{{ route('contactus') }}">Contact</a></li>
                            @if (Auth::guest())
                                <li>
                                    <a href="{{ route('login') }}" class="login-menu">Sign Up</a>
                                </li>
                            @else
                                <li>
                                    @if (Auth::user()->role == 1)
                                        <a href="{{ route('admin.index') }}">
                                            <img style="border: 1px solid #a6adce;" width="35px" height="35px" class="rounded-circle" src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="user">
                                        </a>
                                    @elseif(Auth::user()->role == 2)
                                        <a href="{{ route('dashboard.index') }}">
                                            <img style="border: 1px solid #a6adce;" width="35px" height="35px" class="rounded-circle" src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="user">
                                        </a>
                                    @endif
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--    HEADER SECTION END-->

    <!-- MOBILE MENU-->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="mobile-logo mb-5">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times" onClick="mobileClick()"></i>
            </div>

            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('index') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Home
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('business.scope') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            About Us
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('service') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Services
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('features.capabilities') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Features
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('contactus') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Contact
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a class="login-menu" href="{{ route('login') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Sign Up
                        </button>
                    </a>
                </h2>
            </div>
        </div>

    </div>
    <div id="mobileOverlay" class="mobile-overlay" onClick="mobileClick()"></div>
    <!--   END MOBILE MENU-->

    @yield('content')

    <!--    FOOTER SECTION-->
    <footer class="footer-part pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="left pt-4">
                        <p>About Us</p>
                        <hr class="footer">
                        <p class="paragraph pt-3 pb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <form method="GET" action="{{ route('subscribe') }}">
                            @csrf
                            <div class="input-group mb-5">
                                <input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" name="email" required>
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">&nbsp;&nbsp; <i class="fas fa-paper-plane"></i> &nbsp;&nbsp;</button>
                            </div>
                            @error('email')
                                <span class="text-danger fw-bolder">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="middle text-center">
                        <img class="pt-3" src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                        <p class="paragraph pt-4 pb-3">We are able to do work and can be part of the prisoner change</p>
                        <h6>Connect With Us</h6>
                        <div class="footer-manu d-flex justify-content-center mt-4 mb-4">
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
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="right pt-4">
                        <p class="paragraph">Contact </p>
                        <hr class="footer">
                        <div class="footer-link">
                            <ul>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('business.scope') }}">Our Business Scope</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('service') }}">Business Services</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('our.partner') }}">Our Partner area</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('login') }}">Account</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('contactus') }}">Contact Us</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('index') }}#latest-news-part">News & Media</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--    FOOTER SECTION END-->
    <!-- COPYRIGHT START -->
    <section class="copyright-part py-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 pt-4">
                    <p>@copyright-2021 | All Rights Reserved at Saudihemam</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 pt-3">
                    <ul class="d-flex justify-content-end">
                        <li class="ms-3 me-2">
                            <a href="#">Terms & condition</a>
                        </li>
                        <li class="ms-3 me-2">
                            <a href="#">Business Policy</a>
                        </li>
                        <li class="ms-3 me-2">
                            <a href="#">Help</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- COPYRIGHT END -->

    <!--    JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <!--    SLICK SLIDER-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!--    BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Toastr Scripts render -->
    {!! Notify::message() !!}

</body>

</html>







