<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminEmail extends Controller
{
     public function adminInbox()
    {
        return view('/admin/inbox');
    }
    public function adminEmailcompose()
    {
        return view('/admin/emailcompose');
    }

}
