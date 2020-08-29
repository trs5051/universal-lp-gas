<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    public function managementCategory()
    {
        return $this->belongsTo(ManagementCategory::class,'management_category_id');
    }
}
