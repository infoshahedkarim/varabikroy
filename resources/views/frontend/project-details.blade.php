@extends('layouts.frontend')
@section('title')
    Ad Details
@endsection
@section('page-title')
    Ad Details 
@endsection

    @section('content')

<!-- ======================== Breadcrumb Two Section Start ===================== -->
<section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

    <div class="breadcrumb-two">
        <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">
        <div class="container container-two">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-two-content">
    
                        <ul class="breadcrumb-list flx-align gap-2 mb-2">
                            <li class="breadcrumb-list__item font-14 text-body">
                                <a href="index.html" class="breadcrumb-list__link text-body hover-text-main">Home</a>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <a href="all-product.html" class="breadcrumb-list__link text-body hover-text-main">Products</a>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__text">SaaS</span>
                            </li>
                        </ul>
                        
                        <h3 class="breadcrumb-two-content__title mb-3 text-capitalize">Quantum: SaaS Landing Page WordPress Theme</h3>
    
                        <div class="breadcrumb-content flx-align gap-3">
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="text">By <a href="#" class="link text-main fw-600">Oviousdev</a> </span>
                            </div>
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="icon">
                                    <img src="assets/images/icons/cart-icon.svg" alt="" class="white-version">
                                    <img src="assets/images/icons/cart-white.svg" alt="" class="dark-version w-20">
                                </span>
                                <span class="text">158 sales</span>
                            </div>
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="icon">
                                    <img src="assets/images/icons/check-icon.svg" alt="" class="white-version">
                                    <img src="assets/images/icons/check-icon-white.svg" alt="" class="dark-version">
                                </span>
                                <span class="text">Recently Updated</span>
                            </div>
                            <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                <span class="icon">
                                    <img src="assets/images/icons/check-icon.svg" alt="" class="white-version">
                                    <img src="assets/images/icons/check-icon-white.svg" alt="" class="dark-version">
                                </span>
                                <span class="text">Well Documented</span>
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
                  <button class="nav-link active" id="pills-product-details-tab" data-bs-toggle="pill" data-bs-target="#pills-product-details" type="button" role="tab" aria-controls="pills-product-details" aria-selected="true">Product Details</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-comments-tab" data-bs-toggle="pill" data-bs-target="#pills-comments" type="button" role="tab" aria-controls="pills-comments" aria-selected="false">Product Images</button>
                </li>
            </ul>
            <div class="social-share">
                <button type="button" class="social-share__button">
                    <img src="assets/images/icons/share-icon.svg" alt="">
                </button>
                <div class="social-share__icons">
                    <ul class="social-icon-list colorful-style">
                        <li class="social-icon-list__item">
                            <a href="https://www.facebook.com" class="social-icon-list__link text-body flex-center"><i class="fab fa-facebook-f"></i></a> 
                        </li>
                        <li class="social-icon-list__item">
                            <a href="https://www.twitter.com" class="social-icon-list__link text-body flex-center"> <i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="social-icon-list__item">
                            <a href="https://www.google.com" class="social-icon-list__link text-body flex-center"> <i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
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
        <img src="assets/images/thumbs/product-details.png" alt="">
    </div>
   

    <p class="product-details__desc">System management saas products, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

    <div class="product-details__item">
        <h5 class="product-details__title mb-3">Template Features</h5>
        <ul class="product-list">
            <li class="product-list__item">Modern and Professional design</li>
            <li class="product-list__item">Built with Elementor Pro</li>
            <li class="product-list__item">100% Responsive & mobile-friendly</li>
            <li class="product-list__item">12+ pre-built templates</li>
            <li class="product-list__item">Easy to customize</li>
            <li class="product-list__item">Fully responsive website</li>
        </ul>
    </div>
   


