<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Storage;

class SettingController extends Controller
{
    public function settings(){

        return view('backend.settings');
    }

    public function headerFooter()
    {
        $settings = Setting::where('delete_status',1)->first();
        return view('backend.header-footer',compact('settings'));
    }
    public function headerFooterUpdate(Request $request)
    {
        $oldSettings = Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first();


        if($request->hasFile('logo')){
           $oldLogo = $oldSettings->logo;
            if($oldLogo){
                Storage::delete('/public/logo/'.$oldLogo);
            }
            $logoName=$request->logo->getClientOriginalName();
            $request->logo->storeAs('logo',$logoName,'public');
            Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first()->update(['logo' => $logoName]);

        }
        if($request->hasFile('favicon')){
            $oldfavicon = $oldSettings->favicon;
            if($oldfavicon){
                Storage::delete('/public/favicon/'.$oldfavicon);
            }
            $faviconName=$request->favicon->getClientOriginalName();
            $request->favicon->storeAs('favicon',$faviconName,'public');
            Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first()->update(['favicon' => $faviconName]);
        }
        // dd($request->all());

        if($request->company_address){
            Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first()->update(['address' => $request->company_address]);

        }
        if($request->company_contact){
            Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first()->update(['contact' => $request->company_contact]);

        }
        if($request->company_email){
            Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first()->update(['email' => $request->company_email]);

        }
        if($request->instagram){
            Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first()->update(['instagram' => $request->instagram]);

        }
        if($request->facebook){
            Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first()->update(['facebook' => $request->facebook]);

        }
        if($request->twitter){
            Setting::where('id',$request->Settings_Id)->where('delete_status',1)->first()->update(['twitter' => $request->twitter]);

        }





        return redirect()->back();
    }
}
