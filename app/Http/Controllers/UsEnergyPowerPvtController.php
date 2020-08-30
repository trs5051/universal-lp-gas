<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use Illuminate\Http\Request;
use App\Models\Setting;

class UsEnergyPowerPvtController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $concern = Concern::where('information_for','usEnergyPower')->where('delete_status',1)->first();

        return view('frontend.us-energy-power-pvt',compact("settings",'concern'));
    }
}
