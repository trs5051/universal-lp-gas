<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Traits\ImageUpload;
use Exception;
use Faker\Provider\Image;

class PlantController extends Controller
{
    //
    public function index()
    {
        $settings = Setting::where('delete_status', 1)->first();
        return view('frontend.plants', compact("settings"));
    }
    public function plants()
    {
        $plants = Plant::where('delete_status', 1)->get();
        return view('backend.plants', compact('plants'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Plant_Name' => 'required|unique:plants,heading|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->storeAs('plantsimage', $img, 'public');
        }
        $plants = new Plant();
        $plants->img = $img;
        $plants->heading = $request->Plant_Name;
        $plants->text1 = $request->text1;
        $plants->text2 = $request->text2;
        $plants->save();
        return $plants;
    }
    public function findOne(Request $request)
    {
        $plants = Plant::findOrFail($request->id);
        return $plants;
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Plant_Name' => 'required|unique:plants,heading|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->storeAs('plantsimage', $img, 'public');
        }

        $plants = Plant::findOrFail($request->Plant_Id);
        $plants->img = $img;
        $plants->heading = $request->Plant_Name;
        $plants->text1 = $request->text1;
        $plants->text2 = $request->text2;
        $plants->update();
        return $plants;
    }
}
