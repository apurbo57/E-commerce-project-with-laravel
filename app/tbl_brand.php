<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_brand extends Model
{
    protected $fillable = ['brand_name','brand_description','status'];

    public function product(){
        return $this->hasMany(tbl_product::class); 
    }
}
