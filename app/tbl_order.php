<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_order extends Model
{
    public function customer(){
        return $this->belongsTo(tbl_customer::class,'customer_id', 'customer_id');
    }

    public function shipping(){
        return $this->belongsTo(tbl_shipping::class,'shipping_id', 'shipping_id');
    }

    public function order_details(){
        return $this->belongsTo(tbl_order_details::class,'order_id', 'order_id');
    }
}
