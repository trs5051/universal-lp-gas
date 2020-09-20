<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $settings = Setting::where('delete_status',1)->first();

        return view('frontend.career',compact('settings'));
    }

    public function cvSubmit(Request $request)
    {
        dd($request->all());
    }
}
