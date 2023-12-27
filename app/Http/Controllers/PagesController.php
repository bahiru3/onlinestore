<?php

namespace App\Http\Controllers;
use App\Models\PostImage;
use Illuminate\Support\Facades\View; 
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function contact()
    {
        // return "well come to store";
        //return "w
        return view('pages.Contact',['name'=>'Bahiru',
        'role'=>'fullstack developer',
        'company'=>'Defance',
        'quote'=>'push and ponder in the silces']);
    }
    public function display($view)
    {
                
        if(view::exists($view)){
            echo $view.":This view exists";
        }else{
            echo $view.":This view dose not exists";
        }
    }

    public function employees()
    {
        // return "well come to store";
        //return "w
        return view('pages.employees',
        ['employee1'=>['Bahiru','web developer','ABC Campany','ABC Campany'],
        'employee2'=>['Debebe','fullstack developer','ABC Campany','CDF Campany'],
        'employee3'=>['Tsgaye','Java developer','ABC Campany','ABC Campany'],
        ]);
    }
    public function employee_list()
    {
        // return "well come to store";
        //return "w
        return view('pages.employee-list',
        ['employee1'=>['Bahiru','web developer','ABC Campany','ABC Campany'],
        'employee2'=>['Debebe','fullstack developer','ABC Campany','CDF Campany'],
        'employee3'=>['Tsgaye','Java developer','ABC Campany','ABC Campany'],
        ]);
    }
    public function employee_about()
    {
        // return "well come to store";
        //return "w
        $name='Bahiru';
        $company='XYZ';
        $role='Web Developer';
        $quote='FullStack Developer';
        return view('pages.employee-about', compact('name','company','role','quote'));
    }
    public function contact1()
    {
        return view('pages.contact1',
        [
        'name'=>'Bahiru',
        'role'=>'fullstack developer',
        'company'=>'Defance',
        'quote'=>'push and ponder in the silces']);
    }
    public function contact2($display)
    {
        return view('pages.contact2',
        [
        'displaycontact'=>'$display',
        'name'=>'Bahiru',
        'role'=>'fullstack developer',
        'company'=>'Defance',
        'quote'=>'push and ponder in the silces']);
    }
    public function employee_list_for()
    {
        // return "well come to store";
        //return "w
        $employees=[
        ['Bahiru','web developer','ABC Campany','ABC Campany'],
        ['Debebe','fullstack developer','ABC Campany','CDF Campany'],
        ['Tsgaye','Java developer','ABC Campany','ABC Campany'],
        
    ];
        return view('pages.employee-list-for')->with('employees',$employees);
    }
   
}
