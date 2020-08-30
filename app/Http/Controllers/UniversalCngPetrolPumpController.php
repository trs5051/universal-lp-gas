<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use Illuminate\Http\Request;
use App\Models\Setting;

class UniversalCngPetrolPumpController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $concern = Concern::where('information_for','universalCngPetrolPump')->where('delete_status',1)->first();

        return view('frontend.universal-cng-petrol-pump',compact("settings",'concern'));
    }
}
