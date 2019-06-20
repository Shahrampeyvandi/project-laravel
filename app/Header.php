<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    public function mobile_photos() //$header -> mobile_photos
    {
        return $this-> hasMany(headermobilephoto::class);
    }
}
