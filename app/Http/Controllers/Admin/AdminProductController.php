<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
class AdminProductController extends Controller
{
    //
    public function index()
    {
    $viewData = [];
    $viewData["title"] = "Admin Page - Admin Online Store";
    $viewData["products"] = Product::all();
    return view('admin.product.index')->with("viewData", $viewData);
    }
    public function create()
    {
    $viewData = [];
    $viewData["title"] = "Admin Page - Admin Online Store";
    // $viewData["products"] = Product::all();
    return view('admin.product.create')->with("viewData", $viewData);
    }
    public function store(request $request)
    {
        request()->validate([
            "name"=>"required|max:255",
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
        
if($request->hasFile('image')){

    
$imageName=$newProduct->id.'.'.$request->file('image')->extension();
Storage::disk('public')->put($imageName,
file_get_contents($request->file('image')->getRealPath()));
$newProduct->image=$imageName;
$newProduct->save();

}


    return redirect()->route('admin.product.index');
    }
    public function delete($id)
    {
    $viewData = [];
    Product::destroy($id);
    return back();
    }
}
