<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\Setting;

class UniversalCngPetrolPumpController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $concern = Concern::where('information_for','universalCngPetrolPump')->where('delete_status',1)->first();
        $products = Product::with('category')->where('delete_status',1)->get();
        $categories = ProductCategory::where('delete_status',1)->get();

        return view('frontend.universal-cng-petrol-pump',compact("settings",'concern','products','categories'));
    }
}
