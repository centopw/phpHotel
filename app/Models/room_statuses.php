<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_statuses extends Model
{
    use HasFactory;


    public function rooms()
    {
        return $this->belongsTo(room_statuses::class);
    }
}
