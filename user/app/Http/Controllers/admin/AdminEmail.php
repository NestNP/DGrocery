<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminEmail extends Controller
{
     public function admininbox()
    {
        return view('/admin/inbox');
    }
    public function adminemailcompose()
    {
        return view('/admin/emailcompose');
    }

}
