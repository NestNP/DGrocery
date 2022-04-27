<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminChat extends Controller
{
    public function adminchat()
    {
        return view('/admin/chat');
    }
}
