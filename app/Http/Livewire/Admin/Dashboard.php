<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        if(Auth::user()->role == '1')
        {
            return view('livewire.admin.dashboard');
        }
        else if(Auth::user()->role == '0')
        {
            return view('home.homeContent');
        }
    }
}
