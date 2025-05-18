@extends('layouts.frontend')
@section('title')
All Ads
@endsection
@section('page-title')
All Ads
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
<!-- ======================== Breadcrumb one Section End ===================== -->
<!-- ======================== All Product Section Start ====================== -->
<section class="all-product padding-y-120">
    <div class="container container-two">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-tab gap-3 flx-between">
                    <button type="button" class="filter-tab__button btn btn-outline-light pill d-flex align-items-center">
                        <span class="icon icon-left"><img src="assets/images/icons/filter.svg" alt=""></span>
                        <span class="font-18 fw-500">Filters</span>
                    </button>
                    <div class="list-grid d-flex align-items-center gap-2">
                        <button class="list-grid__button list-button d-sm-flex d-none text-body"><i class="las la-list"></i></button>
                        <button class="list-grid__button grid-button d-sm-flex d-none active text-body"><i class="las la-border-all"></i></button>
                        <button class="list-grid__button sidebar-btn text-body d-lg-none d-flex"><i class="las la-bars"></i></button>
                    </div>
                </div>
                <form action="#" class="filter-form pb-4 ">
                    <div class="row gy-3">
                        <div class="col-sm-4 col-xs-6">
                            <div class="flx-between gap-1">
                                <label for="tag" class="form-label font-16">Tag</label>
                                <button type="reset" class="text-body font-14">Clear</button>
                            </div>
                            <div class="position-relative">
                                <input type="text" class="common-input border-gray-five common-input--withLeftIcon" id="tag" placeholder="Search By Tag...">
                                <span class="input-icon input-icon--left"><img src="assets/images/icons/search-two.svg" alt=""></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="flx-between gap-1">
                                <label for="time" class="form-label font-16">Time Frame</label>
                                <button type="reset" class="text-body font-14">Clear</button>
                            </div>
                            <div class="position-relative select-has-icon">
                                <select id="time" class="common-input border-gray-five">
                                    <option value="1">Now</option>
                                    <option value="2">Yesterday</option>
                                    <option value="2">1 Month Ago</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-3 col-lg-4">
                <!-- ===================== Filter Sidebar Start ============================= -->
                <div class="filter-sidebar">
                    <button type="button" class="filter-sidebar__close p-2 position-absolute end-0 top-0 z-index-1 text-body hover-text-main font-20 d-lg-none d-block"><i class="las la-times"></i></button>
                    <div class="filter-sidebar__item">
                        <button type="button" class="filter-sidebar__button font-16 text-capitalize fw-500">Category</button>
                        <div class="filter-sidebar__content">
                            <ul class="filter-sidebar-list">
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        All Categories <span class="qty">25489</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Site Template <span class="qty">12,501</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        WordPress <span class="qty">1258</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        UI Template <span class="qty">1520</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Templates Kits <span class="qty">210</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        eCommerce <span class="qty">158</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Marketing <span class="qty">178</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        CMS Template <span class="qty">122</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Muse Themes <span class="qty">450</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Blogging <span class="qty">155</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Courses <span class="qty">125</span>
                                    </a>
                                </li>
                                <li class="filter-sidebar-list__item">
                                    <a href="" class="filter-sidebar-list__text">
                                        Forums <span class="qty">35</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- ===================== Filter Sidebar End ============================= -->
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-6 col-sm-6 col-xl-4">
                                <div class="product-item section-bg">
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
                            </div>
                            <div class="col-6 col-sm-6 col-xl-4">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
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
                            <div class="col-6 col-sm-6 col-xl-4">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
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
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-bestMatch" role="tabpanel" aria-labelledby="pills-bestMatch-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-bestRating" role="tabpanel" aria-labelledby="pills-bestRating-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-bestOffers" role="tabpanel" aria-labelledby="pills-bestOffers-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                    <div class="tab-pane fade" id="pills-bestSelling" role="tabpanel" aria-labelledby="pills-bestSelling-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
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
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="product-item section-bg">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
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
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
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
                        <!-- Pagination Start -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination common-pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                        <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== All Product Section End ====================== -->

<!-- ======================== Brand Section Start ========================= -->
<div class="brand margin-t-120">
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