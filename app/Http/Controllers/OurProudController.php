<?php

namespace App\Http\Controllers;

use App\Models\OurProud;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class OurProudController extends Controller
{
    public function index()
    {
        // $settings = Setting::where('delete_status',1)->first();
        $ourProud = OurProud::where('delete_status',1)->where('use_for','our_proud')->first();
        return view('backend.our-proud',compact('settings','ourProud'));
    }
    public function store(Request $request)
    {
        $oldOurProud = OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first();
        // dd($request->all());

        if ($oldOurProud) {

            if ($request->hasFile('img1')) {
                $oldfavicon = $oldOurProud->img1;
                if ($oldfavicon) {
                    Storage::delete('/public/ourProud/' . $oldfavicon);
                }
                $faviconName = $request->img1->getClientOriginalName();
                $request->img1->storeAs('ourProud', $faviconName, 'public');
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['img1' => $faviconName]);
            }
            if ($request->hasFile('img2')) {
                $oldfavicon = $oldOurProud->img2;
                if ($oldfavicon) {
                    Storage::delete('/public/ourProud/' . $oldfavicon);
                }
                $faviconName = $request->img2->getClientOriginalName();
                $request->img2->storeAs('ourProud', $faviconName, 'public');
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['img2' => $faviconName]);
            }
            if ($request->hasFile('img3')) {
                $oldfavicon = $oldOurProud->img3;
                if ($oldfavicon) {
                    Storage::delete('/public/ourProud/' . $oldfavicon);
                }
                $faviconName = $request->img3->getClientOriginalName();
                $request->img3->storeAs('ourProud', $faviconName, 'public');
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['img3' => $faviconName]);
            }
            if ($request->hasFile('img4')) {
                $oldfavicon = $oldOurProud->img4;
                if ($oldfavicon) {
                    Storage::delete('/public/ourProud/' . $oldfavicon);
                }
                $faviconName = $request->img4->getClientOriginalName();
                $request->img4->storeAs('ourProud', $faviconName, 'public');
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['img4' => $faviconName]);
            }
            // dd($request->all());

            if ($request->heading1) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['heading' => $request->heading1]);
            }
            if ($request->description1) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['description' => $request->description1]);
            }
            if ($request->heading2) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['heading2' => $request->heading2]);
            }
            if ($request->description2) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['description2' => $request->description2]);
            }

            if ($request->number1) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['number1' => $request->number1]);
            }
            if ($request->number2) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['number2' => $request->number2]);
            }
            if ($request->number3) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['number3' => $request->number3]);
            }

            if ($request->number4) {

                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['number4' => $request->number4]);
            }
            if ($request->text1) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['text1' => $request->text1]);
            }
            if ($request->text2) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['text2' => $request->text2]);
            }
            if ($request->text3) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['text3' => $request->text3]);
            }
            if ($request->text4) {
                OurProud::where('id', $request->ourProud_Id)->where('delete_status', 1)->first()->update(['text4' => $request->text4]);
            }

        }
        return redirect()->back();

    }

    public function sustainability()
    {
        // $settings = Setting::where('delete_status',1)->first();
        $ourProud = OurProud::where('delete_status',1)->where('use_for','sustainability')->first();
        return view('backend.sustainability',compact('settings','ourProud'));
    }


}
