<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\Slider;
use App\Http\Livewire\Admin\Addslider;
use App\Http\Livewire\Admin\Hotel;
use App\Http\Livewire\Admin\Addhotels;
use App\Http\Livewire\Admin\Editslider;
use App\Http\Livewire\Admin\Rooms;
use App\Http\Livewire\Admin\Roomtype;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\DeleteSlider;
use App\Http\Livewire\Admin\Booking;
use App\Http\Controllers\RoomBookingController;
use App\Mail\RoomNotification;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/hotels/{name}', [HomeController::class, 'hotels'])->name('hotels.name');



Route::middleware([
    'role',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', Dashboard::class)->name('dashboard');
    Route::get('/sliders', Slider::class)->name('sliders');
    Route::get('/addsliders', Addslider::class)->name('addsliders');
    Route::get('/hotel', Hotel::class)->name('hotel');
    Route::get('/addhotels', Addhotels::class)->name('addhotels');
    Route::get('/editslider/{sliderId}', Editslider::class);
    Route::get('/deleteslider/{sliderId}', DeleteSlider::class);
    Route::get('/hotel/edit/{hotelId}', Addhotels::class);
    Route::get('/rooms', Rooms::class)->name('rooms');
    Route::get('/roomtype', Roomtype::class)->name('roomtype');
    Route::get('/booking', Booking::class)->name('booking');


});

Route::get('bookroom/{user_id}/{room_id}/{name}', [RoomBookingController::class, 'bookRoom'])->name('bookroom.user_id.room_id');
Route::POST('addbooking', [RoomBookingController::class, 'addbooking'])->name('addbooking');
Route::get('email' ,function(){
    return new RoomNotification();
});
