@extends('layouts.app')

@section('content')

<header class="site-header">
    <div class="section-overlay"></div>

    @include('partials.job_details')
</header>


<section class="job-section section-padding pb-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12">
                <h2 class="job-title mb-0">Technical Lead</h2>

                <div class="job-thumb job-thumb-detail">
                    <div class="d-flex flex-wrap align-items-center border-bottom pt-lg-3 pt-2 pb-3 mb-4">
                        <p class="job-location mb-0">
                            <i class="custom-icon bi-geo-alt me-1"></i>
                            Kuala, Malaysia
                        </p>

                        <p class="job-date mb-0">
                            <i class="custom-icon bi-clock me-1"></i>
                            10 hours ago
                        </p>

                        <p class="job-price mb-0">
                            <i class="custom-icon bi-cash me-1"></i>
                            $20k
                        </p>

                        <div class="d-flex">
                            <p class="mb-0">
                                <a href="{{route('job.listings')}}" class="badge badge-level">Internship</a>
                            </p>

                            <p class="mb-0">
                                <a href="{{route('job.listings')}}" class="badge">Freelance</a>
                            </p>
                        </div>
                    </div>

                    <h4 class="mt-4 mb-2">Job Description</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <h5 class="mt-4 mb-3">The Role</h5>

                    <p class="mb-1"><strong>Benefits:</strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit</p>

                    <p><strong>Good salary:</strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                    <h5 class="mt-4 mb-3">Requirements</h5>

                    <ul>
                        <li>Strong knowledge in computing skill</li>

                        <li>Minimum 5 years of working experiences consectetur omeg</li>

                        <li>Excellent interpersonal skills</li>
                    </ul>

                    <div class="d-flex justify-content-center flex-wrap mt-5 border-top pt-4">
                        <a href="#" class="custom-btn btn mt-2">Apply now</a>

                        <a href="#" class="custom-btn custom-border-btn btn mt-2 ms-lg-4 ms-3">Save this job</a>

                        <div class="job-detail-share d-flex align-items-center">
                            <p class="mb-0 me-lg-4 me-3">Share:</p>

                            <a href="#" class="bi-facebook"></a>

                            <a href="#" class="bi-twitter mx-3"></a>

                            <a href="#" class="bi-share"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mt-5 mt-lg-0">
                <div class="job-thumb job-thumb-detail-box bg-white shadow-lg">
                    <div class="d-flex align-items-center">
                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mb-3">
                            <img src="images/logos/google.png" class="job-image me-3 img-fluid" alt="">

                            <p class="mb-0">Google</p>
                        </div>

                        <a href="#" class="bi-bookmark ms-auto me-2"></a>

                        <a href="#" class="bi-heart"></a>
                    </div>

                    <h6 class="mt-3 mb-2">About the Company</h6>

                    <p>Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>

                    <h6 class="mt-4 mb-3">Contact Information</h6>

                    <p class="mb-2">
                        <i class="custom-icon bi-globe me-1"></i>

                        <a href="#" class="site-footer-link">
                            www.jobbportal.com
                        </a>
                    </p>

                    <p class="mb-2">
                        <i class="custom-icon bi-telephone me-1"></i>

                        <a href="tel: 305-240-9671" class="site-footer-link">
                            305-240-9671
                        </a>
                    </p>

                    <p>
                        <i class="custom-icon bi-envelope me-1"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            info@jobportal.co
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="job-section section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mb-lg-4">
                <h3>Similar Jobs</h3>

                <p><strong>Over 10k opening jobs</strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
            </div>

            <div class="col-lg-4 col-12 d-flex ms-auto mb-5 mb-lg-4">
                <a href="{{route('job.listings')}}" class="custom-btn custom-border-btn btn ms-lg-auto">Browse Job Listings</a>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="{{route('job.details')}}">
                            <img src="images/jobs/it-professional-works-startup-project.jpg" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="{{route('job.listings')}}" class="badge badge-level">Internship</a>
                            </p>

                            <p class="mb-0">
                                <a href="{{route('job.listings')}}" class="badge">Freelance</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="{{route('job.details')}}" class="job-title-link">Technical Lead</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/salesforce.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Salesforce</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Kuala, Malaysia
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                10 hours ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $50k
                            </p>

                            <a href="{{route('job.details')}}" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="{{route('job.details')}}">
                            <img src="images/jobs/marketing-assistant.jpg" class="job-image img-fluid" alt="marketing assistant">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="{{route('job.listings')}}" class="badge badge-level">Senior</a>
                            </p>

                            <p class="mb-0">
                                <a href="{{route('job.listings')}}" class="badge">Part Time</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="{{route('job.details')}}" class="job-title-link">Marketing Assistant</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/spotify.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Spotify</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                California, USA
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                8 days ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $20k
                            </p>

                            <a href="{{route('job.details')}}" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="{{route('job.details')}}">
                            <img src="images/jobs/coding-man.jpg" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="{{route('job.listings')}}" class="badge badge-level">Junior</a>
                            </p>

                            <p class="mb-0">
                                <a href="{{route('job.listings')}}" class="badge">Contract</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="{{route('job.details')}}" class="job-title-link">Programmer</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/twitter.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Twiter</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                California, USA
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                23 hours ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $68k
                            </p>

                            <a href="{{route('job.details')}}" class="custom-btn btn ms-auto">Apply now</a>
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

                <p class="text-white">Gotto Job is a free HTML CSS template for job hunting related websites. This layout is based on the famous Bootstrap 5 CSS framework. Thank you for visiting Tooplate website.</p>
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