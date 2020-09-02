<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use App\Models\Information;
use App\Models\NewsEvent;
use App\Models\OurProud;
use App\Models\Product;
use App\Models\ProductCategory;
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
        $aboutUs = Information::where('information_for','about_us')->where('delete_status',1)->first();
        $concerns = Concern::where('label','concern')->where('delete_status',1)->get();

        $products = Product::with('category')->where('delete_status',1)->get();
        $categories = ProductCategory::where('delete_status',1)->get();

        $events = NewsEvent::with('eventPictures')->where('delete_status', 1)->orderBy('id')->get();


        return view('frontend.index',compact('settings','frontSliders','ourProud','information','sustainability','aboutUs','concerns','categories','products','events'));
    }
}
