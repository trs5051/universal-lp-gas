<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;
use App\Models\Setting;

class ManagementController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        return view('frontend.management',compact("settings"));
    }
    public function management()
    {

        $managements = Management::where('delete_status',1)->get();

        return view('backend.management.index',compact('managements'));
    }
}
