<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\Setting;

class ComplianceController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $compliance  = Information::where('information_for','compliance')->where('delete_status',1)->first();

        return view('frontend.compliance',compact("settings",'compliance'));
    }
}
