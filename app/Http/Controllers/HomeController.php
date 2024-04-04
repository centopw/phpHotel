<?php

namespace App\Http\Controllers;

use App\Models\hotels;
use App\Models\rooms;
use App\Models\Sliders;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Sliders::all()->where('status', 1);
        $hotels = hotels::all()->where('status', 1);
        return view('home.homeContent', compact('sliders', 'hotels'));
    }

    public function services()
    {
        return view('home.services');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function hotels($name)
    {
        $hotel = hotels::where('name', $name)->get();
        $rooms = rooms::where('status', 1)->get();
        return view('hotels.hotels', compact('hotel', 'rooms'));
    }

}
