<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use Illuminate\Http\Request;
use App\Models\Setting;

class AmbTradersPvtController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $concern = Concern::where('information_for','ambTraders')->where('delete_status',1)->first();

        return view('frontend.amb-traders-pvt',compact("settings",'concern'));
    }
}
