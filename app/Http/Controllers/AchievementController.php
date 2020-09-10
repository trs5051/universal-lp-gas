<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Setting;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    //Frontend
    public function index()
    {
        $settings = Setting::where('delete_status', 1)->first();
        $achievements = Achievement::where('delete_status', 1)->get();

        return view('frontend.achievement', compact("settings", 'achievements'));
    }

    // backend
    public function achievementAward()
    {
        $achievements = Achievement::where('delete_status', 1)->get();
        return view('backend.achievement', compact('achievements'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|unique:achievements,heading|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:200',
        ]);
        if ($request->hasFile('image')) {
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/achievementsImage', $img);
        }
        $achievements = new Achievement();
        $achievements->img = $img;
        $achievements->heading = $request->title;
        $achievements->text1 = $request->text1;
        $achievements->text2 = $request->text2;
        $achievements->save();
        return $achievements;
    }

    public function findOne(Request $request)
    {
        $achievements = Achievement::findOrFail($request->id);
        return $achievements;
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);
        if ($request->hasFile('image')) {
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/achievementsImage', $img);
        }

        $achievements = Achievement::findOrFail($request->Achievement_Id);

        if ($request->hasFile('image')) {
            $achievements->img = $img;
        }

        $achievements->heading = $request->title;
        $achievements->text1 = $request->text1;
        $achievements->text2 = $request->text2;
        $achievements->update();
        return $achievements;
    }

    public function destroy(Request $request)
    {
        $achievements = Achievement::where('id', $request->id)->first();
        $achievements->delete_status = 0;
        $achievements->update();
        return $achievements;
    }
}

