@extends('layouts.frontend.app', ['title' => 'Home'])

@section('page-title', 'Menu')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Pages</a></li>
    <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
@endsection

@section('content')

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
                                    <a href="https://wa.me/62881024548319?text=Hi, saya tertarik dengan {{ $menu->name }} yang harganya Rp.{{ number_format($menu->price, 0, ',', '.') }}" target="_blank">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/{{ $menu->image }}" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>{{ $menu->name }}</span>
                                                    <span class="text-primary">Rp.{{ number_format($menu->price, 0, ',', '.') }}</span>
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



@endsection