@extends('frontend.layouts.master')

@section('title')
Bhojwani Constructions | Home
@endsection

@push('styles')
@endpush

@section('content')
{{-- Main Slider Section Start --}}
<section class="main-slider-one">
    <div class="main-slider-one__carousel wallpi-owl__carousel owl-carousel" 
        data-owl-options='{
            "loop": true,
            "animateOut": "fadeOut",
            "animateIn": "fadeIn",
            "items": 1,
            "autoplay": false,
            "autoplayTimeout": 7000,
            "smartSpeed": 1000,
            "nav": true,
            "navText": ["<span class=\"icon-left-arrow1\"></span>","<span class=\"icon-right-arrow1\"></span>"],
            "dots": false,
            "margin": 0
        }'>
        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg" style="background-image: url({{ asset('frontend/assets/images/banner/banner-3.webp') }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-slider-one__content">
                                <span class="main-slider-one__tag-title">We Are</span>
                                <h1 class="main-slider-one__title">Find the right home for your family </h1>
                                <div class="main-slider-one__btn">
                                    <a href="#" class="wallpi-btn hero-btn"><span>View Our Project</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg" style="background-image: url({{ asset('frontend/assets/images/banner/banner-2.webp') }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-slider-one__content">
                                <span class="main-slider-one__tag-title">We Are</span>
                                <h1 class="main-slider-one__title">Find a Spacious & Cozy Home Abode.</h1>
                                <div class="main-slider-one__btn">
                                    <a href="#" class="wallpi-btn hero-btn"><span>View Our Project</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Feature Section Start --}}
<section class="popular-project-one">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="popular-project-one__info">
                    <p class="popular-project-one__text">
                        Bhojwani Constructions crafts luxurious homes in Pune's PCMC area, blending modern design, premium materials, and thoughtful details. With a legacy of excellence, we create spaces that embody innovation, comfort, and timeless elegance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Project Section Start --}}
<section class="project-one project-one--two">
    <div class="container">
        <div class="row project-one__row">
            <div class="col-md-12">
                <div class="sec-title">
                    <span class="sec-title__tagline">Latest Projects</span>
                    <h2 class="sec-title__title">Our Projects</h2>
                </div>
            </div>
        </div>
        <div class="project-one__carousel wallpi-owl__carousel wallpi-owl__carousel--with-shadow wallpi-owl__carousel--basic-nav owl-carousel"
            data-owl-options='{
                    "items": 1,
                    "margin": 0,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": true,
                    "navText": ["<span class=\"icon-left-arrow1\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                    "dots": true,
                    "autoplay": false,
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "992": {
                            "items": 2,
                            "margin": 15
                        },
                        "1200": {
                            "items": 3,
                            "margin": 30
                        }
                    }
                }'
            >

            <div class="item">
                <div class="project-one__item">
                    <div class="project-one__item__image">
                        <img src="{{ asset('frontend/assets/images/projects/p1.webp') }}" alt="project">
                    </div>

                    <div class="project-one__item__info">
                        <div class="project-one__item__bg">
                            <strong class="project-one__item__text">Lorem Ipsum</strong>
                            <h4 class="project-one__item__heading"><a href="portfolio-details.html">The West Ford</a></h4>
                            <a href="portfolio-details.html" class="project-one__item__right-arrow">
                                <i class="icon-arrow-small-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__item">
                    <div class="project-one__item__image">
                        <img src="{{ asset('frontend/assets/images/projects/p2.webp') }}" alt="project">
                    </div>

                    <div class="project-one__item__info">
                        <div class="project-one__item__bg">
                            <strong class="project-one__item__text">Lorem Ipsum</strong>
                            <h4 class="project-one__item__heading"><a href="portfolio-details.html">The West Ford</a></h4>
                            <a href="portfolio-details.html" class="project-one__item__right-arrow">
                                <i class="icon-arrow-small-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__item">
                    <div class="project-one__item__image">
                        <img src="{{ asset('frontend/assets/images/projects/p3.webp') }}" alt="project">
                    </div>

                    <div class="project-one__item__info">
                        <div class="project-one__item__bg">
                            <strong class="project-one__item__text">Lorem Ipsum</strong>
                            <h4 class="project-one__item__heading"><a href="portfolio-details.html">The West Ford</a></h4>
                            <a href="portfolio-details.html" class="project-one__item__right-arrow">
                                <i class="icon-arrow-small-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__item">
                    <div class="project-one__item__image">
                        <img src="{{ asset('frontend/assets/images/projects/p4.webp') }}" alt="project">
                    </div>

                    <div class="project-one__item__info">
                        <div class="project-one__item__bg">
                            <strong class="project-one__item__text">Lorem Ipsum</strong>
                            <h4 class="project-one__item__heading"><a href="portfolio-details.html">The West Ford</a></h4>
                            <a href="portfolio-details.html" class="project-one__item__right-arrow">
                                <i class="icon-arrow-small-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- About Us Section Start --}}
<section class="about-two">
    <div class="about-two__shapeleft" style="background-image: url({{ asset('frontend/assets/images/shapes/about-shape2-3.png') }});"></div>
    <div class="about-two__shaperight" style="background-image: url({{  asset('frontend/assets/images/shapes/about-shape2-4.webp') }});"></div>
    <div class="container">
        <div class="row about-two__row align-items-center">
            <div class="about-two__imagecol wow fadeInRight" data-wow-delay="300ms">
                <div class="about-two__imagecol__image">
                    <img src="{{ asset('frontend/assets/images/about-us/about-1.webp') }}" alt="">
                </div>
                <div class="about-two__imagecol__imagesmall">
                    <img src="{{ asset('frontend/assets/images/about-us/about-2.webp') }}" alt="">
                </div>
            </div>

            <div class="about-two__contentcol wow fadeInLeft" data-wow-delay="300ms">
                <div class="sec-title">


                    <span class="sec-title__tagline">About Company</span>

                    <h2 class="sec-title__title">Welcome to <br />Bhojwani Constructions</h2>
                </div>

                <p class="about-two__contentcol__text">
                    Bhojwani Constructions is a distinguished name in Pune's real estate landscape, renowned for 
                    crafting luxurious residences in the thriving neighborhoods around PCMC. With a legacy of excellence, 
                    we combine cutting-edge architecture, superior materials, and modern amenities to deliver homes designed 
                    for contemporary, forward-thinking living. Our strength lies in a passionate, experienced team that ensures 
                    every detail—no matter how small—is flawlessly executed. From meticulous planning to the final touches, we 
                    are committed to creating spaces that reflect both luxury and comfort. At Bhojwani Constructions, our goal 
                    is simple: to build homes that inspire, combining innovation and craftsmanship to turn your vision of modern 
                    living into a reality.
                </p>
                <div class="about-two__contentcol__btnwrap">
                    <a href="#" class="wallpi-btn about-one--btn"><span>Explore more</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Years Of Experience Section Start --}}
