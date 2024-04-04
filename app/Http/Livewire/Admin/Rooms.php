<?php

namespace App\Http\Livewire\Admin;

use App\Models\hotels;
use App\Models\room_types;
use App\Models\rooms as hotelRooms;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Rooms extends Component
{
    public $room_type_id, $roomnumber, $capacity, $price;

    public function render()
    {
        $rooms = hotelRooms::with('room_types', 'hotels')->get();
        $room_types = room_types::all();
        $hotels = hotels::all();
        return view('livewire.admin.rooms', compact('rooms','room_types', 'hotels'));
    }

    public function status($room_id, $status)
    {
        if($status == 1)
        {
            hotelRooms::where('id', $room_id)->update(['status' => '0']);
        }
        else
        {
            hotelRooms::where('id', $room_id)->update(['status' => '1']);
        }
    }

    public function addNewRoom()
    {
        $this->dispatchBrowserEvent('showEditRoomModel');
    }
}
