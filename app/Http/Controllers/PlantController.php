<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use App\Models\Setting;

class PlantController extends Controller
{
    //
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        return view('frontend.plants',compact("settings"));
    }
    public function plants()
    {
        $plants = Plant::where('delete_status',1)->get();
       return view('backend.plants',compact('plants'));

    }
    public function store(Request $request)
    {
        dd($request->all());

    }
}
