<?php

namespace App\Http\Livewire\Admin;

use App\Models\room_types;
use Livewire\Component;

class Roomtype extends Component
{
    protected $listeners =['refreshExtensions' => '$refresh'];

    public $room_type, $room_info, $room_type_old_id;

    public function render()
    {
        $room_types = room_types::paginate(5);
        return view('livewire.admin.roomtype', compact('room_types'));
    }

    protected $rules = [
        'room_type' => 'required|max:255',
        'room_info' => 'required|max:255'
        ];

    public function resetInputFields()
    {
        $this->room_type = '';
        $this->room_info = '';
    }

    public function status($room_type_id, $status)
    {
        if($status == 1)
        {
            room_types::where('id', $room_type_id)->update(['status' => '0']);
        }
        else
        {
            room_types::where('id', $room_type_id)->update(['status' => '1']);
        }
    }

    public function editRoomType($room_type_id)
    {
        $room_type = room_types::where('id', $room_type_id)->first();
        $this->room_type = $room_type->name;
        $this->room_info = $room_type->information;
        $this->room_type_old_id = $room_type->id;
        $this->dispatchBrowserEvent('showAddRoomTypeModel');
    }

    public function deleteRoomType($room_type_id)
    {
        $this->deleteRoomTypeId = $room_type_id;
        $deleteQuery = room_types::find($this->deleteRoomTypeId);
        $deleteQuery->delete();
        $this->emit('refreshExtensions');
        session()->flash('message', 'Room Type Removed Successfully!');
    }

    public function addNewtype()
    {
        $this->dispatchBrowserEvent('showAddRoomTypeModel');
    }

    public function AddEditRoomType()
    {
        $this->validate();
        if($this->room_type_old_id != null)
        {
            room_types::where('id', $this->room_type_old_id)->update([
                'name' =>  $this->room_type,
                'information' =>  $this->room_info
            ]);
        }
        else
        {
            $room_type = room_types::create([
                'name' =>  $this->room_type,
                'information' =>  $this->room_info
            ]);
            session()->flash('message', 'Room Type Added Successfully!');
        }
        $this->resetInputFields();
        $this->dispatchBrowserEvent('hideAddRoomTypeModel');


    }


}
