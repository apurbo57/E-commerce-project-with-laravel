<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_slider extends Model
{
    protected $fillable = ['title','sub_title','image','url','start','end','status'];
}
