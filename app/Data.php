<?php

namespace App;

use App\District;
use App\FollowUp;
use App\Upazila;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
	public function district()
	{
		return $this->belongsTo(District::class);
	}
	public function upazila()
	{
		return $this->belongsTo(Upazila::class);
	}
	public function follow_ups()
	{
		return $this->hasMany(FollowUp::class);
	}
}
