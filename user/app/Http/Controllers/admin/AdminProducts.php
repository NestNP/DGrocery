<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProducts extends Controller
{
    public function adminProducts()
    {
        return view('/admin/products');
    }
    public function adminproductsdetail()
    {
        return view('/admin/productsdetail');
    }
    public function adminaddproduct()
    {
        return view('/admin/addproduct');
    }
}
