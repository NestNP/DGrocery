<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminViewCostumers extends Controller
{
    public function adminviewcostumers()
    {
        return view('/admin/viewcostumers');
    }
    public function adminaddcostumers()
    {
        return view('/admin/addcostumers');
    }
}
