<?php

namespace App\Http\Controllers;

use App\Models\EventPicture;
use App\Models\NewsEvent;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class NewsEventController extends Controller
{
    //
    public function index()
    {
        $settings = Setting::where('delete_status', 1)->first();
        $events = NewsEvent::with('eventPictures')->where('delete_status', 1)->orderBy('id')->get();
        return view('frontend.news-events', compact("settings",'events'));
    }
    public function eventShow($id)
    {
        $settings = Setting::where('delete_status', 1)->first();
        $event = NewsEvent::with('eventPictures')->findOrFail($id);

        return view('frontend.eventShow', compact('settings','event'));
    }
    public function event()
    {
        $events = NewsEvent::where('delete_status', 1)->orderBy('id')->get();
        // dd($events);
        return view('backend.event.index', compact('events'));
    }
    public function create()
    {
        return view('backend.event.create');
    }
    public function edit($id)
    {
        $event = NewsEvent::with('eventPictures')->findOrFail($id);

        return view('backend.event.edit', compact('event'));
    }
    public function eventImgDelete(Request $request)
    {
        $event_pic= EventPicture::findOrFail($request->id);
        $event_pic->delete();

        return $event_pic;
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'Event_Title' => 'required',
            'Event_Image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('Event_Image')) {
            $Event_Image = time() . '-' . $request->Event_Image->getClientOriginalName();
            $request->Event_Image->move('storage/eventImage', $Event_Image);
        }

        $events = new NewsEvent();
        $events->main_img = $Event_Image;
        $events->title = $request->Event_Title;
        $events->text1 = $request->text1;
        $events->save();

        if ($request->hasfile('Event_pic')) {
            foreach ($request->file('Event_pic') as $image) {
                $name = time() . '-' . $image->getClientOriginalName();
                $image->move('storage/eventImage', $name);
                $event_pic = new EventPicture();
                $event_pic->news_event_id = $events->id;
                $event_pic->img = $name;
                $event_pic->save();
            }
        }

        return redirect()->route('backend.event');
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
            'Event_Title' => 'required',
            'Event_Image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $events = NewsEvent::findOrFail($request->event_id);
        if ($request->hasFile('Event_Image')) {
            $Event_Image = time() . '-' . $request->Event_Image->getClientOriginalName();
            $request->Event_Image->move('storage/eventImage', $Event_Image);
            $events->main_img = $Event_Image;
        }

        $events->title = $request->Event_Title;
        $events->text1 = $request->text1;
        $events->update();

        if ($request->hasfile('Event_pic')) {
            foreach ($request->file('Event_pic') as $image) {
                $name = time() . '-' . $image->getClientOriginalName();
                $image->move('storage/eventImage', $name);
                $event_pic = new EventPicture();
                $event_pic->news_event_id = $events->id;
                $event_pic->img = $name;
                $event_pic->save();
            }
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {

        $events = NewsEvent::where('id', $request->id)->first();
        $events->delete_status = 0;
        $events->update();
        return $events;
    }
}
