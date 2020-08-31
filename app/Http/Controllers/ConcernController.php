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
    public function universalAgency()
    {
        $concern = Concern::where('information_for','universal_agency')->where('delete_status',1)->first();
        return view('backend.concerns.universal-agency',compact('concern'));
    }
    public function msEnterprise()
    {
        $concern = Concern::where('information_for','msEnterprise')->where('delete_status',1)->first();
        return view('backend.concerns.msEnterprise',compact('concern'));
    }
    public function universalGasCylinderLtd()
    {
        $concern = Concern::where('information_for','universalGasCylinderLtd')->where('delete_status',1)->first();
        return view('backend.concerns.universalGasCylinderLtd',compact('concern'));
    }
    public function ambTraders()
    {
        $concern = Concern::where('information_for','ambTraders')->where('delete_status',1)->first();
        return view('backend.concerns.ambTraders',compact('concern'));
    }
    public function usEnergyPower()
    {
        $concern = Concern::where('information_for','usEnergyPower')->where('delete_status',1)->first();
        return view('backend.concerns.usEnergyPower',compact('concern'));
    }
    public function universalCngPetrolPump()
    {
        $concern = Concern::where('information_for','universalCngPetrolPump')->where('delete_status',1)->first();
        return view('backend.concerns.universalCngPetrolPump',compact('concern'));
    }
    public function universalEngineeringLtd()
    {
        $concern = Concern::where('information_for','universalEngineeringLtd')->where('delete_status',1)->first();
        return view('backend.concerns.universalEngineeringLtd',compact('concern'));
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
            $request->img->move('storage/image', $imgName);
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
