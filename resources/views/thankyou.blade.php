@extends('layouts.app')

@section('title', 'Thank you')

@section('content')

    <!-- Hero -->
    {{-- <section class="section-header bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-2 mb-3">Order Complete</h1>
                    <p class="lead">Your order is complete</p>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="page-title" class="page-title-parallax page-title-dark page-title-center skrollable skrollable-between" style="background-image: url(&quot;demos/store/images/contact/page-title.jpg&quot;); background-size: cover; padding: 170px 0px 100px; background-position: 50% -34.0234px;" data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">
        <div class="container clearfix">
            <h1>Order Complete</h1>
            <span>Your order is processed</span>
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol> --}}
        </div>

    </section>
    <div class="section py-7 bg-soft">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                <h2>Thank you for your order</h2>
                    <p>Your order number is #{{$invoice_id}}</p>
                <a href="/" class="btn btn-lg btn-primary">Go Home</a>
                </div>
            </div>
        </div>
    </div>


@endsection
