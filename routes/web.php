<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home','\App\Http\Controllers\HomeController@index');
Route::get('/pages/employee-list-for','\App\Http\Controllers\PagesController@employee_list_for');
Route::get('/pages/contact2/{display}','\App\Http\Controllers\PagesController@contact2');
Route::get('/pages/contact1','\App\Http\Controllers\PagesController@contact1');
Route::get('/index','\App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('about','\App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/pages/employee-about','\App\Http\Controllers\PagesController@employee_about');
Route::get('/pages/employee_list','\App\Http\Controllers\PagesController@employee_list');
Route::get('/pages/employees','\App\Http\Controllers\PagesController@employees');
Route::get('/pages/display/{view}','\App\Http\Controllers\PagesController@display');
Route::get('/products','\App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('products/{id}','\App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/posts/insert','\App\Http\Controllers\PostsController@insert');
Route::get('/posts/select','\App\Http\Controllers\PostsController@select');
Route::get('/posts/update','\App\Http\Controllers\PostsController@update');
Route::get('/posts/find/{id}','\App\Http\Controllers\PostsController@find');
Route::get('/posts/match/{title}','\App\Http\Controllers\PostsController@match');
Route::get('/posts/matchShowTitle/{title}','\App\Http\Controllers\PostsController@matchShowTitle');
// Route::get('/admin','\App\Http\Controllers\AdminHomeController@matchShowTitle');
Route::get('/admin','\App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/products','\App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
Route::get('/admin/products/store','\App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
Route::get('/admin/products/create','\App\Http\Controllers\Admin\AdminProductController@create')->name("admin.product.create");
// Route::any('/save', [App\Http\Controllers\HomeController::class, 'save'])->name("admin.product.save");



?>
