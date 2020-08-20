<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\Setting;

class DirectorController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $directors = Information::where('information_for','directors')->where('delete_status',1)->first();

        return view('frontend.board-of-directors',compact('settings','directors'));
    }
}
