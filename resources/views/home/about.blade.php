@extends('layouts.frontend.app', ['title' => 'About'])

@section('page-title', 'About')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Pages</a></li>
    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
@endsection

@section('content')

    <!-- About End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/p1.png">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/p2.png"
                                style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/p3.png">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/p4.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                    <h1 class="mb-4"> <i class="fa fa-utensils text-primary me-2"></i>Nyam-Nyam</h1>
                    <p class="mb-4">Nyamnyam is an e-commerce platform that offers a variety of delicious local snacks.
                        The name Nyamnyam was chosen because it was inspired by childhood, when children often pretended to
                        eat while saying "nyamnyam" while playing cooking. This word is also often said by mothers to
                        children when feeding them food. Through Nyamnyam, we want to bring back those sweet memories in the
                        form of real and delicious snacks—ready to eat anytime!</p>
                    <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0"></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                            <div class="rounded-circle overflow-hidden m-4 mx-auto" style="width: 200px; height: 200px;">
                                <img src="img/{{ $team->image }}" alt="{{ $team->name }}" class="w-100 h-100"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="mb-0">{{ $team->name }}</h5>
                            <small></small>
                            <div class="d-flex justify-content-center mt-3">

                                <a class="btn btn-square btn-primary mx-1" target="blank"
                                    href="https://www.instagram.com/{{ $team->socialmedia }}"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
