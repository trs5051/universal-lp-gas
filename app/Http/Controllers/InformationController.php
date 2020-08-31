<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    public function businessConcern(){

        $information = Information::where('information_for','our_business_concern')->where('delete_status',1)->first();

        return view('backend.our-business-concern',compact('information'));
    }

    public function aboutUs()
    {
        $aboutUs = Information::where('information_for','about_us')->where('delete_status',1)->first();

        return view('backend.about-us',compact('aboutUs'));

    }
    public function directors()
    {
        $directors = Information::where('information_for','directors')->where('delete_status',1)->first();
        return view('backend.directors',compact('directors'));
    }
    public function compliance()
    {
        $compliance  = Information::where('information_for','compliance')->where('delete_status',1)->first();
        // dd($compliance);
        return view('backend.compliance',compact('compliance'));
    }
    public function whyLPG()
    {
        $whyLPG  = Information::where('information_for','whyLPG')->where('delete_status',1)->first();
        // dd($whyLPG);
        return view('backend.whyLPG',compact('whyLPG'));
    }








    public function informationUpdate(Request $request)
    {
        // dd($request->all());

        if ($request->buseness_concern) {
            Information::where('id', $request->information_Id)->where('information_for', 'our_business_concern')->first()->update(['text1' => $request->buseness_concern]);
        }
        if ($request->heading1) {
            Information::where('id', $request->information_Id)->first()->update(['heading1' => $request->heading1]);
        }
        if ($request->heading2) {
            Information::where('id', $request->information_Id)->first()->update(['heading2' => $request->heading2]);
        }
        if ($request->heading3) {
            Information::where('id', $request->information_Id)->first()->update(['heading3' => $request->heading3]);
        }
        if ($request->heading4) {
            Information::where('id', $request->information_Id)->first()->update(['heading4' => $request->heading4]);
        }
        if ($request->description1) {
            Information::where('id', $request->information_Id)->first()->update(['description1' => $request->description1]);
        }
        if ($request->description2) {
            Information::where('id', $request->information_Id)->first()->update(['description2' => $request->description2]);
        }
        if ($request->text1) {
            Information::where('id', $request->information_Id)->first()->update(['text1' => $request->text1]);
        }

            Information::where('id', $request->information_Id)->first()->update(['text2' => $request->text2]);


            Information::where('id', $request->information_Id)->first()->update(['text3' => $request->text3]);

        if ($request->text4) {
            Information::where('id', $request->information_Id)->first()->update(['text4' => $request->text4]);
        }

        $oldInformation = Information::where('id', $request->information_Id)->where('delete_status', 1)->first();
        // dd($request->all());

        if ($oldInformation) {

            if ($request->hasFile('img1')) {
                $oldImg = $oldInformation->img1;
                if ($oldImg) {
                    Storage::delete('/public/information/' . $oldImg);
                }
                $imgName = time().'-'.$request->img1->getClientOriginalName();
                $request->img1->move('storage/information', $imgName);
                Information::where('id', $request->information_Id)->where('delete_status', 1)->first()->update(['img1' => $imgName]);
            }
            if ($request->hasFile('img2')) {
                $oldImg = $oldInformation->img2;
                if ($oldImg) {
                    Storage::delete('/public/information/' . $oldImg);
                }
                $imgName = time().'-'.$request->img2->getClientOriginalName();
                $request->img2->move('storage/information', $imgName);
                Information::where('id', $request->information_Id)->where('delete_status', 1)->first()->update(['img2' => $imgName]);
            }
            if ($request->hasFile('img3')) {
                $oldImg = $oldInformation->img3;
                if ($oldImg) {
                    Storage::delete('/public/information/' . $oldImg);
                }
                $imgName = time().'-'.$request->img3->getClientOriginalName();
                $request->img3->move('storage/information', $imgName);
                Information::where('id', $request->information_Id)->where('delete_status', 1)->first()->update(['img3' => $imgName]);
            }
            if ($request->hasFile('img4')) {
                $oldImg = $oldInformation->img4;
                if ($oldImg) {
                    Storage::delete('/public/information/' . $oldImg);
                }
                $imgName = time().'-'.$request->img4->getClientOriginalName();
                $request->img4->move('storage/information', $imgName);
                Information::where('id', $request->information_Id)->where('delete_status', 1)->first()->update(['img4' => $imgName]);
            }
            // dd($request->all());


        }
        return redirect()->back();



    }
}
