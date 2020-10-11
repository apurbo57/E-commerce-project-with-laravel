<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_customer;
use App\tbl_shipping;
use App\tbl_payment;
use App\tbl_order;
use App\tbl_order_details;

class orderController extends Controller
{
    public function manage_order(){
        $data = tbl_order::with('customer')->orderBy('order_id','DESC')->get();
        return view('admin.manage_order',compact('data'));
    }

    public function view_order($id){
        $data = tbl_order::with('customer')->with('shipping')->where('order_id', $id)->get();
        $details = tbl_order_details::where('order_id', $id)->get();
        return view('admin.order_view',compact('data','details'));
    }
}
