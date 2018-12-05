<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function hotels()
    {
    	return $this->hasMany(Hotel::class);
    }
}
