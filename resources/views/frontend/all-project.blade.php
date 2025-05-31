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
                <div class="filter-tab gap-3 flx-between">
                    <!-- <button type="button" class="filter-tab__button btn btn-outline-light pill d-flex align-items-center">
                        <span class="icon icon-left"><img src="assets/images/icons/filter.svg" alt=""></span>
                        <span class="font-18 fw-500">Filters</span>
                    </button> -->
                    <div class="list-grid d-flex align-items-center gap-2">
                        <button class="list-grid__button list-button d-sm-flex d-none text-body"><i class="las la-list"></i></button>
                        <button class="list-grid__button grid-button d-sm-flex d-none active text-body"><i class="las la-border-all"></i></button>
                        <button class="list-grid__button sidebar-btn text-body d-lg-none d-flex"><i class="las la-bars"></i></button>
                    </div>
                </div>
                <!-- <form action="#" class="filter-form pb-4 ">
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
                </form> -->
            </div>
            <div class="col-xl-3 col-lg-4">
                <!-- ===================== Filter Sidebar Start ============================= -->
                <div class="filter-sidebar">
                    <button type="button" class="filter-sidebar__close p-2 position-absolute end-0 top-0 z-index-1 text-body hover-text-main font-20 d-lg-none d-block"><i class="las la-times"></i></button>
                    <div class="filter-sidebar__item">
                        <button type="button" class="filter-sidebar__button font-16 text-capitalize fw-500">Category</button>
                        <div class="filter-sidebar__content">
                            <ul class="filter-sidebar-list">
                                @foreach($categories as $category)
                                <li class="filter-sidebar-list__item">
                                    <a href="{{ route('ads.by.category', $category->id) }}" class="filter-sidebar-list__text">
                                        {{$category->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- ===================== Filter Sidebar End ============================= -->
            </div>
            @php use Illuminate\Support\Str; @endphp
            <div class="col-xl-9 col-lg-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab" tabindex="0">
                        <div class="row gy-4 list-grid-wrapper">

                            <div class="row">
                                @foreach ($ads as $ad)
                                <div class="col-6 col-sm-6 col-lg-4 col-xl-4 gy-5">
                                    <div class="product-item">
                                        <div class="product-item__thumb d-flex max-h-unset">
                                            <a href="{{route('frontend.project-details', $ad->slug)}}" class="link w-100">
                                                <img src="{{ asset('storage/' . $ad->img) }}" alt="" class="cover-img">
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
                                            @if ($ad->contact)
                                            <div class="product-item__bottom flx-between gap-2">
                                                <div>
                                                    <span
                                                        class="product-item__sales font-14 mb-2">{{ $ad->contact }}</span>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach

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
                        <!-- Pagination Start -->
                        <!-- <nav aria-label="Page navigation example">
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
                        </nav> -->
                        <!-- Pagination End -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== All Product Section End ====================== -->



@endsection