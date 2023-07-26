@extends('frontend.layout.master')

@if ($pagemeta)
    @section('title', $pagemeta->meta_title)
    @section('pageDescription', $pagemeta->meta_description)
    @section('pageKeyword', $pagemeta->meta_keywords)
@else
    @section('title', 'Home | ' . $name)
    @section('pageDescription', $website_description)
    @section('pageKeyword', $website_keyword)
@endif
@section('content')

    <section class="mainBg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12">
                            <div class="homeHead">
                                <h1>WELCOME TO <br>XPERTISE CREATIVE STUDIO</h1>
                                <h4>BRANDING, MARKETING, AND MORE.</h4>
                            </div>
                        </div>

                    </div>
                    <div class="scrollBtn">
                        <a href="" class="text-decoration-none">
                            <img src="{{ asset('frontend/assets/images/icons/arrow.png') }}" alt="Xpertise Creative Studio"
                                class="img-fluid" width="30px">
                        </a>
                    </div>
                    <div class="letsTalkBtn">
                        <a href="" class="text-decoration-none">
                            <img src="{{ asset('frontend/assets/images/icons/talkLogo.png') }}"
                                alt="Xpertise Creative Studio" class="img-fluid" width="100px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12">
                            <div class="mainHeading text-center mb-5">
                                <h4><span class="text-red">Who </span> we are?</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 borderWho">
                            <div class="text-center px-5">
                                <div class="mb-3 ">
                                    <center>
                                        <img src="{{ asset('frontend/assets/images/icons/marketing.png') }}" alt="Xpertise Creative Studio" class="img-fluid" width="50px">
                                    </center>
                                </div>
                                <div>
                                    <h5>Digital Marketing</h5>
                                    <p class="fs-14">
                                        We can help you reach your target audience and grow your business. We specialize in social media marketing, email marketing, search engine optimization and much more. Our team of experts can help you create a customized digital marketing strategy that fits your business needs and goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 borderWho">
                            <div class="text-center px-5">
                                <div class="mb-3">
                                    <center>
                                        <img src="{{ asset('frontend/assets/images/icons/engagement.png') }}" alt="Xpertise Creative Studio" class="img-fluid" width="50px">
                                    </center>
                                </div>
                                <div>
                                    <h5>Brand Awareness</h5>
                                    <p class="fs-14">
                                        We can help you reach your target audience and grow your business. We specialize in social media marketing, email marketing, search engine optimization and much more. Our team of experts can help you create a customized digital marketing strategy that fits your business needs and goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4">
                            <div class="text-center px-5">
                                <div class="mb-3">
                                    <center>
                                        <img src="{{ asset('frontend/assets/images/icons/awareness.png') }}" alt="Xpertise Creative Studio" class="img-fluid" width="50px">
                                    </center>
                                </div>
                                <div>
                                    <h5>Customer Engagement</h5>
                                    <p class="fs-14">
                                        We can help you build strong relationships with your customers and increase customer loyalty. Our team of experts can help you create a customer engagement strategy that fits your business needs and goals. Whether you're looking to increase customer satisfaction or improve customer retention.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
