@extends('layouts.frontend')
@section('title')
Ad Details |
@endsection
@section('page-title')
Ad Details |
@endsection

    @section('content')

<!-- ======================== Breadcrumb Two Section Start ===================== -->
<section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

    <div class="breadcrumb-two">
        <img src="{{asset('assets/images/gradients/breadcrumb-gradient-bg.png')}}" alt="" class="bg--gradient">
        <div class="container container-two">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-two-content">
    
                        <ul class="breadcrumb-list flx-align gap-2 mb-2">
                            <li class="breadcrumb-list__item font-14 text-body">
                                <a href="{{route('frontend.index')}}" class="breadcrumb-list__link text-body hover-text-main">Home</a>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <a href="" class="breadcrumb-list__link text-body hover-text-main">Projects</a>
                            </li>
                           
                        </ul>
                        
                        <h3 class="breadcrumb-two-content__title mb-3 text-capitalize">{{$ad->title}}</h3>
    
                        <div class="breadcrumb-content flx-align gap-3">
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="text"><a href="#" class="link text-main fw-600"></a> {{$ad->subtitle}} </span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-two">
        <div class="breadcrumb-tab flx-wrap align-items-start gap-lg-4 gap-2">
            <ul class="nav tab-bordered nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-product-details-tab" data-bs-toggle="pill" 
                  data-bs-target="#pills-product-details" type="button" role="tab" aria-controls="pills-product-details" aria-selected="true">Ad Details</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-comments-tab" data-bs-toggle="pill" 
                  data-bs-target="#pills-comments" type="button" role="tab" aria-controls="pills-comments" aria-selected="false">More Images</button>
                </li>
            </ul>
           
        </div>
    </div>
    
</section>
<!-- ======================== Breadcrumb Two Section End ===================== -->

<!-- ======================= Product Details Section Start ==================== -->
<div class="product-details mt-32 padding-b-120">
    <div class="container container-two">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-product-details" role="tabpanel" aria-labelledby="pills-product-details-tab" tabindex="0">
                        <!-- Product Details Content Start -->
<div class="product-details">
    <div class="product-details__thumb">
        <img src="{{asset('storage/' . $ad->img)}}" alt="">
    </div>
   

    <p class="product-details__desc">{!! $ad->des !!}</p>


</div>
<!-- Product Details Content End -->
                    </div>
                    <div class="tab-pane fade" id="pills-rating" role="tabpanel" aria-labelledby="pills-rating-tab" tabindex="0">
                        <div class="product-review-wrapper">
   
</div>
                    </div>
                    <div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab" tabindex="0">
                        
   
    <div class="comment mt-64 mb-64">
    @foreach($ad->images as $image)
        <div class="product-details__thumb mb-3">
            <img src="{{ asset($image->image_path) }}" alt="Ad Image" style="max-width: 100%; height: auto;">
        </div>
    @endforeach
</div>
    
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- ======================= Product Sidebar Start ========================= -->
<div class="product-sidebar section-bg">
    <div class="product-sidebar__top position-relative flx-between gap-1">
        <button type="button" class="btn-has-dropdown font-heading font-18">Price</button>
        <h6 class="product-sidebar__title">{{$ad->price}}</h6>
    </div>

    <ul class="sidebar-list">
        <li class="sidebar-list__item flx-align gap-2 font-14 fw-300 mb-2">
            <span class="icon"><img src="assets/images/icons/check-cirlce.svg" alt=""></span>
            <span class="text">Quality verified</span>
        </li>
    </ul>

    <button type="button" class="btn btn-main d-flex w-100 justify-content-center align-items-center gap-2 pill px-sm-5 mt-32"> 
        <img src="assets/images/icons/add-to-cart.svg" alt="">
        Call Now
    </button>

    

    <!-- Meta Attribute List Start -->
    <ul class="meta-attribute">
        <li class="meta-attribute__item">
            <span class="name">Last Update</span>
            <span class="details">{{$ad->updated_at}}</span>
        </li>
        <li class="meta-attribute__item">
            <span class="name">Published</span>
            <span class="details">{{$ad->created_at}}</span>
        </li>
        <li class="meta-attribute__item">
            <span class="name">Category</span>
            <span class="details">{{$ad->category->name}}</span>
        </li>
        <li class="meta-attribute__item">
            <span class="name">Place</span>
            <span class="details">{{$ad->place->name}}</span>
        </li>
        <li class="meta-attribute__item">
            <span class="name">Contact Info</span>
            <span class="details">{{$ad->contact}}</span>
        </li>
    </ul>
    <!-- Meta Attribute List End -->
</div>
<!-- ======================= Product Sidebar End ========================= -->
            </div>
        </div>
    </div>
</div>
<!-- ======================= Product Details Section End ==================== -->




@endsection