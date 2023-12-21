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
Route::get('/pages/employee-list-for','\App\Http\Controllers\PagesController@employee_list_for');
Route::get('/pages/contact2/{display}','\App\Http\Controllers\PagesController@contact2');
Route::get('/pages/contact1','\App\Http\Controllers\PagesController@contact1');
Route::get('/','\App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('about','\App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/pages/employee-about','\App\Http\Controllers\PagesController@employee_about');
Route::get('/pages/employee_list','\App\Http\Controllers\PagesController@employee_list');
Route::get('/pages/employees','\App\Http\Controllers\PagesController@employees');
Route::get('/pages/display/{view}','\App\Http\Controllers\PagesController@display');
// Route::resource('/post','App\Http\Controllers\PostController',
// Route::resource('/Test','\App\Http\Controllers\TestController',['only'=>['index']]);
//only show rout create and show
// Route::resource('/post','App\Http\Controllers\PostController',
// [
// 'only'=>['create','show']
// ]);
// Route::resource('/Student','App\Http\Controllers\PostController',
// [
// 'name'=>['create'=>'Student.bulid']
// ]);
//only show rout create and show

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });



?>
