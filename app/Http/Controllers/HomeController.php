<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    //
    public function about()
    {
        // return "well come to store";
        //return "w
       $title="About us Online Store";
       $subtitle="About us Page";
       $description="this about page -----";
       $autor="Developed By fname and lastname";
       return view('home.about')-> with('title','$title')
       ->with('subtitle','$subtitle')
       ->with('description','$description')
       ->with('autor','$autor');
    }
    
}
