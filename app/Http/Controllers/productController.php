<?php

namespace App\Http\Controllers;

use App\tbl_brand;
use App\tbl_category;
use App\tbl_subCategory;
use App\tbl_product;
use Illuminate\Http\Request;
use Session;

class productController extends Controller
{
    public function addproduct(){
        $brand = tbl_brand::orderBy('id','DESC')->get();
        $category = tbl_category::orderBy('id','ASC')->get();
        $subCategory = tbl_subCategory::orderBy('id','DESC')->get();
        return view('admin.product_add', compact('category','brand','subCategory'));
    }

    public function saveProduct(Request $request){

        $request->validate([
            'brand_id' => 'required',
            'cat_id' => 'required',
            'subcat_id' => 'required',
            'product_name' => 'required|min:5|max:20',
            'product_model' => 'required',
            'product_size' => 'required',
            'product_color' => 'required',
            'product_quantity' => 'required',
            'product_description' => 'required',
            'product_image' => 'required',
            'product_price' => 'required',
        ]);
        
        // single image uplode

        $image = $request->file('product_image');
        $fileEx = $image->getClientOriginalExtension();
        $fileName = date('Ydmhis.').$fileEx;

        // Image::make($image)->save(public_path('uploads/product/') . $fileName);

        $image->move(public_path('uploads/product/'), $fileName);

        // multiple image uplode
        // $images = [];

        // if ($request->hasFile('gallery')) {
        //     $i = 0;
        //     foreach ($request->file('gallery') as $file) {
        //         $fileEx = $file->getClientOriginalExtension();
        //         $fileName = date('Ydmhis_').$i.'.'.$fileEx;

        //         Image::make($file)->save(public_path('uploads/product/') . $fileName);
        //         $images[] = $fileName;
        //         $i++;
        //     }
        // }

        $product = new tbl_product();
        $product->brand_id = $request->brand_id;
        $product->cat_id = $request->cat_id;
        $product->subcat_id = $request->subcat_id;
        $product->product_name = $request->product_name;
        $product->product_model = $request->product_model;
        $product->product_color = $request->product_color;
        $product->product_size = $request->product_size;
        $product->quantity = $request->product_quantity;
        $product->price = $request->product_price;
        $product->special_price = $request->special_price;
        $product->sp_start = $request->sp_start;
        $product->sp_end = $request->sp_end;
        $product->image = $fileName;
        $product->description = $request->product_description;
        $product->long_description = $request->product_longdescription;
        $product->status = $request->product_status;
        // $product->image_gallery = json_encode($images);
        
        // $product->special_prise = $request->sprice;
        // $product->special_prise_start = $request->start;
        // $product->special_prise_end = $request->end;
        
        $product->save();

        session::flash('success', 'Product Add Successfully !');

        return back();
    }

    public function allProduct(){
        $data = tbl_product::with('brand')->with('category')->orderBy('id','DESC')->get();
        return view('admin.product_all',compact('data'));
    }

    public function activeStatus($id){
        $product = tbl_product::find($id);
        $product->status = 1;
        $product->save();

        Session::flash('success','Product Active Successfull !');
        return back();
    }

    public function inactiveStatus($id){
        $product = tbl_product::find($id);
        $product->status = 0;
        $product->save();

        Session::flash('success','Product Inactive Successfull !');
        return back();
    }

    public function editProduct($id){
        $row = tbl_product::find($id);
        $brand = tbl_brand::orderBy('id','DESC')->get();
        $category = tbl_category::orderBy('id','ASC')->get();
        $subCategory = tbl_subCategory::orderBy('id','DESC')->get();
        return view('admin.product_edit', compact('row','brand','category','subCategory'));
    }

    public function updateProduct(Request $request){
        if ($request->product_image) {
            $request->validate([
                'brand_id' => 'required',
                'cat_id' => 'required',
                'subcat_id' => 'required',
                'product_name' => 'required|min:5|max:20',
                'product_model' => 'required',
                'product_size' => 'required',
                'product_color' => 'required',
                'product_quantity' => 'required',
                'product_description' => 'required',
                'product_image' => 'required',
                'product_price' => 'required',
            ]);
            
            // single image uplode
    
            $image = $request->file('product_image');
            $fileEx = $image->getClientOriginalExtension();
            $fileName = date('Ydmhis.').$fileEx;
    
            // Image::make($image)->save(public_path('uploads/product/') . $fileName);
    
            $image->move(public_path('uploads/product/'), $fileName);
    
            // multiple image uplode
            // $images = [];
    
            // if ($request->hasFile('gallery')) {
            //     $i = 0;
            //     foreach ($request->file('gallery') as $file) {
            //         $fileEx = $file->getClientOriginalExtension();
            //         $fileName = date('Ydmhis_').$i.'.'.$fileEx;
    
            //         Image::make($file)->save(public_path('uploads/product/') . $fileName);
            //         $images[] = $fileName;
            //         $i++;
            //     }
            // }
    
            $product = tbl_product::find($request->product_id);
            $product->brand_id = $request->brand_id;
            $product->cat_id = $request->cat_id;
            $product->subcat_id = $request->subcat_id;
            $product->product_name = $request->product_name;
            $product->product_model = $request->product_model;
            $product->product_color = $request->product_color;
            $product->product_size = $request->product_size;
            $product->quantity = $request->product_quantity;
            $product->price = $request->product_price;
            $product->special_price = $request->special_price;
            $product->sp_start = $request->sp_start;
            $product->sp_end = $request->sp_end;
            $product->image = $fileName;
            $product->description = $request->product_description;
            $product->long_description = $request->product_longdescription;
            $product->status = $request->product_status;
            // $product->image_gallery = json_encode($images);
            
            // $product->special_prise = $request->sprice;
            // $product->special_prise_start = $request->start;
            // $product->special_prise_end = $request->end;
            
            $product->save();
    
            session::flash('success', 'Product Update Successfully !');
    
            return back();
        }else{
            $request->validate([
                'brand_id' => 'required',
                'cat_id' => 'required',
                'subcat_id' => 'required',
                'product_name' => 'required|min:5|max:20',
                'product_model' => 'required',
                'product_size' => 'required',
                'product_color' => 'required',
                'product_quantity' => 'required',
                'product_description' => 'required',
                'product_price' => 'required',
            ]);
            $product = tbl_product::find($request->product_id);
            $product->brand_id = $request->brand_id;
            $product->cat_id = $request->cat_id;
            $product->subcat_id = $request->subcat_id;
            $product->product_name = $request->product_name;
            $product->product_model = $request->product_model;
            $product->product_color = $request->product_color;
            $product->product_size = $request->product_size;
            $product->quantity = $request->product_quantity;
            $product->price = $request->product_price;
            $product->special_price = $request->special_price;
            $product->sp_start = $request->sp_start;
            $product->sp_end = $request->sp_end;
            $product->description = $request->product_description;
            $product->long_description = $request->product_longdescription;
            $product->status = $request->product_status;
            $product->save();
    
            session::flash('success', 'Product Update Successfully !');
    
            return back();
        }
    }

    public function deleteProduct($id){
        $product = Product::find($id);

        unlink(public_path('uploads/product/') . $product->image);

        // $images = json_decode($product->image_gallery);
        // foreach ($images as $file) {
        //     unlink(public_path('uploads/product/') . $file);
        // }
        
        $product->delete();

        session::flash('success', 'Product Delete Successfully !');

        return back();
    }
}
