<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    //
    // public function about()
    // {
    //     // return "well come to store";
    //     //return "w
    //    $title="About us Online Store";
    //    $subtitle="About us Page";
    //    $description="this about page -----";
    //    $author="Developed By fname and lastname";
    //    return view('home.about')-> with('title',$title)
    //    ->with('subtitle',$subtitle)
    //    ->with('description',$description)
    //    ->with('author',$author);
    // }
    // public function index()
    // {
       
    //    $title="About us Online Store";
    //    $subtitle="Major Chatagories In Our Shope";
    //    $imageUrls=['https://placehold.co/350',
    //    'https://placehold.co/350',
    //    'https://placehold.co/350'];
    //          return view('home.index')->with('title',$title)
    //    ->with('subtitle',$subtitle)
    //    -> with('imageUrls',$imageUrls);
    // }
    // public function index()
    // {
       
    //    return view("home.index");
    // }
//     public function index()


//    {


//        $viewData = [];


//        $viewData["title"] = "Home Page - Online Store";


//        return view('home.index')->with("viewData", $viewData);
//    }
public function index()
{
$viewData = [];
$viewData["title"] = "Home Page - Online Store";
return view('home.index')->with("viewData", $viewData);
}


//    
public function about()
{
$data1 = "About us - Online Store";
$data2 = "About us";
$description = "This is an about page ...";
$author = "Developed by: Your Name";
return view('home.about')->with("title", $data1)
->with("subtitle", $data2)
->with("description", $description)
->with("author", $author);
}



}
