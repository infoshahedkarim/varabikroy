@extends('layouts.frontend')
@section('title')
To-Let |
@endsection
@section('page-title')
To-Let |
@endsection

@section('content')

<section class="breadcrumb breadcrumb-one padding-y-60 section-bg position-relative z-index-1 overflow-hidden">

    <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element-moon3.png" alt="" class="element one">
    <img src="assets/images/shapes/element-moon1.png" alt="" class="element three">

    <div class="container container-two">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="breadcrumb-one-content">
                    <h3 class="breadcrumb-one-content__title text-center mb-3 text-capitalize">To Let</h3>

                </div>
            </div>
        </div>
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