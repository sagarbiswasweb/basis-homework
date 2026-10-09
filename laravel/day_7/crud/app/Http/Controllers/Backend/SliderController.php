<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function create(){
        return view('backend.slider.add');
    }

    public function store(Request $request){
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        
        // for image 
        $img = $request->image;
        $imgName = $img->getClientOriginalName();
        $folder = 'slider-images/';
        $img->move($folder, $imgName);
        $slider->image = $folder.$imgName;
        
        $slider->save();
        return back()->with('msg', 'Slider added successsfully');
    }

    public function index(){
        $sliders = Slider::all();
        return view('backend.slider.manage', compact('sliders'));
    }
}
