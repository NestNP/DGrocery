<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admindashboard extends Controller
{
    public function adminHomepage()
    {
        return view('/admin/dashboard');
    }
}
