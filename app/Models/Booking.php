<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function reservationguest(){
        return $this->belongsTo('App\Models\Reservationguest');
    }
    
    use HasFactory;
}
