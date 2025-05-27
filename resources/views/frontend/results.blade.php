@extends('layouts.frontend')
@section('title')
All Ads |
@endsection
@section('page-title')
All Ads |
@endsection

@section('content')

<!-- ======================== Breadcrumb one Section Start ===================== -->
<section class="breadcrumb breadcrumb-one padding-y-60 section-bg position-relative z-index-1 overflow-hidden">

    <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element-moon3.png" alt="" class="element one">
    <img src="assets/images/shapes/element-moon1.png" alt="" class="element three">

    <div class="container container-two">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="breadcrumb-one-content">
                    <h3 class="breadcrumb-one-content__title text-center mb-3 text-capitalize">All ADs</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== Breadcrumb one Section End ===================== -->
<!-- ======================== All Product Section Start ====================== -->
<section class="all-product padding-y-120">
    <div class="container container-two">
        <div class="row">
            <div class="col-lg-12">
                
             <h2>Search Results for "{{ $query }}"</h2>

    <h3>Categories</h3>
    @forelse($categories as $category)
        <p><a href="{{ route('frontend.sells', $category->id) }}">{{ $category->name }}</a></p>
    @empty
        <p>No categories found.</p>
    @endforelse

    <h3>Places</h3>
    @forelse($places as $place)
        <p><a href="{{ route('frontend.tolet', $place->id) }}">{{ $place->name }}</a></p>
    @empty
        <p>No places found.</p>
    @endforelse

    <h3>Ads</h3>
    @forelse($ads as $ad)
        <p><a href="{{ route('frontend.all-project', $ad->id) }}">{{ $ad->title }}</a></p>
    @empty
        <p>No ads found.</p>
    @endforelse    


            </div>
        </div>
    </div>
</section>




@endsection