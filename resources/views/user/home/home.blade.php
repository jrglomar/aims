<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AIMS</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('/vendors/sbf/dist/assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/vendors/sbf/dist/css/styles.css') }}" rel="stylesheet" />

    {{-- MAIN CSS LINKS --}}
    @include('layouts.css_includes')
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">
                <img src="{{ asset('/images/schoolLogo.png') }}" width="50" height="50"> <span
                    style="padding-left: 5px">AIMS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ env('APP_URL') }}/services/inquiry">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ env('APP_URL') }}/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-custom py-5"">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">ASSETS INVENTORY MONITORING SYSTEM </h1>
                        <p class="text-dark mb-4"> Assets Inventory System was developed in the Mayamot National High
                            School to speed up the counting and monitoring system. </p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-success btn-lg px-4 me-sm-3 mx-2" href="#features">Get Started</a>
                            <a class="btn btn-outline-light btn-lg px-4 text-dark" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row justify-content-center gx-5 text-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="feature bg-info bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i>
                    </div>
                    <h2 class="h4 fw-bolder">Inquiry Service</h2>
                    <p>This feature is made for users so they can communicate with the admins and ask for the
                        information they need. </p>
                    <a class="text-decoration-none" href="#contact">
                        View
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="feature bg-info bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i>
                    </div>
                    <h2 class="h4 fw-bolder">Assets Viewing</h2>
                    <p>...</p>
                    <a class="text-decoration-none" href="#!">
                        View
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- About section-->
    <section class="bg-light py-5 border-bottom" id="about">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">About</h2>
                {{-- <p class="lead mb-0">Asset Inventory Management System</p> --}}
            </div>
            <div class="row gx-5 justify-content-center">
                <!-- Pricing card free-->

                <!-- Pricing card enterprise-->
                <div class="col-lg-6 col-xl-12">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold text-muted">Asset Inventory Management System</div>
                            <div class="mb-3">
                                <span class="display-4 fw-bold">T</span>
                                <span>his system was developed based on the needs of the school and the equipment that
                                    goes inside at Mayamot National High school. The school is required every year to
                                    check what new equipment is entering in the school and whether the equipment entered
                                    is usable or not. School assets will no longer be properly monitored because there
                                    is no system that can be used to facilitate the monitoring and counting of assets
                                    entering in the school. That is why the Assets Inventory System was developed in the
                                    Mayamot National High School to speed up the counting and monitoring system. </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- School section-->
    <section class="py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="fw-bolder">School</h2>
                        <p class="lead mb-0">Mayamot National High school</p><br>
                        <img src="{{ asset('/vendors/sbf/dist/assets/school_logo.jpg') }}" width="150px"
                            height="150px">
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-12">
                            <!-- Testimonial 1-->
                            <div class="card mb-4">
                                <div class="card-body p-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><i
                                                class="bi bi-geo-alt-fill text-primary fs-1"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="mb-1">Location</p>
                                            <div class="small text-muted">Address: #18 Rose Street, Newtown 1-A
                                                Greenheights
                                                Subdivision, Baranggay Mayamot, 1870 Antipolo, Philippines </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <!-- Testimonial 1-->
                            <img class="school-image" src="{{ asset('/images/actualFront.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section class="bg-light py-5" id="contact">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i>
                </div>
                <h2 class="fw-bolder">Inquiry Form </h2>
                <p class="lead mb-0">We'd love to hear from you</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="title" type="text" placeholder="Enter title..."
                                data-sb-validations="required" />
                            <label for="title">Title</label>

                            <div class="invalid-feedback" data-sb-feedback="title:required">A title is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="description" type="text" placeholder="Enter your message here..."
                                style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="description">Message</label>

                            <div class="invalid-feedback" data-sb-feedback="description:required">A message is
                                required.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <button id="viewInquiry" class="btn btn-success">View your inquiries</button>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-flex float-right">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright &copy; AIMS 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src=" {{ asset('/vendors/sbf/dist/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    {{-- MAIN SCRIPTS --}}
    @include('layouts.scripts_includes')
    {{-- GLOBAL SCRIPTS --}}
    @include('layouts.global_scripts')
    @include('user.home.inquiry_scripts')
</body>

</html>
