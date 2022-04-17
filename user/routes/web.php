<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
Route::get('/admin','AdminController@adminHomepage' )->name('admin');
Route::get('/admin/calender','AdminController@adminCalender' )->name('calender');
Route::get('/admin/addpost','AdminController@adminAddPost' )->name('addpost');


Route::get('/aboutus','HomeController@about' )->name('about');
Route::get('/contact','HomeController@contact' )->name('contact');
Route::get('/checkout','HomeController@checkout' )->name('checkout');
Route::get('/category','HomeController@category')->name('category');
Route::get('/cart','HomeController@cartsummary')->name('cartsummary');
Route::get('/wishlist','HomeController@wishlist')->name('wishlist');

Route::get('/admin/viewpost','AdminController@adminViewPost' )->name('viewpost');
Route::get('/admin/products','AdminController@adminProducts' )->name('products');
Route::get('/admin/productsdetail','AdminController@adminProductsdetail' )->name('productsdetail');
Route::get('/admin/orders','AdminController@adminorders' )->name('orders');
Route::get('/admin/viewcostumers','AdminController@adminviewcostumers' )->name('viewcostumers');
Route::get('/admin/chat','AdminController@adminchat' )->name('chat');
Route::get('/admin/checkout','AdminController@admincheckout' )->name('checkout');
Route::get('/admin/shops','AdminController@adminshops' )->name('shops');
Route::get('/admin/addproduct','AdminController@adminaddproduct' )->name('addproduct');
Route::get('/admin/addusers','AdminController@adminaddusers' )->name('addusers');
Route::get('/admin/viewusers','AdminController@adminviewusers' )->name('viewusers');
Route::get('/admin/addcostumers','AdminController@adminaddcostumers' )->name('addcostumers');
Route::get('/admin/addpage','AdminController@adminaddpage' )->name('addpage');
Route::get('/admin/viewpage','AdminController@adminviewpage' )->name('viewpage');
Route::get('/admin/inbox','AdminController@admininbox' )->name('inbox');
Route::get('/admin/emailread','AdminController@adminemailread' )->name('emailread');
Route::get('/admin/emailcompose','AdminController@adminemailcompose' )->name('emailcompose');

