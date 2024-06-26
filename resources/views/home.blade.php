@extends('layouts.app')
@section('content')

<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12 col-md-12">
                <h6 class="text-uppercase">Don’t look further, here is the key</h6>
                <h1>
                    We’re Industrial solution
                </h1>
                <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et <br> dolore magna aliqua. Ut enim ad minim. sed do eiusmod tempor incididunt.
                </p>
                <a href="#" class="primary-btn header-btn text-uppercase">Get Started</a>
            </div>
            <div class="down-arrow">
                <a href="#product-item-id">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-chevron-double-down"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                        <path fill-rule="evenodd"
                            d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="success-msg">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
</div>

{{-- <section class="cat-area section-gap" id="feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-cat d-flex flex-column">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span
                                class="lnr lnr-magic-wand"></span></span></a>
                    <h4 class="mb-20" style="margin-top: 23px;">Maintenance</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                        conduct standards especially in the workplace. That’s why.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span
                                class="lnr lnr-rocket"></span></span></a>
                    <h4 class="mt-40 mb-20">Residental Service</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                        conduct standards especially in the workplace. That’s why.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span
                                class="lnr lnr-bug"></span></span></a>
                    <h4 class="mt-40 mb-20">Commercial Service</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                        conduct standards especially in the workplace. That’s why.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="tab">
    <div>
        <ul class="d-flex">
            <li class="tab-list-icon"><a href="#product-item-id">Key Feature</a> </li>
            <li class="tab-list-icon"><a href="#application-gallery-id">Application Gallery</a> </li>
            <li class="tab-list-icon"><a href="#market-caption-id">Market Sector</a> </li>
            <li class="tab-list-icon"><a href="#project-id">Project</a> </li>
            <li class="tab-list-icon"><a href="#feedback-id">Feedback</a> </li>
            <li class="tab-list-icon"><a href="#quotation-id">Request Quotation</a> </li>
        </ul>
    </div>
</section>
<section id="product-item-id" class="cat-area section-gap container">
    <h2 style="margin-left: 15px">
        Nonafile
    </h2>
    <div style="display: flex">
        <div class="col-lg-8 col-md-12">
            <p>
                At the forefront of next-generation blown film production, Nonafoil pioneers high-performance recyclable
                barrier films, addressing plastic waste reduction with advanced nine-layer co-extrusion.
            </p>
            <p>
                Nonafoil integrates Industry 4.0 compliance, creating a smart, connected ecosystem for seamless
                operations
                ensuring real-time data utilization and predictive maintenance.
            </p>
            <p>
                As a circular economy champion, Nonafoil prioritizes sustainability from production to end-of-life
                management.
            </p>
            <p>
                Nonafoil offers customized configuration for versatile applications including recyclable barrier films
                with
                an EVOH layer of as low as 2 µm. Nonafoil excels in diverse applications even using recycled materials,
                and
                biomaterials. To conform to strict quality standards, it is equipped with gravimetric dosing and
                blending,
                film thickness measurement with automatic control and integrated supervisory control.
            </p>
            <p>
                Short start-up and changeover times reduce raw material waste, emphasizing productivity, flexibility,
                and
                sustainability. Nonafoil is the machine of choice for optimal blown film quality with maximum output
                rates.
            </p>
        </div>
        <div class="col-lg-4 col-md-12">
            <img class="product-item-img" src="img/product-img.jpg" alt="">
        </div>

    </div>
</section>

<section id="application-gallery-id" class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text">
                <h1>Application Gallery</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>
                    labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 pt-4">
                <div class="single-blog">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt>
                    </div>
                    <div class="single-blog-img">
                        <h5>Heading</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum enim cum, similique hic
                            reprehenderit
                        </p>
                        <a class="secondary-btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="market-caption-id" class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10">Our Capturing Market Sectors</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img src="img/s1.jpg" alt>
                    </div>
                    <h4>Automotive Engineering</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img src="img/s2.jpg" alt>
                    </div>
                    <h4>Construction & Engineering</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img src="img/s3.jpg" alt>
                    </div>
                    <h4>Industrial Engineering</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        women face higher conduct.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-faq">
                    <div class="circle">
                        <div class="inner"></div>
                    </div>
                    <h5><span class="counter">2</span>K+</h5>
                    <p>
                        Projects Completed
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-faq">
                    <div class="circle">
                        <div class="inner"></div>
                    </div>
                    <h5><span class="counter">5.5</span>K</h5>
                    <p>
                        Total Employees
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-faq">
                    <div class="circle">
                        <div class="inner"></div>
                    </div>
                    <h5 class="counter">959</h5>
                    <p>
                        Happy Clients
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-faq">
                    <div class="circle">
                        <div class="inner"></div>
                    </div>
                    <h5 class="counter">367</h5>
                    <p>
                        Tickets Submited
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="project-id" class="project-area section-gap" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
                <h1 class="mb-10">Latest Finished Projects</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <a href="img/p1.jpg" class="img-gal">
                    <img class="img-fluid single-project" src="img/p1.jpg" alt>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="img/p2.jpg" class="img-gal">
                    <img class="img-fluid single-project" src="img/p2.jpg" alt>
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="img/p3.jpg" class="img-gal">
                    <img class="img-fluid single-project" src="img/p3.jpg" alt>
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="img/p4.jpg" class="img-gal">
                    <img class="img-fluid single-project" src="img/p4.jpg" alt>
                </a>
            </div>
        </div>
    </div>
</section>


<section id="feedback-id" class="feedback-area section-gap relative" id="feedback">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10 text-white">Enjoy our Client’s Feedback</h1>
                <p class="text-white">
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>
        <div class="row feedback-contents justify-content-center align-items-center">
            <div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid"
                        src="img/play-btn.png" alt></a>
            </div>
            <div class="col-lg-6 feedback-right">
                <div class="active-review-carusel">
                    <div class="single-feedback-carusel">
                        <div class="title d-flex flex-row">
                            <h4 class="text-white pb-10">Fannie Rowe</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="text-white">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                            scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-feedback-carusel">
                        <div class="title d-flex flex-row">
                            <h4 class="text-white pb-10">Fannie Rowe</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="text-white">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                            scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-feedback-carusel">
                        <div class="title d-flex flex-row">
                            <h4 class="text-white pb-10">Fannie Rowe</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked	"></span>
                            </div>
                        </div>
                        <p class="text-white">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                            scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="quotation-id" class="home-about-area section-gap" id="about">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-md-12 home-about-left">
                <h6>Brand new app to blow your mind</h6>
                <h1>
                    We’ve made a life <br>
                    that will change you
                </h1>
                <p class="sub">We are here to listen from you deliver exellence</p>
                <p class="pb-20">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                </p>
                <a class="primary-btn" href="#">Get Started Now</a>
            </div>
            <div class="col-lg-4 col-md-12 home-about-right relative">
                <form class="form-wrap" method="post" action="{{ route('requestQuote') }}">
                    @csrf
                    <h4 class="text-white pb-20">Request a Quote</h4>
                    <div class="form-select" id="service-select">
                        <select name="service">
                            <option value="1">Select
                                Service</option>
                            <option value="2">Service One</option>
                            <option value="3">Service Two</option>
                            <option value="4">Service Three</option>
                            <option value="5">Service Four</option>
                        </select>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="name">
                    <input type="phone" class="form-control" name="phone" placeholder="Phone Number">
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                    <textarea id cols="30" rows="5" name="msg" placeholder="Message" class="form-control"></textarea>
                    <button class="primary-btn" type="submit">Request Free Quote</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection