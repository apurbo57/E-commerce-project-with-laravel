<?php

namespace App\Http\Controllers;

use App\tbl_brand;
use Illuminate\Http\Request;
use DB;
use phpDocumentor\Reflection\Types\Nullable;
use Session;

class brandController extends Controller
{
    public function addBrand(){
        return view('admin.brand_add');
    }

    public function saveBrand(Request $request){
        $request->validate([
            'brand_name' => 'required|unique:tbl_brands,brand_name',
        ]);

        $brand = new tbl_brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->status = $request->status;
        $brand->save();

        Session::flash('success','Brand Add Successfull !');
        return back();
    }

    public function allBrand(){
        $data = tbl_brand::orderBy('id','DESC')->get();
        return view('admin.brand_all',compact('data'));
    }

    public function activeStatus($id){
        $brand = tbl_brand::find($id);
        $brand->status = 1;
        $brand->save();

        Session::flash('success','Brand Active Successfull !');
        return back();
    }

    public function inactiveStatus($id){
        $brand = tbl_brand::find($id);
        $brand->status = 0;
        $brand->save();

        Session::flash('success','Brand Inactive Successfull !');
        return back();
    }

    public function editBrand($id){
        $row = tbl_brand::find($id);
        return view('admin.brand_edit', compact('row'));
    }

    public function updateBrand(Request $request){
        $request->validate([
            'brand_name' => 'required|unique:brands,brand_name',
        ]);

        $brand = tbl_brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->save();
        session::flash('success', 'Brand Update Successfully !');
        return back();
    }

    public function deleteBrand($id){
        $brand = tbl_brand::find($id);
        $brand->delete();

        session::flash('success', 'Brand Delete Successfully !');

        return back();
    }
}
