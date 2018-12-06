<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public function hotels()
    {
    	return $this->belongsToMany(Hotel::class);
    }
}
