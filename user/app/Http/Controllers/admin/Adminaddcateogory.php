<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Adminaddcateogory extends Controller
{
    public function adminaddcateogory()
    {
        return view('/admin/addcateogory');
    }
}
