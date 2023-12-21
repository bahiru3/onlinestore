<?php

namespace App\Http\Controllers;
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
}
