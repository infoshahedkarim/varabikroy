@extends('layouts.frontend')
@section('title')

@endsection
@section('page-title')

@endsection

@section('content')

<div class="container my_button" style="margin-top: 40px !important; padding-top: 0 !important; padding-bottom: 2rem; z-index: 5; position: relative;">
    <div class="row justify-content-center">
        <div class="col-xl-6 text-center">
            <div class="banner-two__content">
              <div class="buttons d-flex justify-content-center flex-wrap gap-sm-3 gap-2">
    <a href="{{ route('frontend.tolet') }}" class="btn btn-main btn-lg-icon btn-3d-animated" style="padding-inline: 10%;">
        To-Let<span style="margin-right: 20px"></span>
        <span class="icon-right icon">
            <img src="{{ asset('assets/images/icons/tolet.png') }}" alt="" style="width:30px;">
        </span>
    </a>
    <a href="{{ route('frontend.sells') }}" class="btn btn-main btn-lg-icon btn-3d-animated" style="padding-inline: 10%;">
        Sells<span style="margin-right: 20px"></span>
        <span class="icon-right icon">
            <img src="{{ asset('assets/images/icons/sell.png') }}" alt="" style="width:30px;">
        </span>
    </a>
</div>

            </div>
        </div>
    </div>
</div>

<!-- Swiper Section -->
<section class="banner-two position-relative overflow-hidden p-0 m-0">
    <div class="swiper banner-swiper position-relative w-100" style="line-height: 0;">
        <div class="swiper-wrapper">
            @foreach($pres as $pre)
                <div class="swiper-slide position-relative"> <a href="{{route('frontend.project-details', $pre->slug)}}" class="slide-image"> 
                    <img src="{{ asset('storage/' . $pre->img) }}" alt="Banner Light" class="slide-image">
                </a></div>
            @endforeach
        </div>

        <!-- Controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>







 @php use Illuminate\Support\Str; @endphp
<section class="arrival-product section-bg position-relative z-index-1" style="padding-top: 10px; padding-bottom: 80px;">
    <img src="assets/images/gradients/product-gradient.png" alt="" class="bg--gradient white-version">

    <img src="assets/images/shapes/element2.png" alt="" class="element one" style="width:5%">

    <div class="container container-two my_button1">
        <div class="section-heading">
    <h2 class="section-heading__title" style="margin-top: -50px">
        <img src="{{ asset('assets/images/pad.png') }}" alt="Premium Icon" style="width: 100px; height: 100px; vertical-align: middle;">
        Premium Ads
    </h2>
</div>


        <div class="tab-content" id="pills-tabContent" style="margin-top: -50px">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                tabindex="0">
                <div class="row gy-4">
                    <div id="ads-wrapper">
                        <div class="row">
                            @foreach ($ads as $ad)
                            <div class="col-6 col-sm-6 col-lg-3 col-xl-3 gy-5">
                                <div class="product-item">
                                    <div class="product-item__thumb d-flex max-h-unset">
                                        <a href="{{route('frontend.project-details', $ad->slug)}}" class="link w-100">
                                            <img src="{{ asset('storage/' . $ad->img) }}" alt="" class="cover-img ">
                                        </a>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="{{route('frontend.project-details', $ad->slug)}}" class="link">{{ $ad->title }}</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                <p class="link">{!! \Illuminate\Support\Str::words(strip_tags($ad->subtitle ?? ''), 8, ' ...') !!}</p>
                                            </span>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">{{ $ad->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="mt-4 text-center ">
                        {!! $ads->links() !!}
                    </div>  

                    <script>
                        function loadAdsPage(url) {
                            fetch(url, {
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest'
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    document.getElementById('ads-wrapper').outerHTML = data.html;
                                    bindPaginationLinks(); // rebind
                                });
                        }

                        function bindPaginationLinks() {
                            document.querySelectorAll('.page-link-custom').forEach(link => {
                                link.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    loadAdsPage(this.href);
                                });
                            });
                        }

                        document.addEventListener('DOMContentLoaded', bindPaginationLinks);
                    </script>



                </div>
            </div>
        </div>

        <div class="text-center mt-64">
            <a href="{{route('frontend.all-project')}}" class="btn btn-main btn-lg pill fw-300">
                View All Ads
            </a>
        </div>

    </div>
</section>


