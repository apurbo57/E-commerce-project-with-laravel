<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_product;
use Cart;
use Session;


class cartController extends Controller
{
    public function add_to_cart(Request $request){
        $qty =  $request->qty;
        $product_id = $request->product_id;
        
        $products = tbl_product::find($product_id);

        $add = Cart::add([
            'id' => $products->id, 
            'name' => $products->product_name, 
            'quantity' => $qty, 
            'price' => $products->price,
            'attributes' => array(
              'size' => $products->product_size,
              'color' => $products->product_color,
              'image' => $products->image
            )
          ]);

        if($add){
        return redirect('show-cart');
        }
    }

    public function show_cart(){
        $data = Cart::getContent();
        return view('fontend.add_to_cart',compact('data'));
    }

    public function cart_delete($id){
        Cart::remove($id);

        Session::flash('success','Cart Delete Successfull !');
        return back();
    }

    public function update_cart(Request $request){
        $id = $request->id;
        $qty = $request->qty;
        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $qty
            ), 
          ));
        Session::flash('success','Cart Update Successfull !');
        return back();
    }


}