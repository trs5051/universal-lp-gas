<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Setting;

class ContactController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        return view('frontend.contact',compact("settings"));
    }
    public function contact()
    {
        $headOffice  = Contact::where('contact_for','head_office')->where('delete_status',1)->first();
        $settings = Setting::where('delete_status',1)->first();
        // dd($headOffice);
        return view('backend.contact',compact('headOffice','settings'));
    }
}
