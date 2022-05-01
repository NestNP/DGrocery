<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
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
        $users = DB::select('select * from users');
        return view('/admin/viewusers',['users'=>$users]);
    }
}
