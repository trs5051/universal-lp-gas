<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
    'logo','ticker','favicon','contact','address_first_part','address_second_part','email','facebook','linkedin','youtube','twitter',
    ];
}
