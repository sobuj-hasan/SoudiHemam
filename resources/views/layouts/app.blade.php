@php
    $locale = app()->getLocale();
@endphp
<!DOCTYPE html>
@if ($locale == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="auto">
@endif
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | SaudiHemam</title>
    <!--    GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--    BOOSTRAP-->
    @if ($locale == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif
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
    @if ($locale == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/arabic.css') }}">
    @endif
</head>

<body>
    {{-- internal css for arabic css --}}
    @if ($locale == 'ar')
        <style>
            .menubar ul {
                text-align: left;
            }
            header {
                background: linear-gradient(to right, #0083b0, #389bc1, #59b2d2, #79cbe3, #98e3f4);
            }
        </style>
        @else
        <style>
            .menubar ul {
                text-align: right;
            }
        </style>
    @endif
    <!--    HEADER SECTION-->
    <header class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                    <div class="logo d-flex justify-content-between align-items-center">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                        </a>
                        <i class="fa fa-bars d-md-none" onClick="mobileClick()" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-9 d-none d-md-block">
                    <div class="menubar">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('home.home')</a></li>
                            <li><a href="{{ route('business.scope') }}">@lang('home.aboutus')</a></li>
                            <li><a href="{{ route('service') }}">@lang('home.service')</a></li>
                            <li><a href="{{ route('qualification.training') }}">@lang('home.training')</a></li>
                            <li><a href="{{ route('contactus') }}">@lang('home.contactus')</a></li>
                            @if ($locale == 'ar')
                                <li>
                                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}" class=""> @lang('home.english') </a>
                                </li>
                            @else
                                <li>
                                    <a class="fw-bold" href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}"> @lang('home.arabic') </a>
                                </li>
                            @endif
                            @if (Auth::guest())
                                <li>
                                    <a href="{{ route('login') }}" class="login-menu">@lang('home.signup')</a>
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
            @if ($locale == 'ar')
                <div class="accordion-item custom">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <a class="login-menu" href="{{ route('login') }}">
                            <button class="accordion-button custom collapsed none" type="button">
                                <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}" class=""> @lang('home.english') </a>
                            </button>
                        </a>
                    </h2>
                </div>
            @else
                <div class="accordion-item custom">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <a class="login-menu" href="{{ route('login') }}">
                            <button class="accordion-button custom collapsed none" type="button">
                                <a class="fw-bold" href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}"> @lang('home.arabic') </a>
                            </button>
                        </a>
                    </h2>
                </div>
            @endif
            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('index') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.home')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('business.scope') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.aboutus')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('service') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.service')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('features.capabilities') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.features')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('contactus') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.contactus')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a class="login-menu" href="{{ route('login') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.signup')
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
                        <p>@lang('home.aboutus')</p>
                        <hr class="footer">
                        <p class="paragraph pt-3 pb-4">@lang('home.footer_text')</p>
                        <form method="GET" action="{{ route('subscribe') }}">
                            @csrf
                            <div class="input-group mb-5">
                                <input type="email" class="form-control" placeholder="@lang('home.email_address')" value="{{ old('email') }}" name="email" required>
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
                        <p class="paragraph pt-4 pb-3">@lang('home.we_are_able_to_work')</p>
                        <h6>@lang('home.connect_with_us')</h6>
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
                        <p class="paragraph">@lang('home.contactus')</p>
                        <hr class="footer">
                        <div class="footer-link">
                            <ul>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('business.scope') }}">@lang('home.our_business_scope')</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('service') }}">@lang('home.business_services')</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('our.partner') }}">@lang('home.our_partner_area')</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('login') }}">@lang('home.account')</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('contactus') }}">@lang('home.contactus')</a>
                                </li>
                                <li class="my-3 ms-2">
                                    <a href="{{ route('features.capabilities') }}">@lang('home.features_and_possibilities')</a>
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
    <section class="copyright-part py-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 pt-4">
                    <p>@lang('home.copyright')</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 pt-3">
                    <ul class="d-flex justify-content-end">
                        <li class="ms-3 me-2">
                            <a href="">@lang('home.terms')</a>
                        </li>
                        <li class="ms-3 me-2">
                            <a href="">@lang('home.privacy_policy')</a>
                        </li>
                        <li class="ms-3 me-2">
                            <a href="">@lang('home.help_support')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- COPYRIGHT END -->

    <!--    JQUERY-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <!--    SLICK SLIDER-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!--    BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- COUNTER UP JS --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>
    <script src='https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js'></script>
    {{-- main js --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- Counter UP script js --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Toastr Scripts render -->
    {!! Notify::message() !!}

    <script>
        // Testimonial slider Autoplay
        $('.testimonial-slide').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            @if ($locale == 'ar')
                rtl: true,
            @else
                rtl: false,
            @endif
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            arrows: false,
            nextArrow: $('.nxt'),
            prevArrow: $('.prv'),
        });
    </script>

</body>

</html>







