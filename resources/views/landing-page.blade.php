@extends('layouts.app')

@section('title','Home')

@section('content')

{{-- <section class="section-header" style="background-image: url({{is_null(setting('home.banner'))?'/frontend/img/main2.png':Voyager::image(setting('home.banner'))}});">
    <div class="container">
      <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
          <h1 class="mb-2">{{setting('home.hero_title')}}</h1>
          <div class="intro-text text-center text-md-left">
            <p class="mb-4">{{setting('home.hero_subtitle')}}</p>
            <p>
              <a href="/shop" class="btn btn-lg btn-primary">Shop Now</a>
            </p>
          </div>
        </div>
      </div>
    </div>

</section> --}}

<section id="slider" class="slider-element swiper_wrapper min-vh-100" data-loop="true" data-speed="1000" data-autoplay="5000">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="cursor: grab;">
            <div class="swiper-wrapper" id="swiper-wrapper-822ffb7f4fcfac6d" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1558px, 0px, 0px);"><div class="swiper-slide dark swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p>
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                              </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('/frontend/img/slide1.png');"></div>
                </div>
                <div class="swiper-slide dark swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p>
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                            </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('/frontend/img/slide3.png');"></div>
                </div>
                <div class="swiper-slide dark swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p>
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                            </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.1), rgba(0,0,0,.6)), url('/frontend/img/slide4.png');"></div>
                </div>
                <div class="swiper-slide dark swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p style="align:center">
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                            </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('/frontend/img/slide5.jpeg');"></div>
                </div>
            <div class="swiper-slide dark swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p>
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                            </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('/frontend/img/slide4.png');"></div>
                </div></div>
            <div class="slider-arrow-left" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-822ffb7f4fcfac6d"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-822ffb7f4fcfac6d"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current">2</div><span>/</span><div class="slide-number-total">3</div></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>



    </div>
</section>
    <div class="slider-inner">

        <div class="swiper-container swiper-parent swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="cursor: grab;">
            <div class="swiper-wrapper" id="swiper-wrapper-822ffb7f4fcfac6d" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1558px, 0px, 0px);"><div class="swiper-slide dark swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p>
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                              </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('/frontend/img/slide1.png');"></div>
                </div>
                <div class="swiper-slide dark swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p>
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                            </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('/frontend/img/slide3.png');"></div>
                </div>
                <div class="swiper-slide dark swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p>
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                            </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.1), rgba(0,0,0,.6)), url('/frontend/img/slide5.png');"></div>
                </div>
                <div class="swiper-slide dark swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p style="align:center">
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                            </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('/frontend/img/slide4.png');"></div>
                </div>
            <div class="swiper-slide dark swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 779px;">
                    <div class="container">
                        {{-- <div class="slider-caption">
                            <p>
                                <a href="/shop" data-animate="fadeInUp" data-delay="200" class="button button-large button-white button-light not-animated">Shop Now</a>
                            </p>
                        </div> --}}
                    </div>
                    <div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(0,0,0,.2), rgba(0,0,0,.3)), url('/frontend/img/slide4.png');"></div>
                </div></div>
            <div class="slider-arrow-left" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-822ffb7f4fcfac6d"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-822ffb7f4fcfac6d"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current">2</div><span>/</span><div class="slide-number-total">3</div></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>



    </div>
</section>



{{-- <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-100 include-header slider-parallax-visible" style="margin-top: -101px;">
    <div class="slider-inner" style="transform: translate3d(0px, 0px, 0px); height: 668px;">

        <div class="swiper-container swiper-parent swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="cursor: grab;">
            <div class="swiper-wrapper" id="swiper-wrapper-c9257418bac14b16" aria-live="off">
                <div class="swiper-slide dark swiper-slide-active" style="width: 779px;" role="group" aria-label="1 / 3">
                    <div class="container">
                        <div class="slider-caption slider-caption-center" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                            <h2 data-animate="fadeInUp" class="fadeInUp animated">Welcome to Canvas</h2>
                            <p class="d-none d-sm-block fadeInUp animated" data-animate="fadeInUp" data-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('/frontend/img/slide1.png');"></div>
                </div>
                <div class="swiper-slide dark swiper-slide-next" style="width: 779px;" role="group" aria-label="2 / 3">
                    <div class="container">
                        <div class="slider-caption slider-caption-center" style="opacity: 1;">
                            <h2 data-animate="fadeInUp" class="not-animated">Beautifully Flexible</h2>
                            <p class="d-none d-sm-block not-animated" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <video poster="images/videos/deskwork.jpg" preload="auto" loop="" autoplay="" muted="" style="width: 1187.56px; height: 668px; left: -204.278px;">
                            <source src="images/videos/deskwork.mp4" type="video/mp4">
                            <source src="images/videos/deskwork.webm" type="video/webm">
                        </video>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                    </div>
                </div>
                <div class="swiper-slide" style="width: 779px;" role="group" aria-label="3 / 3">
                    <div class="container">
                        <div class="slider-caption" style="opacity: 1;">
                            <h2 data-animate="fadeInUp" class="not-animated">Great Performance</h2>
                            <p class="d-none d-sm-block not-animated" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('/frontend/img/slide1.png'); background-position: center top;"></div>
                </div>
            </div>
            <div class="slider-arrow-left swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c9257418bac14b16" aria-disabled="true" style="opacity: 1;"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c9257418bac14b16" aria-disabled="false" style="opacity: 1;"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current">1</div><span>/</span><div class="slide-number-total">3</div></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

    </div>
</section> --}}

<section class="section-header bg-soft">
<div class="site-section site-blocks-2">
    <div class="container">
      <div class="row">
        @foreach ($categories as $category)
            <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a class="block-2-item" href="/shop/category?category={{$category->slug}}">
                    <figure class="image">
                        <img src="{{is_null($category->image)?'/frontend/img/default.png':Voyager::image($category->image)}}" alt="category" class="img-fluid">
                    </figure>
                    <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>{{$category->name}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
      </div>
    </div>
</div>
</section>

<section class="section section-lg pt-6">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-md-7">
            <div class="col-12 col-md-8 text-center">
                <h2 class="h1 font-weight-bolder mb-4">Latest products</h2>
                <p class="lead">See our variety range of products</p>
            </div>
        </div>
        <div class="row">
            @include('sections.product')
        </div>
    </div>
</section>

<section class="section section-lg pt-6">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-md-7">
            <div class="col-12 col-md-8 text-center">
                <h2 class="h1 font-weight-bolder mb-4">Featured products</h2>
                <p class="lead">See our featured products</p>
            </div>
        </div>
        <div class="row">
            <?php $products=$featured_products;?>
            @include('sections.product')
        </div>
    </div>
</section>

{{-- @include('sections.testimonial') --}}
@include('sections.brand')

@endsection
