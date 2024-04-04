<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'fb', 'twitter', 'insta', 'sliderDesc', 'sliderImage', 'heading', 'aboutDescription', 'aboutImage1', 'aboutImage2'];
    public function rooms()
    {
        return $this->hasMany(rooms::class);
    }
    public function RoomBooking()
    {
        return $this->belongsTo(RoomBooking::class);
    }
}
