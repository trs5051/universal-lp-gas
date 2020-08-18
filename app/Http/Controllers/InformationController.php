<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function businessConcern(){

        $information = Information::where('information_for','our_business_concern')->first();

        return view('backend.our-business-concern',compact('information'));
    }
    public function businessConcernUpdate(Request $request)
    {
        if ($request->buseness_concern) {
            Information::where('id', $request->information_Id)->where('information_for', 'our_business_concern')->first()->update(['text1' => $request->buseness_concern]);
        }
        return redirect()->back();
    }
}
