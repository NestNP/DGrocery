<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductAction extends Controller
{
    
    public function admineditproduct()
    {
        return view('/admin/editproduct');
    }
}
