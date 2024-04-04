<?php

namespace App\Http\Livewire\Admin;

use App\Models\hotels;
use App\Models\room_types;
use App\Models\rooms as hotelRooms;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Hotel extends Component
{
    use WithFileUploads;
    public $room_type_id, $roomnumber, $capacity, $price, $hotelId, $roomImage;
    public $description, $fb, $sliderImage, $twitter, $insta, $hotelname, $heading, $aboutDescription, $aboutImage1, $aboutImage2;
    public $deleteHotelId;
    protected $listeners =['refreshExtensions' => '$refresh'];

    public function render()
    {
        $hotels = hotels::paginate(5);
        $room_types = room_types::all();
        return view('livewire.admin.hotel', compact('hotels', 'room_types'))
            ->layout('layouts.app');
    }

    public function status($hotelId, $status)
    {
        if($status == 1)
        {
            hotels::where('id', $hotelId)->update(['status' => '0']);
        }
        else
        {
            hotels::where('id', $hotelId)->update(['status' => '1']);
        }
    }




    public function resetAddRoomField()
    {
        $this->room_type_id = '';
        $this->roomnumber = '';
        $this->capacity = '';
        $this->price = '';
        $this->roomImage = '';
    }

    public function addRoom()
    {
//        $this->validate();

        if($this->roomImage != '')
        {
            // 1: Get filename with extension
            $fileNameWithExt = $this->roomImage->getClientOriginalName();
            // 2: get Just Filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // 3: get Just file extension
            $extension = $this->roomImage->getClientOriginalExtension();
            // 4: File Name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //upload Image
            $path = $this->roomImage->storeAs('public/room_image', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }
        hotelRooms::create([
            'hotel_id' => $this->hotelId,
            'room_type_id' => $this->room_type_id,
            'roomnumber' =>  $this->roomnumber,
            'capacity' => $this->capacity,
            'price' => $this->price,
            'roomImage' => $fileNameToStore,
        ]);

        $this->resetAddRoomField();
        $this->dispatchBrowserEvent('hideEditRoomModel');


        session()->flash('message', 'Room Added Successfully.');

    }



    public function addNewRoom($hotelId)
    {
        $this->hotelId = $hotelId;
        $this->dispatchBrowserEvent('showEditRoomModel');

    }


    public function deleteHotel($hotelId)
    {
        $this->deleteHotelId = $hotelId;
        $deleteQuery = hotels::find($this->deleteHotelId);
        $deleteQuery->delete();
        $this->emit('refreshExtensions');
        session()->flash('message', 'Hotel Removed Successfully.');
    }

    protected $rules = [
        'description' => 'required|max:255',
        'fb' => 'required|max:255',
        'twitter' => 'required|max:255',
        'insta' => 'required|max:255',
        'hotelname' => 'required|max:255',
        'heading' => 'required|max:255',
        'aboutDescription' => 'required|max:255',

    ];

    public function resetInputField()
    {
        $this->hotelId = '';
        $this->description = '';
        $this->fb = '';
        $this->twitter = '';
        $this->insta = '';
        $this->hotelname = '';
        $this->heading = '';
        $this->aboutDescription = '';
        $this->aboutImage1 = '';
        $this->aboutImage2 = '';
        $this->sliderImage = '';

    }

    public function editHotel($hotelId)
    {
        $hotel =  hotels::where('id', $hotelId)->first();
        $this->hotelId = $hotelId;
        $this->hotelname = $hotel->name;
        $this->fb = $hotel->fb;
        $this->twitter = $hotel->twitter;
        $this->insta = $hotel->insta;
        $this->description = $hotel->sliderDesc;
        $this->heading = $hotel->heading;
        $this->aboutDescription = $hotel->aboutDescription;
        $this->aboutImage1 = $hotel->aboutImage1;
        $this->aboutImage2 = $hotel->aboutImage2;
        $this->sliderImage = $hotel->sliderImage;

        $this->dispatchBrowserEvent('showEditHotelModel');
    }

    public function editHotelData()
    {
        $this->validate();

        $hotel = hotels::where('id', $this->hotelId)->first();

        if (!(is_string($this->sliderImage))) {
            if ($this->sliderImage != '') {
//         1: Get filename with extension
                foreach ($this->sliderImage as $key => $image) {


                    $fileNameWithExt = $image->getClientOriginalName();
                    // 2: get Just Filename
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // 3: get Just file extension
                    $extension = $image->getClientOriginalExtension();
                    // 4: File Name to store
                    $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

                    //upload Image
//                $this->sliderImage[$key] = $image->store('slider_images','public');
                    $this->sliderImage[$key] = $image->storeAs('public/slider_images', $fileNameToStore);

                }
                $this->sliderImage = json_encode($this->sliderImage);
            }
        }

        if (!(is_string($this->aboutImage1))) {

//        About Us Images Code Start
            if ($this->aboutImage1 != '') {
                // 1: Get filename with extension
                $fileNameWithExt = $this->aboutImage1->getClientOriginalName();
                // 2: get Just Filename
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // 3: get Just file extension
                $extension = $this->aboutImage1->getClientOriginalExtension();
                // 4: File Name to store
                $aboutUsImage1 = $fileName . '_' . time() . '.' . $extension;

                //upload Image
                $path = $this->aboutImage1->storeAs('public/aboutUs/', $aboutUsImage1);
            }
        }
        else {
            $aboutUsImage1 = $this->aboutImage1 ;
        }

        if (!(is_string($this->aboutImage2))) {
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

        }
        else {
            $aboutUsImage2 = $this->aboutImage2 ;
        }


        $hotel->update([
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
        $this->dispatchBrowserEvent('hideEditHotelModel');


    }
}
