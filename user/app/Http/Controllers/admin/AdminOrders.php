<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOrders extends Controller
{
    public function adminorders()
    {
        return view('/admin/orders');
    }
}
