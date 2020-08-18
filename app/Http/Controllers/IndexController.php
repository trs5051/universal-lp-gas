<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\OurProud;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;

class IndexController extends Controller
{
    public function index(){

        $settings = Setting::where('delete_status',1)->first();
        $frontSliders = Slider::where('delete_status',1)->where('slider_for','front_slider')->get();
        $ourProud = OurProud::where('use_for','our_proud')->where('delete_status',1)->first();
        $information = Information::where('information_for','our_business_concern')->first();
        $sustainability = OurProud::where('use_for','sustainability')->where('delete_status',1)->first();


        return view('frontend.index',compact('settings','frontSliders','ourProud','information','sustainability'));
    }
}
