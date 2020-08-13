<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;

class IndexController extends Controller
{
    public function index(){

        $settings = Setting::where('delete_status',1)->first();
        $frontSliders = Slider::where('delete_status',1)->where('slider_for','front_slider')->get();


        return view('frontend.index',compact('settings','frontSliders'));
    }
}
