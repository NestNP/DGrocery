<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHomepage()
    {
        return view('/admin/dashboard');
    }
    public function adminCalendar()
    {
        return view('/admin/calendar');
    }
    public function adminAddPost()
    {
        return view('/admin/addpost');
    }
    public function adminViewPost()
    {
        return view('/admin/viewpost');
    }
    public function adminProducts()
    {
        return view('/admin/products');
    }
    public function adminproductsdetail()
    {
        return view('/admin/productsdetail');
    }
    public function adminorders()
    {
        return view('/admin/orders');
    }
    public function adminviewcostumers()
    {
        return view('/admin/viewcostumers');
    }
    public function admincart()
    {
        return view('/admin/cart');
    }
    public function adminchat()
    {
        return view('/admin/chat');
    }
    public function admincheckout()
    {
        return view('/admin/checkout');
    }
    public function adminshops()
    {
        return view('/admin/shops');
    }
    public function adminaddproduct()
    {
        return view('/admin/addproduct');
    }
    public function adminaddusers()
    {
        return view('/admin/addusers');
    }
    public function adminviewusers()
    {
        return view('/admin/viewusers');
    }

    public function adminaddcostumers()
    {
        return view('/admin/addcostumers');
    }
    public function adminaddpage()
    {
        return view('/admin/addpage');
    }
    public function adminviewpage()
    {
        return view('/admin/viewpage');
    }
    public function admininbox()
    {
        return view('/admin/inbox');
    }
    public function adminemailread()
    {
        return view('/admin/emailread');
    }
    public function adminemailcompose()
    {
        return view('/admin/emailcompose');
    }
}
