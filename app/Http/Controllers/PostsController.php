<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    //
    public function insert()
   {
    DB::insert('insert into posts(title,body) values(?,?)',['SoftWare Developer','Bahiru is softwaredeveloper']);
}
}
