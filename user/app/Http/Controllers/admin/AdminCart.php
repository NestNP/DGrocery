<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCart extends Controller
{
    public function admincart()
    {
        return view('/admin/cart');
    }
}
