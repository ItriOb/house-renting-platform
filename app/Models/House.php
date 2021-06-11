<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    public function city(){
        return $this->belongsTo('App\Models\City');
    }

    public function bookings(){
        return $this->belongsToMany('App\Models\Booking','bookings_houses','bookings_id','houses_id');
    }

    
}
