<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Setting;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //Frontend
    public function index()
    {
        $settings = Setting::where('delete_status', 1)->first();
        $notices = Notice::where('delete_status', 1)->get();

        return view('frontend.notice', compact("settings", 'notices'));
    }

    // backend
    public function notice()
    {
        $notices = Notice::where('delete_status', 1)->get();
        return view('backend.notice', compact('notices'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Notice_Name' => 'required|unique:notices,heading|max:255',
            'image' => 'image|mimes:jpeg,png,jpg|max:9048',
        ]);
        $notices = new Notice();
        if ($request->hasFile('image')) {
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/noticesimage', $img);
            $notices->img = $img;
        }


        $notices->heading = $request->Notice_Name;
        $notices->text1 = $request->text1;
        $notices->text2 = $request->text2;
        $notices->save();
        return $notices;
    }

    public function findOne(Request $request)
    {
        $notices = Notice::findOrFail($request->id);
        return $notices;
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Notice_Name' => 'required|max:255',
        ]);
        if ($request->hasFile('image')) {
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/noticesimage', $img);
        }

        $notices = Notice::findOrFail($request->Notice_Id);
        if ($request->hasFile('image')) {
            $notices->img = $img;
        }

        $notices->heading = $request->Notice_Name;
        $notices->text1 = $request->text1;
        $notices->text2 = $request->text2;
        $notices->update();
        return $notices;
    }

    public function destroy(Request $request)
    {
        $notices = Notice::where('id', $request->id)->first();
        $notices->delete_status = 0;
        $notices->update();
        return $notices;
    }
}
