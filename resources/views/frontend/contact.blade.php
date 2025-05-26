@extends('layouts.frontend')
@section('title')
Contact |
@endsection
@section('page-title')
Contact |
@endsection

@section('content')
<section class="contact padding-t-120 padding-b-60 section-bg position-relative z-index-1 overflow-hidden">
    <img src="assets/images/gradients/banner-two-gradient.png" alt="" class="bg--gradient">
    <img src="assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">

    <div class="container container-two">
        <div class="row gy-4">
            <div class="col-lg-5">
                <div class="contact-info">
                    <h3 class="contact-info__title">Get in touch with us today</h3>
                    <p class="contact-info__desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum rem facere labore cupiditate sint? Animi quis illo suscipit autem cum.</p>

                    <div class="contact-info__item-wrapper flx-between gap-4">
                        <div class="contact-info__item">
                            <span class="contact-info__text text-capitalize d-block mb-1">Give Us A Call</span>
                            <a href="tel:+8801602541016" class="contact-info__link font-24 fw-500 text-heading hover-text-main">+880 160 254 1016</a>
                        </div>
                        <div class="contact-info__item">
                            <span class="contact-info__text text-capitalize d-block mb-1">Give Us An Email</span>
                            <a href="tel:varabikroybd@gmail.com" class="contact-info__link font-24 fw-500 text-heading hover-text-main">varabikroybd@gmail.com</a>
                        </div>
                    </div>

                    <div class="mt-24">
                        <ul class="social-icon-list">
                            <li class="social-icon-list__item">
                                <a href="https://www.facebook.com/profile.php?id=100065029298623" class="social-icon-list__link flx-center"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icon-list__item">
                                <a href="https://wa.me/01602541016" class="social-icon-list__link flx-center"><i
                                        class="fab fa-whatsapp"></i></a>
                            </li>
                            <li class="social-icon-list__item">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=varabikroybd@gmail.com" target="_blank" class="social-icon-list__link flx-center"><i
                                        class="	fas fa-envelope-open"></i></a>
                            </li>
                            <li class="social-icon-list__item">
                                <a href="tel:+8801602541016" class="social-icon-list__link flx-center"><i
                                        class="fas fa-phone-alt"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="card common-card p-sm-4">
                    <div class="card-body">
                        <form id="contactForm" action="{{route('email.store')}}" method="POST" >

                            @csrf

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif

                            <div class="row gy-4">
                                <div class="col-sm-6 col-xs-6">
                                    <label for="name" class="form-label mb-2 font-18 font-heading fw-600">Full Name</label>
                                    <input type="text" class="common-input common-input--grayBg border" name="name" id="name" value="{{old('name')}}" placeholder="Your name here">
                                    @error('name')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <label for="email" class="form-label mb-2 font-18 font-heading fw-600">Your Mail</label>
                                    <input type="email" class="common-input common-input--grayBg border" name="email" id="email" value="{{old('email')}}" placeholder="Your email here ">
                                    @error('email')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <label for="email" class="form-label mb-2 font-18 font-heading fw-600">Contact No</label>
                                    <input type="number" class="common-input common-input--grayBg border" name="phone" id="phone" value="{{old('phone')}}" placeholder="Your email here ">
                                    @error('phone')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <label for="category" class="form-label mb-2 font-18 font-heading fw-600">Select Category</label>
                                    <select class="common-input common-input--grayBg border" id="category" name="category" value="{{old('category')}}">
                                        <option value="">
                                            <p>Select Category</p>
                                        </option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="message" class="form-label mb-2 font-18 font-heading fw-600">Your Message</label>
                                    <textarea class="common-input common-input--grayBg border" id="msg" name="msg" value="{{old('msg')}}" placeholder="Write Your Message Here"></textarea>
                                    @error('msg')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-main btn-lg pill w-100" type="submit"> Submit Now </button>
                                </div>
                                <div id="form-response" style="margin-top: 5%;"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            console.log('Form intercepted');

            $('#form-response').html('');

            $.ajax({
                url: "{{ route('email.store') }}",
                method: "POST",
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function(res) {
                    $('#form-response').html('<div class="alert alert-success">Thanks for contacting us!</div>');
                    $('#contactForm')[0].reset();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorHtml = '<div class="alert alert-danger"><ul>';
                        $.each(errors, function(key, value) {
                            errorHtml += '<li>' + value[0] + '</li>';
                        });
                        errorHtml += '</ul></div>';
                        $('#form-response').html(errorHtml);
                    } else {
                        $('#form-response').html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
                    }
                }
            });
        });
    });
</script>






<section class="popular padding-y-120 overflow-hidden">
    <div class="container container-two">
        <div class="section-heading style-left mb-64">
            <h5 class="section-heading__title">Popular Categories</h5>
        </div>
        <div class="popular-slider arrow-style-two row gy-4">
            @foreach($categories as $category)
            <div class="col-lg-2">
                <a href="all-product.html" class="popular-item w-100">
                    <span class="popular-item__icon">
                        <img src="{{asset('storage' . $category->icon ) }}" alt="">
                    </span>
                    <h6 class="popular-item__title font-18">{{$category->name}}</h6>
                    
                </a>
            </div>
            @endforeach
          
        </div>
    </div>
</section>

<!-- =========================== Contact Section Start ========================== -->

<!-- =========================== Contact Section End ========================== -->

<!-- ===================== Newsletter Two Start ============================ -->





<section class="newsletter position-relative z-index-1 overflow-hidden">
    <img src="assets/images/gradients/newsletter-gradient-bg.png" alt="" class="bg--gradient">

    <img src="assets/images/shapes/element1.png" alt="" class="element two">
    <img src="assets/images/shapes/element2.png" alt="" class="element one">

    <img src="assets/images/shapes/line-vector-one.png" alt="" class="line-vector one">
    <img src="assets/images/shapes/line-vector-two.png" alt="" class="line-vector two">

    <img src="assets/images/logo/white-logo.png" alt="" class="newsletter-man" style="width:10%; height:auto; margin-bottom: 2%;">

    <div class="container container-two">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="newsletter-content">
                    <h3 class="newsletter-content__title text-white mb-2 text-center">Get update Newsletter</h3>
                    <p class="newsletter-content__desc pb-2 text-white text-center font-18 fw-300">Subscribe our
                        newsletter to get the latest news</p>

                    <form action="#" class="mt-4 newsletter-box position-relative">
                        <input type="text" class="form-control common-input common-input--lg pill text-white"
                            placeholder="Enter Mail">
                        <button type="submit" class="btn btn-main btn-lg pill flx-align gap-1">Subscribe <span
                                class="text d-sm-flex d-none">Now</span> </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection