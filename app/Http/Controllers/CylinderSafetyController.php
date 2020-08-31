<?php

namespace App\Http\Controllers;

use App\Models\CylinderSafety;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class CylinderSafetyController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $cylinderSafety = CylinderSafety::where('delete_status',1)->first();

        return view('frontend.cylinder-safety',compact("settings",'cylinderSafety'));
    }

    public function cylinderSafety()
    {
        $cylinderSafety = CylinderSafety::where('delete_status',1)->first();
        // dd($cylinderSafety);
        return view('backend.cylinderSafety',compact('cylinderSafety'));
    }
    public function cylinderSafetyUpdate(Request $request)
    {
        // dd($request->all());

        if ($request->top_heading) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['top_heading' => $request->top_heading]);
        }
        if ($request->top_text) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['top_text' => $request->top_text]);
        }
        if ($request->safety_tips_heading) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['safety_tips_heading' => $request->safety_tips_heading]);
        }
        if ($request->safety_tips_text) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['safety_tips_text' => $request->safety_tips_text]);
        }
        if ($request->stove_text1) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['stove_text1' => $request->stove_text1]);
        }
        if ($request->stove_text2) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['stove_text2' => $request->stove_text2]);
        }
        if ($request->leakage_text1) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['leakage_text1' => $request->leakage_text1]);
        }
        if ($request->leakage_text2) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['leakage_text2' => $request->leakage_text2]);
        }
        if ($request->leakage_text3) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['leakage_text3' => $request->leakage_text3]);
        }
        if ($request->leakage_text4) {
            CylinderSafety::where('id', $request->cylinderSafety_Id)->first()->update(['leakage_text4' => $request->leakage_text4]);
        }


        $oldInformation = CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first();
        // dd($request->all());

        if ($oldInformation) {

            if ($request->hasFile('top_img')) {
                $oldImg = $oldInformation->top_img;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->top_img->getClientOriginalName();
                $request->top_img->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['top_img' => $imgName]);
            }
            if ($request->hasFile('safety_tips_img1')) {
                $oldImg = $oldInformation->safety_tips_img1;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->safety_tips_img1->getClientOriginalName();
                $request->safety_tips_img1->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['safety_tips_img1' => $imgName]);
            }

            if ($request->hasFile('safety_tips_img2')) {
                $oldImg = $oldInformation->safety_tips_img2;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->safety_tips_img2->getClientOriginalName();
                $request->safety_tips_img2->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['safety_tips_img2' => $imgName]);
            }
            if ($request->hasFile('stove_img1')) {
                $oldImg = $oldInformation->stove_img1;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->stove_img1->getClientOriginalName();
                $request->stove_img1->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['stove_img1' => $imgName]);
            }
            if ($request->hasFile('stove_img2')) {
                $oldImg = $oldInformation->stove_img2;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->stove_img2->getClientOriginalName();
                $request->stove_img2->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['stove_img2' => $imgName]);
            }
            if ($request->hasFile('leakage_img1')) {
                $oldImg = $oldInformation->leakage_img1;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->leakage_img1->getClientOriginalName();
                $request->leakage_img1->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['leakage_img1' => $imgName]);
            }
            if ($request->hasFile('leakage_img2')) {
                $oldImg = $oldInformation->leakage_img2;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->leakage_img2->getClientOriginalName();
                $request->leakage_img2->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['leakage_img2' => $imgName]);
            }
            if ($request->hasFile('leakage_img3')) {
                $oldImg = $oldInformation->leakage_img3;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->leakage_img3->getClientOriginalName();
                $request->leakage_img3->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['leakage_img3' => $imgName]);
            }
            if ($request->hasFile('leakage_img4')) {
                $oldImg = $oldInformation->leakage_img4;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->leakage_img4->getClientOriginalName();
                $request->leakage_img4->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['leakage_img4' => $imgName]);
            }
            if ($request->hasFile('safely_img1')) {
                $oldImg = $oldInformation->safely_img1;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->safely_img1->getClientOriginalName();
                $request->safely_img1->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['safely_img1' => $imgName]);
            }
            if ($request->hasFile('safely_img2')) {
                $oldImg = $oldInformation->safely_img2;
                if ($oldImg) {
                    Storage::delete('/public/cylinderSafety/' . $oldImg);
                }
                $imgName = time().'-'.$request->safely_img2->getClientOriginalName();
                $request->safely_img2->move('storage/cylinderSafety', $imgName);
                CylinderSafety::where('id', $request->cylinderSafety_Id)->where('delete_status', 1)->first()->update(['safely_img2' => $imgName]);
            }


        }
        return redirect()->back();

    }
}
