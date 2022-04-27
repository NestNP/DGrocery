<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPage extends Controller
{
    public function adminaddpage()
    {
        return view('/admin/addpage');
    }
    public function adminviewpage()
    {
        return view('/admin/viewpage');
    }
}
