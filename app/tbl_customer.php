<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer extends Model
{
    public function order(){
        return $this->hasMany(tbl_order::class);
    }
}
