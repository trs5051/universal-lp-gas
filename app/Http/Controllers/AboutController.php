<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\Setting;


class AboutController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $aboutUs = Information::where('information_for','about_us')->where('delete_status',1)->first();

        return view('frontend.about',compact('settings','aboutUs'));
    }
}
