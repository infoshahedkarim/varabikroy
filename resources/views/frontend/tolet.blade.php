@extends('layouts.frontend')
@section('title')
To-Let |
@endsection
@section('page-title')
To-Let |
@endsection

@section('content')

 <section class="banner-two position-relative overflow-hidden py-5 m-0">
        <div class="swiper banner-swiper position-relative w-100" style="line-height: 0;">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $banner->img) }}" alt="Banner Light" class="slide-image">
                        </div>
                @endforeach
            </div>

            <!-- Controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>


<section class="service-three position-relative section-bg padding-y-120 z-index-1">
    <img src="assets/images/shapes/line-curve3.png" alt="" class="line-curve right-bottom one">
    <div class="container container-two">
        <div class="section-heading style-three">
            <span class="section-heading__subtitle">Area List</span>
            <h3 class="section-heading__title">Find your desireable areas</h3>
        </div>


        <div class="container mt-5">
            <div class="row text-center">
                @foreach($places as $place)
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 mb-4">
                    <a href="{{ route('ads.by.place', $place->id) }}"
                        class="d-flex flex-column align-items-center text-black text-decoration-none">
                        <span class="mb-2">
                            <img src="{{ asset('storage/' . $place->img) }}" alt="" style="width:80px;">
                        </span>
                        <span class="fw-bold">{{ $place->name }}</span>
                    </a>
                </div>
                @endforeach


            </div>
        </div>

    </div>
</section>






@endsection