<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Setting;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $settings = Setting::where('delete_status',1)->first();

       return view('frontend.career',compact('settings'));
    }

    public function cvSubmit(Request $request)
    {

         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'cv' => 'required',

        ]);
        if ($request->hasFile('cv')) {
            $cv = time() . '-' . $request->cv->getClientOriginalName();
            $request->cv->move('storage/cv', $cv);
        }
        $career = new Career();
        $career->cv = $cv;
        $career->name = $request->name;
        $career->email = $request->email;
        $career->phone = $request->phone;
        $career->save();
        return redirect()->back()->with('message', 'Successfully Submitted!');


    }

    public function career()
    {
        $careers = Career::where('delete_status', 1)->get();
        return view('backend.careers', compact('careers'));

    }
    public function destroy(Request $request)
    {
        $careers = Career::where('id', $request->id)->first();
        $careers->delete_status = 0;
        $careers->update();
        return $careers;
    }
}
