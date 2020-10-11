<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_order_details extends Model
{
    public function order(){
        return $this->hasMany(tbl_order::class);
    }
}
