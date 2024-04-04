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
                            <h3 style="font-weight: bold">Room Booking</h3>
                        </div>
                    </div>
                </div>
                <div class="page-wrapper">
                    <div class="content container-fluid">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title mt-5">Request Booking</h3>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('addbooking') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row formtype">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="email"
                                                    name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Number of people</label>
                                                <input type="number"
                                                    class="form-control @error('total_numbers') is-invalid @enderror"name="total_members"
                                                    value="{{ old('total_numbers') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <div class="cal-icon">
                                                    <input type="date"
                                                        class="form-control datetimepicker @error('date') is-invalid @enderror"name="date"
                                                        value="{{ old('date') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Time</label>
                                                <div class="time-icon">
                                                    <input type="time"
                                                        class="form-control @error('time') is-invalid @enderror"
                                                        id="datetimepicker3" name="time" value="{{ old('time') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Arrival Date</label>
                                                <div class="cal-icon">
                                                    <input type="date"
                                                        class="form-control datetimepicker @error('arrival_date') is-invalid @enderror"
                                                        name="arrival_date" value="{{ old('arrival_date') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Depature Date</label>
                                                <div class="cal-icon">
                                                    <input type="date"
                                                        class="form-control datetimepicker @error('depature_date') is-invalid @enderror"
                                                        name="depature_date" value="{{ old('depature_date') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="number"
                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                    id="usr1" name="phone_number" value="{{ old('phone_number') }}">
                                            </div>
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                                        <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                                        <input type="hidden" name="room_id" value="{{ $room_id }}">


                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary buttonedit1">Create Booking</button>
                        </form>
                    </div>
                </div>
                @section('script')
                    <script>
                        $(function() {
                            $('#datetimepicker3').datetimepicker({
                                format: 'LT'
                            });
                        });
                    </script>
                @endsection
            </div>
        </div>
        <!-- offers_area_end -->
    @endforeach


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
