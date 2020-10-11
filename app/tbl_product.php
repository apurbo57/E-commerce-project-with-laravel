<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_product extends Model
{
    public function category(){
        return $this->belongsTo(tbl_category::class,'cat_id');
    }

    public function brand(){
        return $this->belongsTo(tbl_brand::class,'brand_id');
    }
}
