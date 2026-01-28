<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoothBooking extends Model
{
    protected $fillable = [
        'nama', 'email', 'no_hp', 'booth', 'catatan'
    ];
}

