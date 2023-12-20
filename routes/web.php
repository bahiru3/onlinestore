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
// Route::resource('/post','App\Http\Controllers\PostController');
//only show rout create and show
Route::resource('/post','App\Http\Controllers\PostController',
[
'only'=>['create','show']
]);
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
