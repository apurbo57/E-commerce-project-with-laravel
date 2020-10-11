<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_slider;
use Session;

class sliderController extends Controller
{
    public function addSlider(){
        return view('admin.slider_add');
    }

    public function saveslider(Request $request){
        $request->validate([
            'title' => 'required|min:5|max:20',
            'sub_title' => 'required|min:10|max:70',
            'image' => 'required',
            'url' => 'required|url',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);

        $image = $request->file('image');
        $fileEx = $image->getClientOriginalExtension();
        $fileName = date('Ydmhis.').$fileEx;

        $image->move(public_path('uploads/slider/'), $fileName);

        $data = new tbl_slider();
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->url = $request->url;
        $data->start = $request->start;
        $data->end = $request->end;
        $data->image = $fileName;
        $data->save();

        session::flash('success', 'Slider Add Successfully !');

        return back();
    }

    public function allSlider(){
        $data = tbl_slider::orderBy('id','DESC')->get();
        return view('admin.slider_all', compact('data'));
    }

    public function activeStatus($id){
        $slider = tbl_slider::find($id);
        $slider->status = 1;
        $slider->save();

        Session::flash('success','Slider Active Successfull !');
        return back();
    }

    public function inactiveStatus($id){
        $slider = tbl_slider::find($id);
        $slider->status = 0;
        $slider->save();

        Session::flash('success','Slider Inactive Successfull !');
        return back();
    }

    public function editSlider($id){
        $data = tbl_slider::find($id);
        return view('admin.slider_edit',compact('data'));
    }

    public function updateSlider(Request $request){
        if ($request->image) {
            $request->validate([
                'title' => 'required|min:5|max:20',
                'sub_title' => 'required|min:10|max:70',
                'image' => 'required',
                'url' => 'required|url',
                'start' => 'required|date',
                'end' => 'required|date|after_or_equal:start',
            ]);
    
            $image = $request->file('image');
            $fileEx = $image->getClientOriginalExtension();
            $fileName = date('Ydmhis.').$fileEx;
    
            $image->move(public_path('uploads/slider/'), $fileName);
    
            $data = tbl_slider::find($request->s_id);
            $data->title = $request->title;
            $data->sub_title = $request->sub_title;
            $data->url = $request->url;
            $data->start = $request->start;
            $data->end = $request->end;
            $data->status = $request->status;
            $data->image = $fileName;
            $data->save();
    
            session::flash('success', 'Slider Update Successfully !');
    
            return back();
        }else{
            $request->validate([
                'title' => 'required|min:5|max:20',
                'sub_title' => 'required|min:10|max:70',
                'url' => 'required|url',
                'start' => 'required|date',
                'end' => 'required|date|after_or_equal:start',
            ]);

            $data = tbl_slider::find($request->s_id);
            $data->title = $request->title;
            $data->sub_title = $request->sub_title;
            $data->url = $request->url;
            $data->start = $request->start;
            $data->end = $request->end;
            $data->status = $request->status;
            $data->save();
    
            session::flash('success', 'Slider Update Successfully !');
    
            return back();
        }
    }

    public function deleteSlider($id){
        $slider = tbl_slider::find($id);
        unlink(public_path('uploads/slider/') . $slider->image);
        $slider->delete();

        session::flash('success', 'Slider Delete Successfully !');

        return back();
    }
}
