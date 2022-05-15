<?php
    $settings = DB::table('settings')->first();
    $partners =DB::table('partners')->get();
    $projects =DB::table('projects')->get();
    $works=DB::table('works')->get();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="CODETANKTHEMES" />

    <!-- Site Title -->
    <title>CODETANK - Responsive Bootstrap 5 Landing Page Template</title>
    <!-- Site favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Light-box -->
    <link rel="stylesheet" href="css/mklb.css" type="text/css" />

    <!-- Swiper js -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" type="text/css" />

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60">
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="navbar-sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="index.html">
                <img src="{{asset('uploads/'.$settings->logo)}}" style="height: 100px;" alt=""/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimonial" class="nav-link">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a href="#team" class="nav-link">Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- home-agency start -->
    <section class="hero-agency" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <h1 class="hero-title fw-bold mb-4">{{$settings->home_title}}</h1>
                    <p class="text-muted mb-5 fs-18">{{$settings->home_text}}</p>
                    <div class="d-flex align-items-center mb-4 mb-lg-0">
                        <a href="javascript:void(0);" class="btn btn-gradient-success rounded-pill me-4">More About Us <i class="mdi mdi-chevron-right ms-1"></i></a>


                        <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                <div class="modal-content video-modal">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <video id="VisaChipCardVideo" class="w-100" controls>
                                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" />
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/agency/hero-img.png" alt="" class="img-fluid" />
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <ul class="list-inline text-center mt-5 pt-5">
                        @foreach($partners as $partner)
                        <li class="list-inline-item my-4 mx-3 mx-xl-4 px-xl-2">
                            <img src="{{asset('uploads/'.$partner->image)}}" alt="" class="" height="100" />
                        </li>
                        @endforeach
                        <!-- <li class="list-inline-item my-4 mx-3 mx-xl-4 px-xl-2">
                            <img src="images/agency/brand-logo/envato.png" alt="" class="" height="38" />
                        </li>
                        <li class="list-inline-item my-4 mx-3 mx-xl-4 px-xl-2">
                            <img src="images/agency/brand-logo/insta.png" alt="" class="" height="38" />
                        </li>
                        <li class="list-inline-item my-4 mx-3 mx-xl-4 px-xl-2">
                            <img src="images/agency/brand-logo/bootstrap.png" alt="" class="" height="38" />
                        </li>
                        <li class="list-inline-item my-4 mx-3 mx-xl-4 px-xl-2">
                            <img src="images/agency/brand-logo/jquery.png" alt="" class="" height="38" />
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- home-agency end -->

    <!-- About start -->
    <section class="section bg-light" id="about">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h6 class="subtitle">What We Do</h6>
                    <h2 class="title">The things motivates me is commen form of motivation.</h2>
                </div>
            </div>

            <div class="row">
                @foreach($works as $work)
                <div class="col-md-4">
                    <div class="mt-5">
                        <div class="about-icon ms-3">
                            <img src="{{asset('uploads/'.$work->image)}}" alt="" class="img-fluid" />
                        </div>
                        <h5 class="fs-22 mt-4 pt-3 mb-3">{{$work->title}}</h5>
                        <p class="text-muted">{{$work->text}}</p>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-md-4">
                    <div class="mt-5">
                        <div class="about-icon ms-3">
                            <img src="images/agency/icon/2.png" alt="" class="img-fluid" />
                        </div>
                        <h5 class="fs-22 mt-4 pt-3 mb-3">Design & Development</h5>
                        <p class="text-muted">Et harum quidem as rerum facilis us est et distinctio nam libero temp soluta nobis esteligendi optio.</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-5">
                        <div class="about-icon ms-3">
                            <img src="images/agency/icon/3.png" alt="" class="img-fluid" />
                        </div>
                        <h5 class="fs-22 mt-4 pt-3 mb-3">Management & Marketing</h5>
                        <p class="text-muted">Et harum quidem as rerum facilis us est et distinctio nam libero temp soluta nobis esteligendi optio.</p>

                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- Projects start -->
    <section class="section" id="projects">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h6 class="subtitle">Our Projects</h6>
                    <h2 class="title">A great design brings thousands of great results.</h2>
                </div>
            </div>

            <!-- Gallary -->

            <div class="row justify-content-center">
                @foreach($projects as $project)
                <div class="col-md-6 col-xl-4 filter-box branding designing development">
                    <div class="card item-box rounded mt-4 overflow-hidden">
                        <div class="position-relative">
                            <img class="item-container img-fluid" src="{{('uploads/'.$project->image)}}" alt="1" />
                            <div class="item-mask mfp-image" data-src="{{('uploads/'.$project->image)}}" data-gallery="myGal"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="fs-18 mb-1">{{$project->name}}</h5>
                            <a target="_blank" href="{{$project->link}}" class="text-muted mb-0"> Link </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Projects end -->

    <!-- Testimonials start -->
    <section class="section testi-bg" id="testimonial">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h6 class="subtitle text-dark">Testimonial</h6>
                    <h2 class="title">Client Feedback</h2>
                    <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut consequuntur magni dolores.</p>
                </div>
            </div>

            <div class="row testi-row">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="clients-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card shadow-lg">
                                    <div class="card-body p-4">
                                        <img src="images/users/user-1.jpg" alt="" class="rounded-circle shadow-lg" width="60" />
                                        <h5 class="my-4 pt-2 fs-18 lh-base">" Excellent support for a tricky issue related to our customization of the template."</h5>

                                        <h6 class="mb-0">Brightlight books</h6>
                                        <p class="mb-0">Ubold Customer</p>
                                        <div class="position-absolute bottom-0 end-0">
                                            <img src="images/agency/quote.png" alt="" height="45" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-lg">
                                    <div class="card-body p-4">
                                        <img src="images/users/user-2.jpg" alt="" class="rounded-circle shadow-lg" width="60" />
                                        <h5 class="my-4 pt-2 fs-18 lh-base">" This kit provides many options which I can you use everyday. It's great work.”</h5>

                                        <h6 class="mb-0">Echineo</h6>
                                        <p class="mb-0">Ubold Customer</p>
                                        <div class="position-absolute bottom-0 end-0">
                                            <img src="images/agency/quote.png" alt="" height="45" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-lg">
                                    <div class="card-body p-4">
                                        <img src="images/users/user-3.jpg" alt="" class="rounded-circle shadow-lg" width="60" />
                                        <h5 class="my-4 pt-2 fs-18 lh-base">" This is a very extensive web app kit that can serve all kinds of purposes."</h5>

                                        <h6 class="mb-0">Aebra Schultz</h6>
                                        <p class="mb-0">Designer</p>
                                        <div class="position-absolute bottom-0 end-0">
                                            <img src="images/agency/quote.png" alt="" height="45" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials end -->

    <!-- counter start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row" id="counter">
                <div class="col-sm-6 col-lg-3">
                    <div class="text-center my-3">
                        <div class="counter-content">
                            <h2><span class="counter_value" data-target="825">0</span></h2>
                            <p class="counter-name text-muted mb-0 text-uppercase">Global Brands</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="text-center my-3">
                        <div class="counter-content">
                            <h2><span class="counter_value" data-target="1800">0</span>+</h2>
                            <p class="counter-name text-muted mb-0 text-uppercase">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="text-center my-3">
                        <div class="counter-content">
                            <h2><span class="counter_value" data-target="599">0</span>+</h2>
                            <p class="counter-name text-muted mb-0 text-uppercase">Creative Idea</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="text-center my-3">
                        <div class="counter-content">
                            <h2><span class="counter_value" data-target="2000">0</span>+</h2>
                            <p class="counter-name text-muted mb-0 text-uppercase">User clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter end -->

    <!-- team start -->
    <section class="section" id="team">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h6 class="subtitle">Team</h6>
                    <h2 class="title">Amazing Team</h2>
                    <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut consequuntur magni dolores.</p>
                </div>
            </div>

            <div class="row mb-5 pb-5">
                <div class="col-sm-6 col-lg-3">
                    <div class="team-bg rounded text-center">
                        <img src="images/agency/team/1.png" alt="" class="img-fluid" />
                    </div>
                    <h5 class="fs-18 mb-0 mt-3">Adela White</h5>
                    <p class="text-muted fs-15 mb-4 mb-lg-0">Web Designer, USA</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-bg rounded text-center">
                        <img src="images/agency/team/2.png" alt="" class="img-fluid" />
                    </div>
                    <h5 class="fs-18 mb-0 mt-3">Ronnie Cooper</h5>
                    <p class="text-muted fs-15 mb-4 mb-lg-0">Graphic Designer, USA</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-bg rounded text-center">
                        <img src="images/agency/team/3.png" alt="" class="img-fluid" />
                    </div>
                    <h5 class="fs-18 mb-0 mt-3">Helen Kim</h5>
                    <p class="text-muted fs-15 mb-4 mb-lg-0">Web Developer, USA</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-bg rounded text-center">
                        <img src="images/agency/team/4.png" alt="" class="img-fluid" />
                    </div>
                    <h5 class="fs-18 mb-0 mt-3">Howard Shiflet</h5>
                    <p class="text-muted fs-15 mb-4 mb-lg-0">PHP Developer, USA</p>
                </div>
            </div>
        </div>
    </section>
    <!-- team end -->

    <!-- footer & cta start -->
    <section class="footer bg-light">
        <div class="cta-content">
            <div class="container">
                <div class="row bg-dark cta-bg p-5 rounded align-items-center">
                    <div class="col-lg-6">
                        <h3 class="text-white fs-26 mb-3">Subscribe our newsletter</h3>
                        <p class="text-white opacity-75 mb-4 mb-lg-0">Et harum quidem rerum facilis est us et expedita distinctio am libero tempore cum soluta nobis.</p>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="subscribe-form">
                            <i class="mdi mdi-email-outline form-icon"></i>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email Address" />
                            <a href="javascript:void(0);" class="btn btn-primary form-btn">Get Access</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center text-lg-start">
                    <div class="footer-logo mb-4">
                        <a href="#">
                            <img src="{{asset('uploads/'.$settings->logo)}}" style="height: 100px;" alt="" />
                        </a>
                    </div>
                    <a href="#" class="text-muted">{{$settings->contact_email}}</a>
                    <p class="text-muted">{{$settings->contact_number}}</p>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h5 class="fs-22 mb-3 fw-semibold">About Us</h5>
                            <ul class="list-unstyled footer-nav">
                                <li><a href="javascript:void(0);" class="footer-link">Support Center</a></li>
                                <li><a href="javascript:void(0);" class="footer-link">Customer Support</a></li>
                                <li><a href="javascript:void(0);" class="footer-link">About Us</a></li>
                                <li><a href="javascript:void(0);" class="footer-link">Copyright</a></li>
                                <li><a href="javascript:void(0);" class="footer-link">Popular Campaign</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer & cta end -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" class="back-to-top-btn btn btn-dark" id="back-to-top"><i class="mdi mdi-chevron-up"></i></a>

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Portfolio filter -->
    <script src="js/filter.init.js"></script>
    <!-- Light-box -->
    <script src="js/mklb.js"></script>
    <!-- swiper -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>

    <!-- counter -->
    <script src="js/counter.init.js"></script>
    <script src="js/app.js"></script>
</body>

</html> 