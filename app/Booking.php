<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function hotel()
    {
    	return $this->belongsTo(Hotel::class);
    }
}
