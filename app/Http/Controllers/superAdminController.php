<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class superAdminController extends Controller
{
    public function logout(){
        Session::flush();
        return redirect('admin');
    }
}
