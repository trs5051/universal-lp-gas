<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage ;

class SettingController extends Controller
{
    public function settings()
    {

        return view('backend.settings');
    }

    public function headerFooter()
    {
        $settings = Setting::where('delete_status', 1)->first();
        return view('backend.header-footer', compact('settings'));
    }
    public function headerFooterUpdate(Request $request)
    {
        $oldSettings = Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first();

        if ($oldSettings) {

            if ($request->hasFile('logo')) {
                $oldLogo = $oldSettings->logo;
                if ($oldLogo) {
                    Storage::delete('/public/logo/' . $oldLogo);
                }
                $logoName = time().'-'.$request->logo->getClientOriginalName();
                $request->logo->move('storage/logo', $logoName);
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['logo' => $logoName]);
            }
            if ($request->hasFile('favicon')) {
                $oldfavicon = $oldSettings->favicon;
                if ($oldfavicon) {
                    Storage::delete('/public/favicon/' . $oldfavicon);
                }
                $faviconName = time().'-'.$request->favicon->getClientOriginalName();
                $request->favicon->move('storage/favicon', $faviconName);
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['favicon' => $faviconName]);
            }
            // dd($request->all());

            if ($request->Company_Address_First_Part) {
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['address_first_part' => $request->Company_Address_First_Part]);
            }
            if ($request->Company_Address_Second_Part) {
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['address_second_part' => $request->Company_Address_Second_Part]);
            }

            if ($request->company_contact) {
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['contact' => $request->company_contact]);
            }
            if ($request->company_email) {
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['email' => $request->company_email]);
            }
            if ($request->instagram) {
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['instagram' => $request->instagram]);
            }
            if ($request->facebook) {
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['facebook' => $request->facebook]);
            }
            if ($request->twitter) {
                Setting::where('id', $request->Settings_Id)->where('delete_status', 1)->first()->update(['twitter' => $request->twitter]);
            }
        } else {

            if ($request->Company_Address_First_Part) {
                $company_address_first = $request->Company_Address_First_Part;
            }
            if ($request->Company_Address_Second_Part) {
                $company_address_second = $request->Company_Address_Second_Part;            }

            if ($request->company_contact) {
                $contact = $request->company_contact;
            }
            if ($request->company_email) {
                $email = $request->company_email;
            }

            $settings = new Setting();

            $settings->address_first_part = $company_address_first;
            $settings->address_second_part = $company_address_second;
            $settings->contact = $contact;
            $settings->email = $email;
            if ($request->hasFile('logo')) {
                $logoName = time().'-'.$request->logo->getClientOriginalName();
                $request->logo->move('storage/logo', $logoName);
                $settings->logo = $logoName;
            }
            if ($request->hasFile('favicon')) {

                $faviconName = time().'-'.$request->favicon->getClientOriginalName();
                $request->favicon->move('storage/favicon', $faviconName);
                $settings->favicon = $faviconName;
            }
            $settings->save();

        }
        return redirect()->back();
    }
}