{{-- <section class="resource padding-y-120 section-bg position-relative z-index-1 overflow-hidden">

        <img src="assets/images/shapes/element-moon3.png" alt="" class="element one">
        <img src="assets/images/shapes/curve-pattern3.png" alt=""
            class="d-none position-absolute end-0 top-0 z-index--1">
        <div class="container container-full">

            <div class="working-process-wrapper padding-y-120 position-relative z-index-1 overflow-hidden">
                <img src="assets/images/gradients/working-process-gradient.png" alt="" class="bg--gradient">
                <img src="assets/images/shapes/element3.png" alt="" class="element one">
                <img src="assets/images/shapes/element2.png" alt="" class="element two top-0">

                <div class="section-heading">
                    <h3 class="section-heading__title text-white">Our working process</h3>
                    <p class="section-heading__desc text-white fw-200">Every month we pick some best products for you.</p>
                </div>

                <div class="container container-two">
                    <div class="row gy-4 working-process-item-wrapper">
                        <div class="col-xl-3 col-sm-6 col-xs-6">
                            <div class="working-process-item text-center">
                                <img src="assets/images/shapes/arrow-curve-right.png" alt=""
                                    class="working-process-item__arrow">
                                <span class="working-process-item__number font-heading fw-700 mb-32">1</span>
                                <h5 class="working-process-item__title mb-3 text-white">Understanding</h5>
                                <p class="working-process-item__desc text-white fw-200">Create a new account to work hat
                                    strategy </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-xs-6">
                            <div class="working-process-item text-center">
                                <img src="assets/images/shapes/arrow-curve-right.png" alt=""
                                    class="working-process-item__arrow">
                                <span class="working-process-item__number font-heading fw-700 mb-32">2</span>
                                <h5 class="working-process-item__title mb-3 text-white">Ideation</h5>
                                <p class="working-process-item__desc text-white fw-200">Create a new account to work hat
                                    strategy </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-xs-6">
                            <div class="working-process-item text-center">
                                <img src="assets/images/shapes/arrow-curve-right.png" alt=""
                                    class="working-process-item__arrow">
                                <span class="working-process-item__number font-heading fw-700 mb-32">3</span>
                                <h5 class="working-process-item__title mb-3 text-white">Develop Idea</h5>
                                <p class="working-process-item__desc text-white fw-200">Create a new account to work hat
                                    strategy </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-xs-6">
                            <div class="working-process-item text-center">
                                <img src="assets/images/shapes/arrow-curve-right.png" alt=""
                                    class="working-process-item__arrow">
                                <span class="working-process-item__number font-heading fw-700 mb-32">4</span>
                                <h5 class="working-process-item__title mb-3 text-white">User Testing</h5>
                                <p class="working-process-item__desc text-white fw-200">Create a new account to work hat
                                    strategy </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="selling-product padding-y-120 position-relative z-index-1 overflow-hidden">
        <img src="assets/images/gradients/selling-gradient.png" alt="" class="bg--gradient">

        <img src="assets/images/shapes/element2.png" alt="" class="element one">
        <img src="assets/images/shapes/element1.png" alt="" class="element two">

        <img src="assets/images/shapes/curve-pattern1.png" alt=""
            class="position-absolute start-0 top-0 z-index--1">
        <img src="assets/images/shapes/curve-pattern2.png" alt=""
            class="position-absolute end-0 top-0 z-index--1">

        <div class="container container-two">
            <div class="section-heading style-left style-white flx-between max-w-unset gap-4">
                <div>
                    <h3 class="section-heading__title">Featured Products</h3>
                    <p class="section-heading__desc font-18">Every month we pick some best products for you. This
                        month's best web themes &amp; templates have arrived, chosen by our content specialists.</p>
                </div>
                <a href="all-product.html" class="btn btn-black btn-lg pill fw-300">
                    View All Items
                </a>
            </div>
            <div class="selling-product-slider">
                <div class="product-item shadow-sm overlay-none">
                    <div class="product-item__thumb d-flex max-h-unset">
                        <a href="product-details.html" class="link w-100">
                            <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                        </a>
                    </div>
                    <div class="product-item__content">
                        <h6 class="product-item__title">
                            <a href="product-details.html" class="link">Title here digital products new marketplace
                                theme</a>
                        </h6>
                        <div class="product-item__info flx-between gap-2">
                            <span class="product-item__author">
                                by
                                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                            </span>
                            <div class="flx-align gap-2">
                                <h6 class="product-item__price mb-0">$56</h6>
                                <span class="product-item__prevPrice text-decoration-line-through">$65</span>
                            </div>
                        </div>
                        <div class="product-item__bottom flx-between gap-2">
                            <div>
                                <span class="product-item__sales font-16 mb-2">1230 Sales</span>
                                <ul class="star-rating gap-2">
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="flx-align gap-2">
                                <a href="product-details.html"
                                    class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                    <span class="icon">
                                        <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                        <img src="assets/images/icons/download-white.svg" alt=""
                                            class="dark-version">
                                    </span>
                                </a>
                                <a href="product-details.html" class="btn btn-outline-light pill">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item shadow-sm overlay-none">
                    <div class="product-item__thumb d-flex max-h-unset">
                        <a href="product-details.html" class="link w-100">
                            <img src="assets/images/thumbs/product-img13.png" alt="" class="cover-img">
                        </a>
                    </div>
                    <div class="product-item__content">
                        <h6 class="product-item__title">
                            <a href="product-details.html" class="link">Title here digital products new marketplace
                                theme</a>
                        </h6>
                        <div class="product-item__info flx-between gap-2">
                            <span class="product-item__author">
                                by
                                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                            </span>
                            <div class="flx-align gap-2">
                                <h6 class="product-item__price mb-0">$32</h6>
                                <span class="product-item__prevPrice text-decoration-line-through">$40</span>
                            </div>
                        </div>
                        <div class="product-item__bottom flx-between gap-2">
                            <div>
                                <span class="product-item__sales font-16 mb-2">1230 Sales</span>
                                <ul class="star-rating gap-2">
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="flx-align gap-2">
                                <a href="product-details.html"
                                    class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                    <span class="icon">
                                        <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                        <img src="assets/images/icons/download-white.svg" alt=""
                                            class="dark-version">
                                    </span>
                                </a>
                                <a href="product-details.html" class="btn btn-outline-light pill">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item shadow-sm overlay-none">
                    <div class="product-item__thumb d-flex max-h-unset">
                        <a href="product-details.html" class="link w-100">
                            <img src="assets/images/thumbs/product-img14.png" alt="" class="cover-img">
                        </a>
                    </div>
                    <div class="product-item__content">
                        <h6 class="product-item__title">
                            <a href="product-details.html" class="link">Title here digital products new marketplace
                                theme</a>
                        </h6>
                        <div class="product-item__info flx-between gap-2">
                            <span class="product-item__author">
                                by
                                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                            </span>
                            <div class="flx-align gap-2">
                                <h6 class="product-item__price mb-0">$90</h6>
                                <span class="product-item__prevPrice text-decoration-line-through">$120</span>
                            </div>
                        </div>
                        <div class="product-item__bottom flx-between gap-2">
                            <div>
                                <span class="product-item__sales font-16 mb-2">1230 Sales</span>
                                <ul class="star-rating gap-2">
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="flx-align gap-2">
                                <a href="product-details.html"
                                    class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                    <span class="icon">
                                        <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                        <img src="assets/images/icons/download-white.svg" alt=""
                                            class="dark-version">
                                    </span>
                                </a>
                                <a href="product-details.html" class="btn btn-outline-light pill">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item shadow-sm overlay-none">
                    <div class="product-item__thumb d-flex max-h-unset">
                        <a href="product-details.html" class="link w-100">
                            <img src="assets/images/thumbs/product-img13.png" alt="" class="cover-img">
                        </a>
                    </div>
                    <div class="product-item__content">
                        <h6 class="product-item__title">
                            <a href="product-details.html" class="link">Title here digital products new marketplace
                                theme</a>
                        </h6>
                        <div class="product-item__info flx-between gap-2">
                            <span class="product-item__author">
                                by
                                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                            </span>
                            <div class="flx-align gap-2">
                                <h6 class="product-item__price mb-0">$56</h6>
                                <span class="product-item__prevPrice text-decoration-line-through">$54</span>
                            </div>
                        </div>
                        <div class="product-item__bottom flx-between gap-2">
                            <div>
                                <span class="product-item__sales font-16 mb-2">1230 Sales</span>
                                <ul class="star-rating gap-2">
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="flx-align gap-2">
                                <a href="product-details.html"
                                    class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                    <span class="icon">
                                        <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                        <img src="assets/images/icons/download-white.svg" alt=""
                                            class="dark-version">
                                    </span>
                                </a>
                                <a href="product-details.html" class="btn btn-outline-light pill">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



<script>
    var swiper = new Swiper(".banner-swiper", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        }
    });
</script>
@endsection