<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUsers extends Controller
{
    public function adminaddusers()
    {
        return view('/admin/addusers');
    }
    public function adminviewusers()
    {
        return view('/admin/viewusers');
    }
}
