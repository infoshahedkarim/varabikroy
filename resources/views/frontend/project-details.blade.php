@extends('layouts.frontend')
@section('title')
Ad Details |
@endsection
@section('page-title')
Ad Details |
@endsection

    @section('content')

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


    <div class="container container-two" style="margin-top: 6%">
        <h3 class="breadcrumb-two-content__title mb-3 text-capitalize" style="margin-bottom: 30px">{{$ad->title}}</h3>
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
            <ul class="nav tab-bordered nav-pills" id="pills-tab" role="tablist" style="margin-bottom: 20px"> 
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-product-details-tab" data-bs-toggle="pill" 
                  data-bs-target="#pills-product-details" type="button" role="tab" aria-controls="pills-product-details" aria-selected="true">Ad Details</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-comments-tab" data-bs-toggle="pill" 
                  data-bs-target="#pills-comments" type="button" role="tab" aria-controls="pills-comments" aria-selected="false">More Images</button>
                </li>
            </ul>

    <div class="product-sidebar__top position-relative flx-between gap-1">
        <button type="button" class="btn-has-dropdown font-heading font-18">Price</button>
        <h6 class="product-sidebar__title">{{$ad->price}}</h6>
    </div>

    <!-- Meta Attribute List Start -->
    <ul class="meta-attribute">
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