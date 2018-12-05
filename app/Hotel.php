<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function location()
    {
    	return $this->belongsTo(Location::class);
    }

    public function facilities()
    {
    	return $this->belongsToMany(Facility::class);
    }
}