</div>
<!-- Product Details Content End -->
                    </div>
                    <div class="tab-pane fade" id="pills-rating" role="tabpanel" aria-labelledby="pills-rating-tab" tabindex="0">
                        <div class="product-review-wrapper">
    <!-- <div class="product-review">
        <div class="product-review__top flx-between">
            <div class="product-review__rating flx-align">
                <div class="d-flex align-items-center gap-1">
                    <ul class="star-rating">
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                    </ul>
                    <span class="star-rating__text text-body"> 5.0</span>
                </div>
                <span class="product-review__reason">For <span class="product-review__subject">Customer Support</span> </span>
            </div>
            <div class="product-review__date">
                by <a href="#" class="product-review__user text--base">John Doe </a> 2 month ago
            </div>
        </div>
        <div class="product-review__body">
            <p class="product-review__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam itaque vitae ex possimus delectus? Voluptas expedita accusantium aperiam quo quod dolore dignissimos rerum praesentium deserunt libero recusandae quisquam est accusamus eos dolorum sit explicabo, sapiente pariatur voluptates veniam aut veritatis, magnam velit similique! Ex similique magni labore aperiam, eius quas molestiae accusantium porro eaque esse minus amet doloribus quo odit illo doloremque.</p>
        </div>
    </div>
    <div class="product-review">
        <div class="product-review__top flx-between">
            <div class="product-review__rating flx-align">
                <div class="d-flex align-items-center gap-1">
                    <ul class="star-rating">
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                    </ul>
                    <span class="star-rating__text text-body"> 5.0</span>
                </div>
                <span class="product-review__reason">For <span class="product-review__subject">Customer Support</span> </span>
            </div>
            <div class="product-review__date">
                by <a href="#" class="product-review__user text--base">John Doe </a> 2 month ago
            </div>
        </div>
        <div class="product-review__body">
            <p class="product-review__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam itaque vitae ex possimus delectus? Voluptas expedita accusantium aperiam quo quod dolore dignissimos rerum praesentium deserunt libero recusandae quisquam est accusamus eos dolorum sit explicabo, sapiente pariatur voluptates veniam aut veritatis, magnam velit similique! Ex similique magni labore aperiam, eius quas molestiae accusantium porro eaque esse minus amet doloribus quo odit illo doloremque.</p>
        </div>
    </div> -->
</div>
                    </div>
                    <div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab" tabindex="0">
                        
    <!-- Comment Start -->
    <div class="comment mt-64 mb-64">
        <div class="product-details__thumb">
            <img src="assets/images/thumbs/product-details.png" alt="">
        </div>
    </div>
    <!-- Comment End -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- ======================= Product Sidebar Start ========================= -->
<div class="product-sidebar section-bg">
    <div class="product-sidebar__top position-relative flx-between gap-1">
        <button type="button" class="btn-has-dropdown font-heading font-18">Regular License</button>
        <h6 class="product-sidebar__title">$1580.00</h6>
    </div>

    <ul class="sidebar-list">
        <li class="sidebar-list__item flx-align gap-2 font-14 fw-300 mb-2">
            <span class="icon"><img src="assets/images/icons/check-cirlce.svg" alt=""></span>
            <span class="text">Quality verified</span>
        </li>
    </ul>

    <button type="button" class="btn btn-main d-flex w-100 justify-content-center align-items-center gap-2 pill px-sm-5 mt-32"> 
        <img src="assets/images/icons/add-to-cart.svg" alt="">
        Add To Cart
    </button>

    

    <!-- Meta Attribute List Start -->
    <ul class="meta-attribute">
        <li class="meta-attribute__item">
            <span class="name">Last Update</span>
            <span class="details">Feb 21, 2024</span>
        </li>
        <li class="meta-attribute__item">
            <span class="name">Published</span>
            <span class="details">Feb 15, 2024</span>
        </li>
        <li class="meta-attribute__item">
            <span class="name">Category</span>
            <span class="details">Themes</span>
        </li>
        <li class="meta-attribute__item">
            <span class="name">Widget Ready</span>
            <span class="details">Yes</span>
        </li>
        <li class="meta-attribute__item">
            <span class="name">High Resolution</span>
            <span class="details">Yes</span>
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

<!-- ======================== Brand Section Start ========================= -->
<div class="brand ">
    <div class="container container">
        <div class="brand-slider">
            <div class="brand-item d-flex align-items-center justify-content-center">
                <img src="assets/images/thumbs/brand-img1.png" alt="" class="white-version">
                <img src="assets/images/thumbs/brand-white-img1.png" alt="" class="dark-version">
            </div>
            <div class="brand-item d-flex align-items-center justify-content-center">
                <img src="assets/images/thumbs/brand-img2.png" alt="" class="white-version">
                <img src="assets/images/thumbs/brand-white-img2.png" alt="" class="dark-version">
            </div>
            <div class="brand-item d-flex align-items-center justify-content-center">
                <img src="assets/images/thumbs/brand-img3.png" alt="" class="white-version">
                <img src="assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">
            </div>
            <div class="brand-item d-flex align-items-center justify-content-center">
                <img src="assets/images/thumbs/brand-img4.png" alt="" class="white-version">
                <img src="assets/images/thumbs/brand-white-img4.png" alt="" class="dark-version">
            </div>
            <div class="brand-item d-flex align-items-center justify-content-center">
                <img src="assets/images/thumbs/brand-img5.png" alt="" class="white-version">
                <img src="assets/images/thumbs/brand-white-img5.png" alt="" class="dark-version">
            </div>
            <div class="brand-item d-flex align-items-center justify-content-center">
                <img src="assets/images/thumbs/brand-img3.png" alt="" class="white-version">
                <img src="assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">
            </div>
        </div>
    </div>
</div>
<!-- ======================== Brand Section End ========================= -->


@endsection