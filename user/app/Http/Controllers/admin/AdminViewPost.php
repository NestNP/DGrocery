<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminViewPost extends Controller
{
    public function adminViewPost()
    {
        return view('/admin/viewpost');
    }
    public function adminAddPost()
    {
        return view('/admin/addpost');
    }
}
