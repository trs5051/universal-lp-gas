<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class WhyLpgController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        return view('frontend.why-lpg',compact("settings"));
    }
}
