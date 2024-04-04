<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomBooking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','hotel_id','room_id','name', 'total_members', 'date', 'time', 'arrival_date', 'depature_date', 'email', 'phone_number'];
    public function rooms()
    {
        return $this->belongsTo(rooms::class, 'room_id','id');
    }
    public function hotels()
    {
        return $this->belongsTo(hotels::class, 'hotel_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class ,'user_id','id');
    }
}
