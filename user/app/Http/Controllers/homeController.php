<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
    return view('/layouts/home');
    }
    public function about()
    {
        return view('user.aboutus');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function checkout()
    {
        return view('user.checkout');
    }

    public function cartsummary()
    {
        return view('user.cartsummary');
    }

    public function category()
    {
        return view('user.category');
    }

    public function wishlist()
    {
        return view('user.wishlist');
    }
}
