<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConcernController extends Controller
{
    public function missionVission()
    {
        $concern = Concern::where('information_for','mission-vision')->where('delete_status',1)->first();
        // dd($concern);
        return view('backend.mission-vision',compact('concern'));
    }

    public function universalLpGas()
    {
        $concern = Concern::where('information_for','universal_lp_gas')->where('delete_status',1)->first();
        return view('backend.universal-lp-gas',compact('concern'));
    }




    public function concernUpdate(Request $request)
    {
        $oldInformation = Concern::where('id', $request->concern_Id)->where('delete_status', 1)->first();
        if ($request->hasFile('img')) {
            $oldImg = $oldInformation->img;
            if ($oldImg) {
                Storage::delete('/public/image/' . $oldImg);
            }
            $imgName = time().'-'.$request->img->getClientOriginalName();
            $request->img->storeAs('image', $imgName, 'public');
            Concern::where('id', $request->concern_Id)->where('delete_status', 1)->first()->update(['img' => $imgName]);
        }
        if ($request->heading) {
            Concern::where('id', $request->concern_Id)->first()->update(['heading' => $request->heading]);
        }
        if ($request->text1) {
            Concern::where('id', $request->concern_Id)->first()->update(['text1' => $request->text1]);
        }
        if ($request->text2) {
            Concern::where('id', $request->concern_Id)->first()->update(['text2' => $request->text2]);
        }

        return redirect()->back();

    }
}
