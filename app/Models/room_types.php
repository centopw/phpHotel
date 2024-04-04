<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_types extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'information'];

    public function rooms()
    {
        return $this->hasMany(rooms::class);
    }

}
