@extends('layouts.app')
@section('title', 'Qualification Training')
@section('content')
    <!-- OUR PARTNER BANNER START -->
    <section class="banner" style="background-image: url({{ asset('assets/img/photos/qualification-training-banner.png') }});">
        <div class="overlay">
            <div class="container py-lg-5">
                <div class="row py-5">
                    <div class="col-12 text-center">
                        <h4>Qualification and Training</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PARTNER BANNER END -->

    <!-- QUALIFICATION AND TRAINING START -->
    <section class="qualification py-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <img class="img-fluid" src="{{ asset('assets/img/photos/qualification-img1.png') }}" alt="qualification-img">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                    <p class="paragraph mt-5">The motto of our Saudi Hemam is</p>
                    <h4>“ Saudi Hemam is like the Tuwaiq Mountain “</h4>
                    <div class="qualification-two mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                                <img src="{{ asset('assets/img/photos/qualification-img2.png') }}" alt="qualification-img">
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12">
                                <p class="paragraph mt-4">We in Saudi Hemam are always motivated by a passion for rehabilitation and training to unleash people of determination
                                and help them advance, discover strengths and reach high levels of performance. We think about the concerns of the Saudi
                                Hemam in the sense that investing in the human element is the greatest investment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- QUALIFICATION AND TRAINING END -->

    <!-- REHABILITATION PART START -->
    <section class="rehabilitation-part py-5">
        <div class="container">
            <h6>Rehabilitation and training of blind and visually impaired</h6>
            <hr class="rehabilitation">
            <div class="row pb-4">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-3">
                    <div class="card">
                        <p class="paragraph">Learning the computer and the use of the mobile phone through a speaking program</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-3">
                    <div class="card">
                        <p class="paragraph">Qualification to use the speaking program, whether on a computer or mobile, in a professional manner</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-3">
                    <div class="card">
                        <p class="paragraph">Full use of Windows and Microsoft Office programs</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-3">
                    <div class="card">
                        <p class="paragraph">Proficiency in the Internet and e-mail</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- REHABILITATION PART END -->

    <!-- OUR COURSES PART START -->
    <section class="courses-part py-5">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-5">
                    <h6>Videography and montage course for the deaf and dumb</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">This course is carefully designed for beginners in the field of video shooting and montage to provide them with the
                    basic skills of video shooting, as well as learn editing skills using Adobe Premiere (Pr) program in order to qualify
                    them to enter the labor market as certified videographers and montage</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-5">
                    <h6>Digital marketing</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">We present through it a presentation of all the skills, concepts and modern digital marketing, starting with paid
                    advertisements on social media programs, Google AdWords and YouTube, and passing through how to reach the target
                    customers to achieve the highest possible return on mROI advertising, and ending with advertising campaigns for
                    smartphone applications and ways to follow up and continuously improve their results and statistics</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h6>Motion graphics course</h6>
                    <hr class="rehabilitation">
                    <p class="paragraph mt-4">It focuses on how to convert data and information into animated visual images using the Adobe After Effects (Ae) program
                    as a basic program and using Adobe Illustrator as an assistant program to obtain an integrated animated video with sound
                    and image. into a displayable final product</p>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR COURSES PART END -->

    <!-- HOW TO CREATE WEBSITE START -->
    <section class="create-website-part">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="{{ asset('assets/img/photos/mobile-apps.png') }}" alt="event">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <h4 class="mt-3 mb-5">How to create a website</h4>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">Blogging (a free way to profit).</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">Types of hosting and the difference between free and paid hosting</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">Building a website using WordPress</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">Website settings and suitability for search engines</p>
                    </div>
                    <div class="check-item d-flex my-4">
                        <div class="check">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="ps-4 pe-lg-5 mt-3">How to profit from your website</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOW TO CREATE WEBSITE END -->

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

