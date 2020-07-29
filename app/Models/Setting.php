<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
    'logo','favicon','contact','address','email','facebook','linkedin','instagram','twitter',
    ];
}
