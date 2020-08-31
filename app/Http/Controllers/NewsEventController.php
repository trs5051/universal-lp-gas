<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;
use App\Models\Setting;

class NewsEventController extends Controller
{
    //
    public function index()
    {
        $settings = Setting::where('delete_status', 1)->first();
        return view('frontend.news-events', compact("settings"));
    }
    public function event()
    {
        $events = NewsEvent::where('delete_status', 1)->get();
        // dd($events);
        return view('backend.event.index', compact('events'));
    }
    public function create()
    {
        return view('backend.event.create');
    }

    public function fileUpload(Request $req)
    {

      // Image validation
      $this->validate($req, [
        'imageFile' => 'required|max:2048',
        'imageFile.*' => 'mimes:jpg,jpeg,png,gif'
      ]);

      if ($imageFiles = $req->file('imageFile')) {
        foreach ($imageFiles as $file) {
          $name = $file->getClientOriginalName();
          $path = $file->storeAs('photos', $name);
          if ($file->move($path, $name)) {
            $save   =   Image::create([
              'name' => $name,
              'image_path' => $path
            ]);
          }
        }
        return back()->with("success", "File has been uploaded.");
      }
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

        $events = new NewsEvent();
        $events->img = $img;
        $events->name = $request->Name;
        $events->designation = $request->designation;
        $events->management_category_id = $request->post;
        $events->text = $request->text;
        $events->save();


        return array($events);
    }

    public function findOne(Request $request)
    {
        $events = NewsEvent::findOrFail($request->id);
        return $events;
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
        ]);
        $events = NewsEvent::findOrFail($request->Management_Id);
        if ($request->hasFile('image')) {
            $oldimg = $events->img;
            if ($oldimg) {
                Storage::delete('/public/managementImage/' . $oldimg);
            }
            $img = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/managementImage', $img);
            $events->img = $img;
        }
        $events->name = $request->Name;
        $events->designation = $request->designation;
        $events->management_category_id = $request->post;
        $events->text = $request->text;
        $events->update();
        return $events;
    }

    public function destroy(Request $request)
    {

        $events = NewsEvent::where('id', $request->id)->first();
        $events->delete_status = 0;
        $events->update();
        return $events;
    }
}
