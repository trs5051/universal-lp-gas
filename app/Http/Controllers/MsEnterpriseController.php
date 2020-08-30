<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use Illuminate\Http\Request;
use App\Models\Setting;

class MsEnterpriseController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $concern = Concern::where('information_for','msEnterprise')->where('delete_status',1)->first();

        return view('frontend.ms-enterprise',compact("settings",'concern'));
    }
}