<section class="funfact-one">
    <div class="container">
        <div class="funfact-one__bg" style="background-image: url({{ asset('frontend/assets/images/backgrounds/funfact-bg1-1.jpg') }});"></div>
        <ul class="list-unstyled funfact-one__list">
            <li class="funfact-one__item count-box">
                <div class="funfact-one__content text-center">
                    <i class="funfact-one__icon icon-img-box"></i>
                    <div class="funfact-one__count-wrap">
                        <strong class="funfact-one__count count-text" data-stop="15" data-speed="1500"></strong>
                    </div>
                    <p class="funfact-one__text">Years Of Experience</p>
                </div>
            </li>

            <li class="funfact-one__item count-box">
                <div class="funfact-one__content text-center">
                    <i class="funfact-one__icon icon-book-check"></i>
                    <div class="funfact-one__count-wrap">
                        <strong class="funfact-one__count count-text" data-stop="10" data-speed="1500"></strong>
                        <span class="funfact-one__counter-num">K+</span>
                    </div>
                    <p class="funfact-one__text">Customers Satisfaction</p>
                </div>
            </li>

            <li class="funfact-one__item count-box">
                <div class="funfact-one__content text-center">
                    <i class="funfact-one__icon icon-folder-check"></i>
                    <div class="funfact-one__count-wrap">
                        <strong class="funfact-one__count count-text" data-stop="14" data-speed="1500"></strong>
                        <span class="funfact-one__counter-num">K+</span>
                    </div>
                    <p class="funfact-one__text">Projects Worldwide</p>
                </div>
            </li>

            <li class="funfact-one__item count-box">
                <div class="funfact-one__content text-center">
                    <i class="funfact-one__icon icon-user"></i>
                    <div class="funfact-one__count-wrap">
                        <strong class="funfact-one__count count-text" data-stop="11" data-speed="1500"></strong>
                        <span class="funfact-one__counter-num">K+</span>
                    </div>
                    <p class="funfact-one__text">Our Recent Client</p>
                </div>
            </li>
        </ul>
    </div>
</section>

