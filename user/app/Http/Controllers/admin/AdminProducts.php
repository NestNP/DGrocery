<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProducts extends Controller
{
    public function adminProducts()
    {
        $products = DB::select('select * from products');

        return view('/admin/products',['products'=>$products]);
    }
    public function adminproductsdetail()
    {
        return view('/admin/productsdetail');
    }
    public function adminaddproduct()
    {
        return view('/admin/addproduct');
    }
    public function insertproduct(Request $request){
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
        $data=array('Product_name'=>$Product_name,"Manufacturer_name"=>$Manufacturer_name,"Manufacturer_Brand"=>$Manufacturer_Brand,"Price"=>$Price,"Category"=>$Category,"Features"=>$Features,"Product_description"=>$Product_description ,"Product_details"=>$Product_details,"Product_image"=>$Product_image ,"Featured_image"=>$Featured_image,"quantity"=>$quantity);
        DB::table('products')->insert($data);  
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';  
        }
   

}
