<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sliders;
use Livewire\Component;

class DeleteSlider extends Component
{
    public $sliderId;

    public function mount($sliderId)
    {
        $this->sliderId = $sliderId;
    }

    public function render()
    {
        $this->deleteSliderId = $this->sliderId;
        $category = Sliders::find($this->deleteSliderId);
        $category->delete();
//        $this->emitSelf('refresh-me');
        session()->flash('message', 'Category Removed Successfully.');
//        $this->emit('refreshComponent');
        $sliders = Sliders::paginate(5);
        return view('livewire.admin.slider', compact('sliders'));
    }
}
