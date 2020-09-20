<?php

namespace App\Http\Controllers;

use App\Models\Management;
use App\Models\ManagementCategory;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class ManagementController extends Controller
{
    public function index(){
        $settings = Setting::where('delete_status',1)->first();
        $managements = Management::with('managementCategory')->where('delete_status',1)->get();
        $categories = ManagementCategory::where('delete_status',1)->orderBy('id')->get();
        return view('frontend.management',compact("settings",'managements','categories'));
    }
    public function management()
    {
        $managements = Management::with('managementCategory')->where('delete_status',1)->get();
        $categories = ManagementCategory::where('delete_status',1)->orderBy('id')->get();

        return view('backend.management.index',compact('managements','categories'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Name' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('img')) {
            $img = time() . '-' . $request->img->getClientOriginalName();
            $request->img->move('storage/managementImage', $img);
        }

        $managements = new Management();
        $managements->img = $img;
        $managements->name = $request->Name;
        $managements->designation = $request->designation;
        $managements->management_category_id = $request->post;
        $managements->text = $request->text;
        $managements->phone = $request->phone;
        $managements->email = $request->email;
        $managements->save();
        $category = ManagementCategory::findOrFail($request->post);

        return array ($managements,$category);
    }

    public function findOne(Request $request)
    {
        $managements = Management::findOrFail($request->id);
        return $managements;
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
        ]);
        $managements = Management::findOrFail($request->Management_Id);
        if ($request->hasFile('image')) {
            $oldimg = $managements->img;
                if ($oldimg) {
                    Storage::delete('/public/managementImage/' . $oldimg);
                }
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/managementImage', $img);
            $managements->img = $img;
        }
        $managements->name = $request->Name;
        $managements->designation = $request->designation;
        $managements->management_category_id = $request->post;
        $managements->text = $request->text;
        $managements->phone = $request->phone;
        $managements->email = $request->email;
        $managements->update();
        return $managements;
    }

    public function destroy(Request $request)
    {

        $managements = Management::where('id',$request->id)->first();
        $managements->delete_status = 0;
        $managements->update();
        return $managements;

    }
}
