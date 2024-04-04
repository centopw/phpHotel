<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sliders;
use Livewire\Component;

class Slider extends Component
{
    public $deleteSliderId;

//    protected $listeners = [
//      'refresh-me' => '$refresh'
//    ];
//    protected $listeners = ['refreshComponent' => '$refresh'];


    public function render()
    {
        $sliders = Sliders::paginate(5);
        return view('livewire.admin.slider', compact('sliders'));
    }

    public function deleteId($deleteSliderId)
    {
        $this->deleteSliderId = $deleteSliderId;
        $category = Sliders::find($this->deleteSliderId);
        $category->delete();
//        $this->emitSelf('refresh-me');
        session()->flash('message', 'Category Removed Successfully.');
//        $this->emit('refreshComponent');
    }
}
