<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NyamNyam | Home</title>
    <link rel="icon" type="image/png" href="img/nyum.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <!-- Favicon -->
    <link href="{{ asset('img/favicon.icon') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/frontend/style.css') }}" rel="stylesheet">
</head>

<body>
    {{-- navbar --}}
    <div class=" bg-white p-0">
        <div class=" position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="img/nyum.png"></img>NYAM NYAM</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}"
                            class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ url('/about') }}"
                            class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                        <a href="{{ url('/menu') }}"
                            class="nav-item nav-link {{ Request::is('menu') ? 'active' : '' }}">Menu</a>
                        <a href="{{ url('/contact') }}"
                            class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>

                        <div class="nav-item dropdown">
                            <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> -->
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>

                    </div>
                    <!-- <a href="" class="btn btn-primary py-2 px-4">Book A Table</a> -->
                </div>
            </nav>

            <div class=" py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft"> Welcome to Our Official
                                Website!<br>Your Favorite Snacks, One Click Away! </h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2"></p>
                            <!-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a> -->
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="./img/pe.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- about start --}}
        @include('layouts.frontend.about_section')
        <!-- About End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach ($menus as $menu)
                                    <div class="col-lg-6">
                                        <a href="https://wa.me/62881024548319?text=Hi, saya tertarik dengan {{ $menu->name }} yang harganya Rp.{{ number_format($menu->price, 0, ',', '.') }}"
                                            target="_blank">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid rounded"
                                                    src="img/{{ $menu->image }}" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span>{{ $menu->name }}</span>
                                                        <span
                                                            class="text-primary">Rp.{{ number_format($menu->price, 0, ',', '.') }}</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5"></h1>
                </div>
                <div class="row g-4">
                    @foreach ($teams as $team)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4 mx-auto"
                                    style="width: 200px; height: 200px;">
                                    <img src="img/{{ $team->image }}" alt="{{ $team->name }}"
                                        class="w-100 h-100" style="object-fit: cover;">
                                </div>

                                <h5 class="mb-0">{{ $team->name }}</h5>
                                <div class="d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1"
                                        href="https://www.instagram.com/{{ $team->socialmedia }}" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>

                <div class="owl-carousel testimonial-carousel">
                    @foreach ($reviews as $review)
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>{{ $review->review_text }}
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="ps-3">
                                    <h5 class="mb-1">{{ $review->name }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

<<<<<<< HEAD
        <<<<<<< HEAD <!-- Testimonial Start -->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                        <h1 class="mb-5">Our Clients Say!!!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>Ulva chips are really delicious, I don't regret buying 2, I'm addicted, next time I want
                                to buy
                                another variant💗🥰
                            </p>
                            <div class="d-flex align-items-center">
                                <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/.jpg" style="width: 50px; height: 50px;"> -->
                                <div class="ps-3">
                                    <h5 class="mb-1">Risnawati</h5>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>Acaaa really likes the original Ulva, the seaweed is really tasty, it's the best,
                                really🤤
                            </p>
                            <div class="d-flex align-items-center">
                                <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/" style="width: 50px; height: 50px;"> -->
                                <div class="ps-3">
                                    <h5 class="mb-1">Caca</h5>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>Is this seriously that price? I think it's cheap because it tastes really good, I swear
                                it's not
                                a lie😭
                            </p>
                            <div class="d-flex align-items-center">

                                <div class="ps-3">
                                    <h5 class="mb-1">Kang Ade</h5>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-4">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>It's really suitable as my diet snack, because I'm reducing my consumption of oily
                                snacks, thank
                                you.🤗
                            </p>
                            <div class="d-flex align-items-center">

                                <div class="ps-3">
                                    <h5 class="mb-1">Nira</h5>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- footer --}}
            @include('layouts.frontend.footer')

            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
            =======
            {{-- footer --}}
            @include('layouts.frontend.footer')

            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
            >>>>>>> 2c3d0082a4143a59c5da8a85b56d9962d4f59c27
=======
        {{-- footer --}}
        @include('layouts.frontend.footer')

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
>>>>>>> 5e089dc37d1a27fb24eb61ee6ca1852851945ae7
    </div>

    <!-- jQuery & Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Library Javascript -->
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

<!-- Testimonial End -->
