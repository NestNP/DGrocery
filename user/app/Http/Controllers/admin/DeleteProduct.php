<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteProduct extends Controller
{
    public function admindeleteproduct($id)
    {
        DB::delete('delete from products where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/admin/products">Click Here</a> to go back.';
    }
}
