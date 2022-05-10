<?php

namespace App\Http\Controllers\admin;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Adminaddcateogory extends Controller
{
    public function adminaddcateogory()
    {
        return view('/admin/addcateogory');
    }
    public function insert(Request $request){
        $Category_name = $request->input('Category_name');
        $Slug = $request->input('Slug');
        $data=array('Category_name'=>$Category_name,"Slug"=>$Slug);
        DB::table('category')->insert($data);
            // echo "Record inserted successfully.<br/>";
            // echo '<a href = "/insert">Click Here</a> to go back.';
        }
}
?>