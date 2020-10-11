<?php

namespace App\Http\Controllers;

use App\tbl_category;
use App\tbl_subCategory;
use Illuminate\Http\Request;
use DB;
use phpDocumentor\Reflection\Types\Nullable;
use Session;

class categoryController extends Controller
{
    public function addCategory(){
        return view('admin.category_add');
    }

    public function saveCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:tbl_categories,category_name',
            'category_description' => 'required',
        ]);

        $category = new tbl_category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->status = $request->status;
        $category->save();

        Session::flash('success','category Add Successfull !');
        return back();
    }

    public function allCategory(){
        $data = tbl_category::orderBy('id','DESC')->get();
        $subcategory = tbl_subCategory::with('category')->get();
        return view('admin.category_all',compact(['data','subcategory']));
    }

    public function activeStatus($id){
        $category = tbl_category::find($id);
        $category->status = 1;
        $category->save();

        Session::flash('success','category Active Successfull !');
        return back();
    }

    public function inactiveStatus($id){
        $category = tbl_category::find($id);
        $category->status = 0;
        $category->save();

        Session::flash('success','category Inactive Successfull !');
        return back();
    }

    public function editCategory($id){
        $row = tbl_category::find($id);
        return view('admin.category_edit', compact('row'));
    }

    public function updateCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:tbl_categories,category_name',
        ]);

        $category = tbl_category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->save();
        session::flash('success', 'Category Update Successfully !');
        return back();
    }

    public function deleteCategory($id){
        $category = tbl_category::find($id);
        $category->delete();

        session::flash('success', 'category Delete Successfully !');

        return back();
    }


    //========================== Sub Category===================================//

    public function addSubCategory(){
        $data = tbl_category::orderBy('id','ASC')->get();
        return view('admin.subCategory_add',compact('data'));
    }

    public function saveSubCategory(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subCategory_name' => 'required|unique:tbl_sub_categories,subCategory_name',
            'subCategory_description' => 'required',
        ]);

        $subCategory = new tbl_subCategory();
        $subCategory->tbl_category_id = $request->category_id;
        $subCategory->subCategory_name = $request->subCategory_name;
        $subCategory->subCategory_description = $request->subCategory_description;
        $subCategory->status = $request->status;
        $subCategory->save();

        Session::flash('success','Sub Category Add Successfully !');
        return back();

    }

    public function SubactiveStatus($id){
        $category = tbl_subCategory::find($id);
        $category->status = 1;
        $category->save();

        Session::flash('success','Sub category Active Successfull !');
        return back();
    }

    public function SubinactiveStatus($id){
        $category = tbl_subCategory::find($id);
        $category->status = 0;
        $category->save();

        Session::flash('success','Sub category Inactive Successfull !');
        return back();
    }

    public function editSubCategory($id){
        $row = tbl_subCategory::find($id);
        return view('admin.subCategory_edit', compact('row'));
    }

    public function updateSubCategory(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subCategory_name' => 'required|unique:tbl_sub_categories,subCategory_name',
            'subCategory_description' => 'required',
        ]);

        $subCategory = tbl_subCategory::find($request->category_id);
        $subCategory->category_id = $request->category_id;
        $subCategory->subCategory_name = $request->subCategory_name;
        $subCategory->subCategory_description = $request->subCategory_description;
        $subCategory->status = $request->status;
        $subCategory->save();

        session::flash('success', 'Sub Category Update Successfully !');
        return back();
    }

    public function deleteSubCategory($id){
        $category = tbl_category::find($id);
        $category->delete();

        session::flash('success', 'category Delete Successfully !');

        return back();
    }
}
