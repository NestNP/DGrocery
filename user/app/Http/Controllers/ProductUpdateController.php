<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductUpdateController extends Controller
{
    public function index() {
        $users = DB::select('select * from products');
        return view('product_edit_view',['users'=>$users]);
     }
     public function show($id) {
        $users = DB::select('select * from products where id = ?',[$id]);
        return view('product_update',['users'=>$users]);
     }
     public function edit(Request $request,$id) {
        $Product_name = $request->input('Product_name');
        $Manufacturer_name = $request->input('Manufacturer_name');
        $Manufacturer_Brand = $request->input('Manufacturer_Brand');
        $Price = $request->input('Price');
        $Category = $request->input('Category');
        $Features = $request->input('Features');
        $Product_description = $request->input('Product_description');
        $Product_details = $request->input('Product_details');
        $Product_image = $request->input('Product_image');
        $Featured_image = $request->input('Featured_image');
        $quantity = $request->input('quantity');
        DB::update('update products set *=? where id = ?',[ $Product_name,$Manufacturer_name,$Manufacturer_Brand,$Price,$Category,$Features,Product_description,$Product_details,$Product_image,$Featured_image,$quantity]);
        // echo "Record updated successfully.<br/>";
        // echo '<a href = "/edit-records">Click Here</a> to go back.';
     }
}
