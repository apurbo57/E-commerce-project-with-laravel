<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_customer;
use App\tbl_shipping;
use App\tbl_payment;
use App\tbl_order;
use App\tbl_order_details;
use Cart;
use Session;
use DB;

class cheakoutController extends Controller
{
    public function login_cheak(){
        return view('fontend.login');
    }

    public function customer_registration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tbl_customers,email',
            'number' => 'required|min:11|max:15',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $customers = new tbl_customer() ;
        $customers->name = $request->name;
        $customers->email = $request->email;
        $customers->number = $request->number;
        $customers->password = md5($request->confirm_password);
        $customers->save();

        $customer_id = $customers->id;
        
        Session::flash('success','Customer Registration Successfull !');
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->name);

        return redirect('/cheakout');
    }

    public function customer_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $customer_email = $request->email;
        $customer_password = md5($request->password);
        $result = DB::table('tbl_customers')
                    ->where('email', $customer_email)
                    ->where('password', $customer_password)
                    ->first();
        
                if ($result) {
                    Session::put('customer_id', $result->customer_id);
                    Session::put('customer_name', $result->name);
                    Session::flash('success','Customer login Successfull !');
                    return redirect('/cheakout');
                }else{
                    Session::flash('danger','Email Or Password Not Exist !');
                    return back();
                }
    }

    public function cheak_logout(){
        Session::flush();
        return redirect('/');
    }

    public function cheakout(){
        return view('fontend.cheakout');
    }

    public function save_shipping_details(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'number' => 'required|min:11|max:15',
            'address' => 'required',
            'city' => 'required',
        ]);
        
        $shipping = new tbl_shipping() ;
        $shipping->first_name = $request->first_name;
        $shipping->last_name = $request->last_name;
        $shipping->email = $request->email;
        $shipping->phone = $request->number;
        $shipping->address = $request->address;
        $shipping->city = $request->city;
        $shipping->save();

        $shipping_id = $shipping->id;
        
        Session::put('shipping_id',$shipping_id);

        return redirect('/payment');
    }

    public function payment(){
        return view('fontend.payment');
    }

    public function order_place(Request $request){
        $getway = $request->payment_getway;

        $payment = new tbl_payment() ;
        $payment->payment_method = $getway;
        $payment->payment_status = 0;
        $payment->save();
        $payment_id = $payment->id;

        $order = new tbl_order() ;
        $order->customer_id = Session::get('customer_id') ;
        $order->shipping_id = Session::get('shipping_id') ;
        $order->payment_id = $payment_id ;
        $order->order_total = Cart::getTotal() ;
        $order->order_status = 0 ;
        $order->save();
        $order_id = $order->id;

        $data = Cart::getContent();
        
        foreach ($data as $row) {
            $datas = new tbl_order_details() ;
            $datas->order_id = $order_id;
            $datas->product_id = $row->id;
            $datas->product_name = $row->name;
            $datas->product_price = $row->price;
            $datas->product_quantity = $row->quantity;
            $datas->save();
        }

        if ($getway = 'hand_cash') {
            Cart::clear();
            return view('fontend.handcash');
        }elseif ($getway = 'bank') {
            echo 'You Can Successfully Buying This Product Bank Transfer Successfully!';
        }elseif ($getway = 'bkash') {
            echo 'You Can Successfully Buying This Product Bkash Successfully!';
        }elseif ($getway = 'd_card') {
            echo 'You Can Successfully Buying This Product Debit Card Successfully!';
        }else{
            echo 'you dont selected any method';
        }

    }
}
