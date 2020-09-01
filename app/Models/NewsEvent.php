<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    public function eventPictures()
    {
        return $this->hasMany(EventPicture::class);
    }
}
