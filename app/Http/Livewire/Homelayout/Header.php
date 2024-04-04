<?php

namespace App\Http\Livewire\Homelayout;

use App\Models\hotels;
use Livewire\Component;

class Header extends Component
{
    public $hotels_names;
    public function mount()
    {
        $this->hotels_names = hotels::get(['name']);
    }

    public function render()
    {
        return view('livewire.homelayout.header');
    }
}
