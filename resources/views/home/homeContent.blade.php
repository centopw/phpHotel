@extends('layouts.home.welcome')

@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                @foreach ($sliders as $slider)
                    <li style="background-image: url(storage/slider_images/{{ $slider->slider_image }})">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-12 col-md-offset-0 text-center slider-text">
                                <div class="slider-text-inner js-fullheight">
                                    <div class="desc">
                                        <h2 class="subheading mb-4">{{ $slider->description1 }}</h2>
                                        <h1 style="color: #fff" class="mb-2">{{ $slider->description2 }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>
    <div id="featured-hotel" class="fh5co-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Featured Hotels</h2>
                    </div>
                </div>
            </div>

            <div class="hotels" style="display: grid; grid-template-columns: auto auto ; gap: 5px">


                @foreach ($hotels as $hotel)
                    @php $imageCount = 1 @endphp
                    <div style="background: #fff; width: 59rem; border-radius: 2rem; padding:1rem">
                        <div class="hotel_image">
                            @php
                                $sliderImages = str_replace(
                                    'public/slider_images',
                                    '',
                                    json_decode($hotel->sliderImage),
                                );
                            @endphp
                            @foreach ($sliderImages as $sliderImage)
                                @if ($imageCount == 1)
                                    @php $imageCount = 2 @endphp
                                    <a href="{{ url('hotels/' . $hotel->name) }}">
                                        <img src="{{ asset('storage/slider_images/' . $sliderImage) }}"
                                            alt="Please Upload An Image"
                                            style="border-radius: 1rem; margin-bottom: 10px; width: 570px; height: 300px">
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <h3>{{ $hotel->name }}</h3>
                        <p>{{ $hotel->aboutDescription }}</p>
                        <p><a href="{{ url('hotels/' . $hotel->name) }}" class="btn btn-primary btn-luxe-primary">Book Now
                                <i class="ti-angle-right"></i></a></p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <div id="hotel-facilities">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Hotel Facilities</h2>
                    </div>
                </div>
            </div>
            <div id="tabs">
                <nav class="tabs-nav">
                    <a href="#" class="active" data-tab="tab1">
                        <i class="flaticon-restaurant icon"></i>
                        <span>Restaurant</span>
                    </a>
                    <a href="#" data-tab="tab2">
                        <i class="flaticon-cup icon"></i>
                        <span>Refreshment</span>
                    </a>
                    <a href="#" data-tab="tab3">

                        <i class="flaticon-car icon"></i>
                        <span>Pick-up</span>
                    </a>
                    <a href="#" data-tab="tab4">

                        <i class="flaticon-swimming icon"></i>
                        <span>Swimming Pool</span>
                    </a>
                    {{--                    <a href="#" data-tab="tab5"> --}}

                    {{--                        <i class="flaticon-massage icon"></i> --}}
                    {{--                        <span>Spa</span> --}}
                    {{--                    </a> --}}
                    <a href="#" data-tab="tab6">

                        <i class="flaticon-bicycle icon"></i>
                        <span>Gym</span>
                    </a>
                </nav>
                <div class="tab-content-container">
                    <div class="tab-content active show" data-tab-content="tab1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/home-assets/images/tab_img_1.jpg') }}" class="img-responsive"
                                        alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Restaurant</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae
                                        rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem
                                        quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis
                                        perferendis earum fugit impedit molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis
                                        eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat
                                        dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/home-assets/images/tab_img_2.jpg') }}" class="img-responsive"
                                        alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Refreshment</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae
                                        rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem
                                        quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis
                                        perferendis earum fugit impedit molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis
                                        eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat
                                        dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/home-assets/images/tab_img_3.jpg') }}"
                                        class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Pick Up</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae
                                        rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem
                                        quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis
                                        perferendis earum fugit impedit molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis
                                        eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat
                                        dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/home-assets/images/tab_img_4.jpg') }}"
                                        class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Swimming Pool</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae
                                        rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem
                                        quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis
                                        perferendis earum fugit impedit molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis
                                        eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat
                                        dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab6">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/home-assets/images/tab_img_6.jpg') }}"
                                        class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Gym</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae
                                        rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem
                                        quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis
                                        perferendis earum fugit impedit molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis
                                        eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat
                                        dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Happy Customer Says...</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimony">
                        <blockquote>
                            &ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of
                            charge to the Premium Suite, thanks so much&rdquo;
                        </blockquote>
                        <p class="author"><cite>John Doe</cite></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimony">
                        <blockquote>
                            &ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and
                            attentive. Highly Recommended&rdquo;
                        </blockquote>
                        <p class="author"><cite>Rob Smith</cite></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimony">
                        <blockquote>
                            &ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of
                            charge to the Premium Suite, thanks so much&rdquo;
                        </blockquote>
                        <p class="author"><cite>Jane Doe</cite></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
