<?php

namespace App\Http\Livewire\Hotelslayout;

use App\Models\hotels;
use Livewire\Component;

class Header extends Component
{
    public $hotel;
    public function mount()
    {
        $urlPathArray = \Route::current()->parameters();
        $hotelName = implode($urlPathArray);
        $this->hotelName = $hotelName;
        $this->hotel = hotels::where('name', $this->hotelName)->get(['name' ,'fb', 'twitter', 'insta']);
//        if(!$this->hotel)
//        {
//            abort(404);
//        }

    }
    public function render()
    {
        return view('livewire.hotelslayout.header');
    }
}
