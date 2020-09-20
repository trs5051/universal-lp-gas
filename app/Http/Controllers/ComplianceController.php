<?php

namespace App\Http\Controllers;

use App\Models\Compliance;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\Setting;

class ComplianceController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $compliances  = Compliance::where('delete_status',1)->get();

        // dd($compliances);

        return view('frontend.compliance',compact("settings",'compliances'));
    }
     // backend
     public function compliance()
     {
         $compliances = Compliance::where('delete_status', 1)->get();
         return view('backend.compliance', compact('compliances'));
     }

     public function store(Request $request)
     {
         // dd($request->all());
         $validatedData = $request->validate([
             'title' => 'required|unique:compliances,heading|max:255',
             'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
         ]);
         if ($request->hasFile('image')) {
             $img = time() . '-' . $request->image->getClientOriginalName();
             $request->image->move('storage/compliancesimage', $img);
         }
         $compliances = new Compliance();
         $compliances->img = $img;
         $compliances->heading = $request->title;
         $compliances->text1 = $request->text1;
         $compliances->text2 = $request->text2;
         $compliances->save();
         return $compliances;
     }

     public function findOne(Request $request)
     {
         $compliances = Compliance::findOrFail($request->id);
         return $compliances;
     }

     public function update(Request $request)
     {
         // dd($request->all());
         $validatedData = $request->validate([
             'title' => 'required|max:255',
         ]);
         if ($request->hasFile('image')) {
             $img = time() . '-' . $request->image->getClientOriginalName();
             $request->image->move('storage/compliancesimage', $img);
         }

         $compliances = Compliance::findOrFail($request->Compliance_Id);
         if ($request->hasFile('image')) {
             $compliances->img = $img;
         }

         $compliances->heading = $request->title;
         $compliances->text1 = $request->text1;
         $compliances->text2 = $request->text2;
         $compliances->update();
         return $compliances;
     }

     public function destroy(Request $request)
     {
         $compliances = Compliance::where('id', $request->id)->first();
         $compliances->delete_status = 0;
         $compliances->update();
         return $compliances;
     }
}
