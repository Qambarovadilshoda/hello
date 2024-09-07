@extends('layouts.app')

@section('content')


<header class="site-header">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h1 class="text-white">About Gotto</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
</header>


<section class="about-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12">
                <div class="about-info-text">
                    <h2 class="mb-0">Introducing Gotto Job</h2>

                    <h4 class="mb-2">Get hired. Get your new job</h4>

                    <p>Thank you for visiting our Gotto Job website. Are you looking for best HTML templates? Please visit Tooplate website to download free templates.</p>

                    <div class="d-flex align-items-center mt-4">
                        <a href="#services-section" class="custom-btn custom-border-btn btn me-4">Explore Services</a>

                        <a href="{{route('contact')}}" class="custom-link smoothscroll">Contact</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                <div class="about-image-wrap">
                    <img src="images/horizontal-shot-happy-mixed-race-females.jpg" class="about-image about-image-border-radius img-fluid" alt="">

                    <div class="about-info d-flex">
                        <h4 class="text-white mb-0 me-2">20</h4>

                        <p class="text-white mb-0">years of experience</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-section section-padding" id="services-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">We deliver best services</h2>
            </div>

            <div class="services-block-wrap col-lg-4 col-md-6 col-12">
                <div class="services-block">
                    <div class="services-block-title-wrap">
                        <i class="services-block-icon bi-window"></i>

                        <h4 class="services-block-title">Website design</h4>
                    </div>

                    <div class="services-block-body">
                        <p>Tooplate provides a variety of free Bootstrap 5 website templates for your commercial or business websites.</p>
                    </div>
                </div>
            </div>

            <div class="services-block-wrap col-lg-4 col-md-6 col-12 my-4 my-lg-0 my-md-0">
                <div class="services-block">
                    <div class="services-block-title-wrap">
                        <i class="services-block-icon bi-twitch"></i>

                        <h4 class="services-block-title">Marketing</h4>
                    </div>

                    <div class="services-block-body">
                        <p>You can download any free template for your website. Please tell your friends about Tooplate.</p>
                    </div>
                </div>
            </div>

            <div class="services-block-wrap col-lg-4 col-md-6 col-12">
                <div class="services-block">
                    <div class="services-block-title-wrap">
                        <i class="services-block-icon bi-play-circle-fill"></i>

                        <h4 class="services-block-title">Video</h4>
                    </div>

                    <div class="services-block-body">
                        <p>You are not allowed to redistribute the template ZIP file on any other template collection website.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="reviews-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h2 class="text-center mb-5">Happy customers</h2>

                <div class="owl-carousel owl-theme reviews-carousel">
                    <div class="reviews-thumb">

                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Susan L</strong>
                                    <small>Product Manager</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/medium-shot-smiley-senior-man.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Jack</strong>
                                    <small>Technical Lead</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">

                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/portrait-beautiful-young-woman-studying-table-with-laptop-computer-notebook-home-studying-online-e-learning-system.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Haley</strong>
                                    <small>Sales & Marketing</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/blond-man-happy-expression.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Jackson</strong>
                                    <small>Dev Ops</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/university-study-abroad-lifestyle-concept-satisfied-happy-asian-male-student-glasses-shirt-showing-thumbs-up-approval-likes-studying-college-holding-laptop-backpack.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Kevin</strong>
                                    <small>Internship</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="cta-section">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10">
                <h2 class="text-white mb-2">Over 10k opening jobs</h2>

                <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
            </div>

            <div class="col-lg-4 col-12 ms-auto">
                <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                    <a href="#" class="custom-btn custom-border-btn btn me-4">Create an account</a>

                    <a href="#" class="custom-link">Post a job</a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection