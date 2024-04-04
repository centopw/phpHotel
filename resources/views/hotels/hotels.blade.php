@extends('layouts.hotels.master')

@section('content')
    @foreach ($hotel as $hotel)
        <!-- slider_area_start -->

        <div class="slider_area">
            <div class="slider_active owl-carousel">
                @php
                    $sliderImage = str_replace('public/slider_images', '', json_decode($hotel->sliderImage));
                @endphp
                @foreach ($sliderImage as $sliderImage)
                    <img src="{{ asset('storage/slider_images/' . $sliderImage) }}" alt="Please Upload An Image" width="400"
                        height="800">
                @endforeach
                <div class="single_slider d-flex align-items-center justify-content-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text text-center">
                                    <h3 style="color: white">{{ $hotel->sliderDesc }}</h3>
                                    <p>Unlock to enjoy the view of Martine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- offers_area_start -->
        <div class="offers_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center" style="margin: 50px 0 30px 0">
                            <h3 style="font-weight: bold">Ongoing Offers</h3>
                        </div>
                    </div>
                </div>
                <div style="display: flex; flex-direction: row; overflow: auto; white-space: nowrap">
                    @foreach ($rooms as $room)
                        @if ($room->hotel_id == $hotel->id)
                            <div class="col-xl-4 col-md-4"
                                style="background: #f3f3f3; margin-right: 10px; margin-bottom: 12px">
                                <div class="single_offers">
                                    <div class="about_thumb">
                                        <a href="#">
                                            <img src="{{ asset('storage/room_image/' . $room->roomImage) }}"
                                                alt="Room Image"
                                                style="margin-top: 5px;border-radius: 1rem; width: 450px; height: 300px">
                                        </a>
                                    </div>
                                    <h3>Room Number: <span style="font-weight: bold">{{ $room->roomnumber }}</span></h3>
                                    <ul>
                                        <li>Rent per day: <span
                                                style="margin-left:10px; font-weight: bold">{{ $room->price }} 000<span
                                                    style="font-size: 0.8rem">VND</span></span></li>
                                        <li>Capacity: <span
                                                style="margin-left:50px; font-weight: bold">{{ $room->capacity }}</span>
                                        </li>
                                    </ul>
                                    @if (Auth::user())
                                        <a href="{{ url('bookroom', Auth::user()->id) }}/{{ $room->id }}/{{ $hotel->name }}"
                                            class="book_now">book now</a>
                                    @else
                                        <a href="{{ url('login') }}" class="book_now">book now</a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- offers_area_end -->
    @endforeach

    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <span>Montana Sea View</span>
            <h3>Relax and Enjoy your <br>
                Vacation </h3>
            <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="{{ asset('assets/hotels-assets/img/about/1.png') }}" alt="">
                        </div>
                        <div class="img_2">
                            <img src="{{ asset('assets/hotels-assets/img/about/2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Delicious Food</span>
                            <h3>We Serve Fresh and <br>
                                Delicious Food</h3>
                        </div>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                            dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                            sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                        <a href="#" class="line-button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Featured Rooms</span>
                        <h3>Choose a Better Room</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{ asset('assets/hotels-assets/img/rooms/1.png') }}" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Superior Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{ asset('assets/hotels-assets/img/rooms/2.png') }}" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Deluxe Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{ asset('assets/hotels-assets/img/rooms/3.png') }}" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Signature Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{ asset('assets/hotels-assets/img/rooms/4.png') }}" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Couple Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_end -->
    <!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="{{ asset('assets/hotels-assets/img/instragram/1.png') }}" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{ asset('assets/hotels-assets/img/instragram/2.png') }}" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{ asset('assets/hotels-assets/img/instragram/3.png') }}" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{ asset('assets/hotels-assets/img/instragram/4.png') }}" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{ asset('assets/hotels-assets/img/instragram/5.png') }}" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->
@endsection
