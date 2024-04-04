<?php

namespace App\Http\Livewire\Admin;

use App\Mail\RoomNotification;
use App\Models\RoomBooking;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Booking extends Component
{
    protected $listeners =['refreshExtensions' => '$refresh'];

    public function render()
    {
        $bookings = RoomBooking::with('rooms')->paginate(15);
        return view('livewire.admin.booking', compact('bookings'));
    }

    public function status($bookingId, $status)
    {
        if($status == 1)
        {
            RoomBooking::where('id', $bookingId)->update(['status' => '0']);
        }
        elseif($status == 0)
        {
            RoomBooking::where('id', $bookingId)->update(['status' => '2']);
            Mail::to('test@gmail.com')->send(new RoomNotification());

        }
        elseif($status == 2)
        {
            RoomBooking::where('id', $bookingId)->update(['status' => '1']);
        }
    }
    public function deleterequest($bookingId)
    {
        $deleteQuery = RoomBooking::find($bookingId);
        $deleteQuery->delete();
        $this->emit('refreshExtensions');
        session()->flash('message', 'Request Removed Successfully.');

    }
}
