<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_subCategory extends Model
{
    protected $fillable = ['category_id','subCategory_name','subCategory_description','status'];

    public function category(){
        return $this->belongsTo(tbl_category::class,'tbl_category_id');
    }
}