{{-- Testimonials Section Start --}}
<section class="testimonials-one testimonials-one--two">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title">
                    <span class="sec-title__tagline">Testimonial</span>
                    <h2 class="sec-title__title">What Does The Customer <br> Have To Say?</h2>
                </div>
            </div>
        </div>
        <div class="testimonials-one__carousel wallpi-owl__carousel wallpi-owl__carousel--with-shadow wallpi-owl__carousel--basic-nav owl-carousel" 
            data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": true,
                "smartSpeed": 700,
                "nav": true,
                "navText": ["<span class=\"icon-left-arrow1\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                "dots": true,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "992": {
                        "items": 2,
                        "margin": 15
                    },
                    "1200": {
                        "items": 3,
                        "margin": 30
                    }
                }
            }'>
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div>
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="{{ asset('frontend/assets/images/resources/testimonial-owner1-1.png') }}" alt="Robin Kaolaip">
                            </div>

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Robin Kaolaip</h5>
                                <p class="testimonials-card__designation">Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div>
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="{{ asset('frontend/assets/images/resources/testimonial-owner1-2.png') }}" alt="Forida Lara">
                            </div>

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Forida Lara</h5>`
                                <p class="testimonials-card__designation">Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="{{ asset('frontend/assets/images/resources/testimonial-owner1-3.png') }}" alt="Alndo Almas">
                            </div>

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Alndo Almas</h5>`
                                <p class="testimonials-card__designation">Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="testimonials-card__inner">
                        <div class="testimonials-card__top d-flex align-items-center justify-content-between">
                            <i class="icon-quote testimonials-card__quote"></i>
                            <div class="testimonials-card__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!-- /.testimonials-card__top -->
                        <div class="testimonials-card__content">
                            Lorem ipsum dolor sit amet, consec adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </div><!-- /.testimonials-card__content -->
                        <div class="testimonials-card__athour-wrap d-flex align-items-center">
                            <div class="testimonials-card__image">
                                <img src="{{ asset('frontend/assets/images/resources/testimonial-owner1-1.png') }}" alt="Robin Kaolaip">
                            </div>

                            <div class="testimonials-card__athour-name">
                                <h5 class="testimonials-card__name"> Robin Kaolaip</h5>`
                                <p class="testimonials-card__designation">Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.testimonials-one__carousel -->
    </div><!-- /.container -->
</section>

{{-- Blog Section Start --}}
<section class="blog-one blog-one--two">
    <div class="blog-one__bg" style="background-image: url({{ asset('frontend/assets/images/backgrounds/blog-bg1-1.jpg') }});"></div>
    <div class="container">
        <div class="sec-title">
            <span class="sec-title__tagline">Our Blog</span>
            <h2 class="sec-title__title">News & Articles</h2>
        </div>
        <div class="blog-one__carousel wallpi-owl__carousel wallpi-owl__carousel--with-shadow wallpi-owl__carousel--basic-nav owl-carousel owl-theme" 
            data-owl-options='{
                "items": 1,
                "margin": 30,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "navText": "",
                "dots": false,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1,
                        "dots": true
                    },
                    "768": {
                        "items": 2,
                        "dots": false
                    },
                    "992": {
                        "items": 3
                    }
                }
            }'>
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="blog-card__image">
                        <img src="{{ asset('frontend/assets/images/blogs/blog-1.webp') }}" alt="Nemo Enim Ipsam Volu Tatem Quia Voluptas">
                        <a href="#" class="blog-card__image__link"></a>
                    </div>

                    <div class="blog-card__content">
                        <span class="blog-card__tagtext">Lorem ipsum</span>
                        <h5 class="blog-card__title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5><!-- /.blog-card__title -->
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <i class="icon-user1"></i>
                                    By Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-comment-outline"></i>
                                    10 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="blog-card__image">
                        <img src="{{ asset('frontend/assets/images/blogs/blog-2.webp') }}" alt="Creating a Purpose-Driven Tech Culture at Chase">
                        <a href="#" class="blog-card__image__link"></a>
                    </div>

                    <div class="blog-card__content">
                        <span class="blog-card__tagtext">Lorem ipsum</span>
                        <h5 class="blog-card__title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5><!-- /.blog-card__title -->
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <i class="icon-user1"></i>
                                    By Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-comment-outline"></i>
                                    10 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="blog-card__image">
                        <img src="{{ asset('frontend/assets/images/blogs/blog-3.webp') }}" alt="At Vero Eos Et Accusamus  Et Iusto Odio Dignissimos">
                        <a href="#" class="blog-card__image__link"></a>
                    </div>

                    <div class="blog-card__content">
                        <span class="blog-card__tagtext">Lorem ipsum</span>
                        <h5 class="blog-card__title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5><!-- /.blog-card__title -->
                        <ul class="list-unstyled blog-card__meta">
                            <li>
                                <a href="#">
                                    <i class="icon-user1"></i>
                                    By Admin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-comment-outline"></i>
                                    10 Comments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
@endpush