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
        $dhakaOffice  = Contact::where('contact_for','dhaka_office')->where('delete_status',1)->first();
        // dd($headOffice);
        return view('backend.contact',compact('headOffice','dhakaOffice'));
    }
    public function contactUpdate(Request $request)
    {


        $headOffice = Contact::findOrFail($request->headOffice_Id);
        $headOffice->office_name = $request->head_office_name;
        $headOffice->address = $request->head_company_address;
        $headOffice->land_line = $request->head_company_contact;
        $headOffice->email = $request->head_company_email;
        $headOffice->update();

        $dhakaOffice = Contact::findOrFail($request->dhakaOffice_Id);
        $dhakaOffice->office_name = $request->dhaka_office_name;
        $dhakaOffice->address = $request->dhaka_company_address;
        $dhakaOffice->land_line = $request->company_contact;
        $dhakaOffice->email = $request->dhaka_company_email;
        $dhakaOffice->update();

        return redirect()->back();

    }
}
