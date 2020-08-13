<?php

namespace App\Http\Controllers;

use App\Models\FrontSlider;
use App\Models\Slider;
use App\Models\Setting;
use Illuminate\Http\Request;

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
        if ($request->hasFile('Slider_Image')) {
            $imgName = $request->Slider_Image->getClientOriginalName();
            $request->Slider_Image->storeAs('sliderImage', $imgName, 'public');
        }

        $slider = new Slider();
        $slider->img = $imgName;
        $slider->title = $request->Slider_Title;
        $slider->slider_for = 'front_slider';
        $slider->save();
        return redirect('front-slider') ;
    }

    public function destroy(Request $request){

        $frontSlider = Slider::where('id',$request->id)->first();
        $frontSlider->delete();
        return $frontSlider;

    }
}
