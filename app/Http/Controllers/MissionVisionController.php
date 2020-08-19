<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use Illuminate\Http\Request;
use App\Models\Setting;

class MissionVisionController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $concern = Concern::where('information_for','mission-vision')->where('delete_status',1)->first();

        return view('frontend.mission-and-vision',compact('settings','concern'));
    }
}
