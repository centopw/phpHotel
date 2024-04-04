<?php

namespace App\Http\Livewire\Admin;

use App\Models\hotels;
use Livewire\Component;
use Livewire\WithFileUploads;

class Addhotels extends Component
{
    use WithFileUploads;
    public $description, $fb, $sliderImage, $twitter, $insta, $hotelname, $heading, $aboutDescription, $aboutImage1, $aboutImage2;

    public function render()
    {
        return view('livewire.admin.addhotels');
    }

    protected $rules = [
        'description' => 'required|max:255',
        'fb' => 'required|max:255',
        'twitter' => 'required|max:255',
        'insta' => 'required|max:255',
        'hotelname' => 'required|max:255',
        'sliderImage.*'  => 'required|image|max:2048',
        'heading' => 'required|max:255',
        'aboutDescription' => 'required|max:255',
        'aboutImage1'  => 'required|image|max:2048',
        'aboutImage2'  => 'required|image|max:2048'

    ];

    public function resetInputField()
    {
        $this->description = '';
        $this->fb = '';
        $this->twitter = '';
        $this->insta = '';
        $this->hotelname = '';
        $this->heading = '';
        $this->aboutDescription = '';
        $this->aboutImage1 = '';
        $this->aboutImage2 = '';
    }

    public function addDetails()
    {
        $this->validate();


        if($this->sliderImage != '')
        {
//         1: Get filename with extension
            foreach ($this->sliderImage as $key => $image) {


                $fileNameWithExt = $image->getClientOriginalName();
                // 2: get Just Filename
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // 3: get Just file extension
                $extension = $image->getClientOriginalExtension();
                // 4: File Name to store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;

                //upload Image
//                $this->sliderImage[$key] = $image->store('slider_images','public');
                $this->sliderImage[$key] = $image->storeAs('public/slider_images', $fileNameToStore);

            }
            $this->sliderImage = json_encode($this->sliderImage);
        }
        else
        {
            $fileNameToStore = ['noimage.jpg'];
        }

//        About Us Images Code Start
        if($this->aboutImage1 != '')
        {
            // 1: Get filename with extension
            $fileNameWithExt = $this->aboutImage1->getClientOriginalName();
            // 2: get Just Filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // 3: get Just file extension
            $extension = $this->aboutImage1->getClientOriginalExtension();
            // 4: File Name to store
            $aboutUsImage1 = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $this->aboutImage1->storeAs('public/aboutUs/', $aboutUsImage1);
        }
        else
        {
            $aboutUsImage1 = 'noimage.jpg';
        }
        if($this->aboutImage2 != '')
        {
            // 1: Get filename with extension
            $fileNameWithExt = $this->aboutImage2->getClientOriginalName();
            // 2: get Just Filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // 3: get Just file extension
            $extension = $this->aboutImage2->getClientOriginalExtension();
            // 4: File Name to store
            $aboutUsImage2 = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $this->aboutImage2->storeAs('public/aboutUs', $aboutUsImage2);
        }
        else
        {
            $aboutUsImage2 = 'noimage.jpg';
        }
//        About Us Image End

        hotels::create([
            'name' => $this->hotelname,
            'fb' => $this->fb,
            'twitter' => $this->twitter,
            'insta' => $this->insta,
            'sliderDesc' => $this->description,
            'sliderImage' => $this->sliderImage,
            'heading' => $this->heading,
            'aboutDescription' => $this->aboutDescription,
            'aboutImage1' => $aboutUsImage1,
            'aboutImage2' => $aboutUsImage2
        ]);
        $this->resetInputField();

        session()->flash('message', 'Record Inserted Successfully.');


    }

}
