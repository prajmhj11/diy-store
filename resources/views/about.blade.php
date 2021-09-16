@extends('layouts.app')

@section('title','About')

@section('content')
<!-- Hero -->
{{-- <section class="section-header  bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-3">Know more about us</h1>
                <p class="lead">Know about us how we started our journey </p>
            </div>
        </div>
    </div>

</section> --}}

<section id="page-title" class="page-title-parallax page-title-dark page-title-center skrollable skrollable-between" style="background-image: url(&quot;demos/store/images/contact/page-title.jpg&quot;); background-size: cover; padding: 170px 0px 100px; background-position: 50% -34.0234px;" data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">
    <div class="container clearfix">
        <h1>About Us</h1>
        <span>Get to know our Journey</span>
        {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol> --}}
    </div>

</section>
<section class="section pt-0">
    <div class="container section  pt-lg-1">
        <div class="row justify-content-center">
            <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                <a class="col-md-6 col-lg-6"><img src="{{is_null(setting('home.about_image'))?'/frontend/img/default.png':Voyager::image(setting('home.about_image'))}}" alt="img" class="card-img-top" /></a>
                <div class="card-body d-flex flex-column justify-content-between col-auto py-4 p-lg-5">
                    <h2>About Us</h2>

                    {!!clean(setting('home.about'))!!}
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section section-lg  line-bottom-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 text-center px-4 mb-5 mb-lg-0">
                <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <h5 class="mb-3">Email us</h5>

            <a class="font-weight-bold text-primary">{{setting('contact.email')}}</a>
            </div>
            <div class="col-12 col-md-4 text-center px-4 mb-5 mb-lg-0">
                <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <h5 class="mb-3">Call us</h5>

                <a class="font-weight-bold text-primary">{{setting('contact.phone')}}</a>
            </div>
            <div class="col-12 col-md-4 text-center px-4">
                <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h5 class="mb-3">Location</h5>
                <a class="font-weight-bold text-primary">{{setting('contact.location')}}</a>

            </div>
        </div>
    </div>
</div>
{{-- @include('sections.member')
@include('sections.testimonial') --}}
@include('sections.brand')
@endsection
