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

        if($request->hasFile('logo')){
            $oldLogo = Setting::where('delete_status',1)->first()->logo;
            if($oldLogo){
                Storage::delete('/public/logo/'.$oldLogo);
            }
            $logoName=$request->logo->getClientOriginalName();
            $request->logo->storeAs('logo',$logoName,'public');
            Setting::where('delete_status',1)->first()->update(['logo' => $logoName]);

        }
        if($request->hasFile('favicon')){
            $oldfavicon = Setting::where('delete_status',1)->first()->favicon;
            if($oldfavicon){
                Storage::delete('/public/favicon/'.$oldfavicon);
            }
            $faviconName=$request->favicon->getClientOriginalName();
            $request->favicon->storeAs('favicon',$faviconName,'public');
            Setting::where('delete_status',1)->first()->update(['favicon' => $faviconName]);

        }

        dd($request->all());




        return redirect()->back();
    }
}
