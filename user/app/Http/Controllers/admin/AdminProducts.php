<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProducts extends Controller
{
    public function adminProducts()
    {
        $products = DB::select('select * from products');

        return view('/admin/products',['products'=>$products]);
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
