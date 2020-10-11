<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_category extends Model
{
    protected $fillable = ['category_name','category_description','status'];

    public function sub_category(){
        return $this->hasMany(tbl_subCategory::class); 
    }

    public function product(){
        return $this->hasMany(tbl_product::class); 
    }
}
