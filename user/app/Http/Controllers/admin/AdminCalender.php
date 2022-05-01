<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCalender extends Controller
{
    public function adminCalendar()
    {
        return view('/admin/calendar');
    }
}
