<?php

namespace App\Http\Controllers;

use App\Models\FrontSlider;
use App\Models\Slider;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontSliderController extends Controller
{
    public function index()
    {
        $frontSliders = Slider::where('delete_status', 1)->orderBy('id','asc')->get();
        // dd($frontSliders);
        return view('backend.front-slider.index', compact('frontSliders'));
    }
    public function create()
    {
        return view('backend.front-slider.create');
    }
    public function store(Request $request)

    {
        // dd($request->all());
        if ($request->hasFile('image')) {
            $imgName = time().'-'.$request->image->getClientOriginalName();
            $request->image->move('storage/sliderImage', $imgName);
        }

        $slider = new Slider();
        $slider->img = $imgName;
        $slider->title = $request->Slider_Title;
        $slider->slider_for = 'front_slider';
        $slider->save();
        return $slider ;
    }

    public function destroy(Request $request){

        $frontSlider = Slider::where('id',$request->id)->first();
        $frontSlider->delete();

        if ($frontSlider->img) {
            $img = 'public/sliderImage/' . $frontSlider->img;
            Storage::delete('/public/sliderImage/' .$frontSlider->img);

        }
        return $frontSlider;

    }
}
