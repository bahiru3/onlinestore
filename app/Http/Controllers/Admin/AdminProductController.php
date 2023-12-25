<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    //
    // public function index()
    // {
    // $viewData = [];
    // $viewData["title"] = "Admin Page - Admin Online Store";
    // $viewData["products"] = Product::all();
    // return view('admin.product.index')->with("viewData", $viewData);
    // }
    public function create()
    {
    $viewData = [];
    $viewData["title"] = "Admin Page - Admin Online Store";
    $viewData["products"] = Product::all();
    return view('admin.product.index')->with("viewData", $viewData);
    }
    public function store(request $request)
    {
        request()->validate([
            "tittle"=>"required|max:255",
            "description"=>"required",
            "price"=>"required|numeric|gt:0",
            'image'=>'image',

        ]);
        $newProduct= new Product();
        $newProduct->name=$request->input('name');
        $newProduct->description=$request->input('description');
        $newProduct->price=$request->input('price');
        $newProduct->image='game.png';
$newProduct->save();
    return redirect()->route('admin.product.index');
    }
}
