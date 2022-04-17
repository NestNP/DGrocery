<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHomepage()
    {
        return view('/admin/dashboard');
    }
    public function adminCalender()
    {
        return view('/admin/calender');
    }
    public function adminAddPost()
    {
        return view('/admin/addpost');
    }
    
    
}
