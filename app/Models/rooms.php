<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id', 'room_type_id', 'roomnumber', 'capacity', 'price', 'roomImage'];

    public function hotels()
    {
        return $this->belongsTo(hotels::class);
    }
    public function room_types()
    {
        return $this->belongsTo(room_types::class);
    }
    public function RoomBooking()
    {
        return $this->hasMany(RoomBooking::class, 'room_id', 'id');
    }
}
