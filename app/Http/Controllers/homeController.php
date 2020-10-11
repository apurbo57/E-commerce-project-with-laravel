<?php

namespace App\Http\Controllers;
use App\tbl_category;
use App\tbl_subCategory;
use App\tbl_product;
use App\tbl_slider;
use App\tbl_brand;
use DB;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $product = tbl_product::orderBy('id','ASC')->where('status', 1)->get();
        $data = tbl_category::with('sub_category')->orderBy('id','ASC')->where('status', 1)->get();
        $slider = tbl_slider::where('start','<=',date('Y-m-d'))->where('end','>=',date('Y-m-d'))->where('status', 1)->latest()->get();
        return view('fontend.home',compact('data','product','slider'));
    }

    public function getProductByCat($id){
        $products = tbl_product::where('cat_id',$id)->get();
        return view('fontend.category',compact('products'));
    }

    public function getProductBySubCat($id){
        $products = tbl_product::where('subcat_id',$id)->get();
        return view('fontend.category',compact('products'));
    }

    public function getProductByBrand($id){
        $products = tbl_product::where('brand_id',$id)->get();
        return view('fontend.category',compact('products'));
    }

    public function product($id){
        $products = tbl_product::find($id);
        return view('fontend.single_product',compact('products'));
    }
}
