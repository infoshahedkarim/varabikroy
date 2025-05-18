@extends('layouts.frontend')
@section('title')
    To-Let
@endsection
@section('page-title')
    To-Let 
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
                        <h3 class="breadcrumb-one-content__title text-center mb-3 text-capitalize">58,000+ products available for purchase</h3>
                        <p class="breadcrumb-one-content__desc text-center text-black-three">Explore the best premium themes and plugins available for sale. Our unique collection is hand-curated by experts. Find and buy the perfect premium theme.</p>
    
                        <form action="#" class="search-box">
                            <input type="text" class="common-input common-input--lg pill shadow-sm" placeholder="Search theme, plugins &amp; more...">
                            <button type="submit" class="btn btn-main btn-icon icon border-0">
                                <img src="assets/images/icons/search.svg" alt="">
                            </button>
                        </form>
                    
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
            <div class="section-heading style-three">
                <div class="buttons flx-align gap-sm-3 gap-2 mt-40">
                    <a href="all-product.html" class="btn btn-main btn-lg-icon">
                        <span class="d-sm-flex d-none me-1">Our best </span> Services
                        <span class="icon-right icon"> 
                            <img src="assets/images/icons/arrow-right-white.svg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            
        </div>
    </section>

    <section class="resource  padding-y-120 section-bg position-relative z-index-1 overflow-hidden">

<img src="assets/images/shapes/element-moon3.png" alt="" class="element one">
<img src="assets/images/shapes/curve-pattern3.png" alt=""
    class="d-none position-absolute end-0 top-0 z-index--1">

<div class="container container-two">
    <div class="section-heading style-left style-flex flx-between align-items-end gap-3">
        <div class="section-heading__inner w-lg">
            <h3 class="section-heading__title">Free Resources</h3>
            <p class="section-heading__desc">Every month we pick some best products for you. This month's best
                web themes &amp; templates have arrived, chosen by our content specialists.</p>
        </div>
        <a href="#" class="btn btn-main btn-lg pill">View All Items</a>
    </div>
    <div class="resource-slider gy-4">
        <div class="product-item shadow-sm">
            <div class="product-item__thumb d-flex">
                <a href="product-details.html" class="link w-100">
                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                </a>
                <button type="button" class="product-item__wishlist"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-item__content">
                <h6 class="product-item__title">
                    <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                </h6>
                <div class="product-item__info flx-between gap-2">
                    <span class="product-item__author">
                        by
                        <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                    </span>
                    <div class="flx-align gap-2">
                        <h6 class="product-item__price mb-0">$120</h6>
                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                    </div>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                    <div>
                        <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                        <div class="d-flex align-items-center gap-1">
                            <ul class="star-rating">
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                            </ul>
                            <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                        </div>
                    </div>
                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                </div>
            </div>
        </div>
        <div class="product-item shadow-sm">
            <div class="product-item__thumb d-flex">
                <a href="product-details.html" class="link w-100">
                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                </a>
                <button type="button" class="product-item__wishlist"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-item__content">
                <h6 class="product-item__title">
                    <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                </h6>
                <div class="product-item__info flx-between gap-2">
                    <span class="product-item__author">
                        by
                        <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                    </span>
                    <div class="flx-align gap-2">
                        <h6 class="product-item__price mb-0">$100</h6>
                        <span class="product-item__prevPrice text-decoration-line-through">$130</span>
                    </div>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                    <div>
                        <span class="product-item__sales font-14 mb-2">952 Sales</span>
                        <div class="d-flex align-items-center gap-1">
                            <ul class="star-rating">
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                            </ul>
                            <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                        </div>
                    </div>
                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                </div>
            </div>
        </div>
        <div class="product-item shadow-sm">
            <div class="product-item__thumb d-flex">
                <a href="product-details.html" class="link w-100">
                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                </a>
                <button type="button" class="product-item__wishlist"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-item__content">
                <h6 class="product-item__title">
                    <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                </h6>
                <div class="product-item__info flx-between gap-2">
                    <span class="product-item__author">
                        by
                        <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                    </span>
                    <div class="flx-align gap-2">
                        <h6 class="product-item__price mb-0">$160</h6>
                        <span class="product-item__prevPrice text-decoration-line-through">$000</span>
                    </div>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                    <div>
                        <span class="product-item__sales font-14 mb-2">1000 Sales</span>
                        <div class="d-flex align-items-center gap-1">
                            <ul class="star-rating">
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                            </ul>
                            <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                        </div>
                    </div>
                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                </div>
            </div>
        </div>
        <div class="product-item shadow-sm">
            <div class="product-item__thumb d-flex">
                <a href="product-details.html" class="link w-100">
                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                </a>
                <button type="button" class="product-item__wishlist"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-item__content">
                <h6 class="product-item__title">
                    <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                </h6>
                <div class="product-item__info flx-between gap-2">
                    <span class="product-item__author">
                        by
                        <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                    </span>
                    <div class="flx-align gap-2">
                        <h6 class="product-item__price mb-0">$250</h6>
                        <span class="product-item__prevPrice text-decoration-line-through">$300</span>
                    </div>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                    <div>
                        <span class="product-item__sales font-14 mb-2">320 Sales</span>
                        <div class="d-flex align-items-center gap-1">
                            <ul class="star-rating">
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                            </ul>
                            <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                        </div>
                    </div>
                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                </div>
            </div>
        </div>
        <div class="product-item shadow-sm">
            <div class="product-item__thumb d-flex">
                <a href="product-details.html" class="link w-100">
                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                </a>
                <button type="button" class="product-item__wishlist"><i class="fas fa-heart"></i></button>
            </div>
            <div class="product-item__content">
                <h6 class="product-item__title">
                    <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>
                </h6>
                <div class="product-item__info flx-between gap-2">
                    <span class="product-item__author">
                        by
                        <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                    </span>
                    <div class="flx-align gap-2">
                        <h6 class="product-item__price mb-0">$65</h6>
                        <span class="product-item__prevPrice text-decoration-line-through">$85</span>
                    </div>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                    <div>
                        <span class="product-item__sales font-14 mb-2">1001 Sales</span>
                        <div class="d-flex align-items-center gap-1">
                            <ul class="star-rating">
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                            </ul>
                            <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                        </div>
                    </div>
                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>




@endsection
