<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
// admin routes
use App\Http\Controllers\admin\Admindashboard;
use App\Http\Controllers\admin\AdminCalendar;
use App\Http\Controllers\admin\AdminAddPost;
use App\Http\Controllers\admin\AdminViewPost;
use App\Http\Controllers\admin\AdminProducts;
use App\Http\Controllers\admin\DeleteProduct;
use App\Http\Controllers\admin\AdminProductsDetail;
use App\Http\Controllers\admin\AdminOrders;
use App\Http\Controllers\admin\AdminViewCostumers;
use App\Http\Controllers\admin\AdminCart;
use App\Http\Controllers\admin\AdminChat;
use App\Http\Controllers\admin\AdminCheckout;
use App\Http\Controllers\admin\AdminShops;
use App\Http\Controllers\admin\AdminAddProduct;
use App\Http\Controllers\admin\AdminAddUsers;
use App\Http\Controllers\admin\AdminEmail;
use App\Http\Controllers\admin\AdminProductAction;

use App\Http\Controllers\CalenderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','HomeController@home' )->name('home');
Route::get('/aboutus','HomeController@about' )->name('about');
Route::get('/contact','HomeController@contact' )->name('contact');
Route::get('/checkout','HomeController@checkout' )->name('checkout');
Route::get('/category','HomeController@category')->name('category');
Route::get('/cart','HomeController@cartsummary')->name('cartsummary');
Route::get('/wishlist','HomeController@wishlist')->name('wishlist');

// admin page routes 

Route::get('/admin','admin\Admindashboard@adminHomepage' )->name('admin');
Route::get('/admin/calendar','admin\AdminCalender@adminCalendar' )->name('calendar');
Route::get('/admin/addpost','admin\AdminViewPost@adminAddPost' )->name('addpost');
Route::get('/admin/viewpost','admin\AdminViewPost@adminViewPost' )->name('viewpost');
Route::get('/admin/productsdetail','admin\AdminProducts@adminProductsdetail' )->name('productsdetail');
Route::get('/admin/orders','admin\AdminOrders@adminorders' )->name('Adminorders');
Route::get('/admin/chat','admin\AdminChat@adminchat' )->name('chat');
Route::get('/admin/products','admin\AdminProducts@adminProducts' )->name('products');
Route::get('/admin/productsdelete/{id}','admin\DeleteProduct@admindeleteproduct' )->name('deleteproduct');

Route::get('/admin/addproduct','admin\AdminProducts@adminaddproduct' )->name('addproduct');
Route::get('/admin/addusers','admin\AdminUsers@adminaddusers' )->name('addusers');
Route::get('/admin/viewusers','admin\AdminUsers@adminviewusers' )->name('viewusers');

Route::get('/admin/viewcostumers','admin\AdminViewCostumers@adminviewcostumers' )->name('viewcostumers');
Route::get('/admin/addcostumers','admin\AdminViewCostumers@adminaddcostumers' )->name('addcostumers');
Route::get('/admin/addpage','admin\AdminPage@adminaddpage' )->name('addpage');
Route::get('/admin/viewpage','admin\AdminPage@adminviewpage' )->name('viewpage');
Route::get('/admin/inbox','admin\AdminEmail@adminInbox' )->name('inbox');
Route::get('/admin/emailcompose','admin\AdminEmail@adminEmailcompose' )->name('emailcompose');
Route::get('/admin/cart','admin\AdminCart@admincart' )->name('adminCart');
Route::get('/admin/editproduct','admin\AdminProductAction@admineditproduct' )->name('admineditproduct');
Route::get('/admin/addcateogory','admin\Adminaddcateogory@adminaddcateogory' )->name('addcateogory');
Route::get('insert','admin\Adminaddcateogory@insertform');
Route::post('create','admin\Adminaddcateogory@insert');    

// purano routes

// sakeko routes
// Route::get('/admin','AdminController@adminHomepage' )->name('admin');
// Route::get('/admin/calendar','AdminController@adminCalendar' )->name('calendar');
// Route::get('/admin/addpost','AdminController@adminAddPost' )->name('addpost');
// Route::get('/admin/viewpost','AdminController@adminViewPost' )->name('viewpost');
// Route::get('/admin/products','AdminController@adminProducts' )->name('products');
// Route::get('/admin/productsdetail','AdminController@adminProductsdetail' )->name('productsdetail');
// Route::get('/admin/orders','AdminController@adminorders' )->name('orders');
// Route::get('/admin/viewcostumers','AdminController@adminviewcostumers' )->name('viewcostumers');
// Route::get('/admin/chat','AdminController@adminchat' )->name('chat');
// Route::get('/admin/addproduct','AdminController@adminaddproduct' )->name('addproduct');
// Route::get('/admin/addusers','AdminController@adminaddusers' )->name('addusers');
// Route::get('/admin/addpage','AdminController@adminaddpage' )->name('addpage');
// Route::get('/admin/viewpage','AdminController@adminviewpage' )->name('viewpage');
// Route::get('/admin/inbox','AdminController@admininbox' )->name('inbox');

// Route::get('/admin/emailcompose','AdminController@adminemailcompose' )->name('emailcompose');
// Route::get('/admin/cart','AdminController@admincart' )->name('cart');