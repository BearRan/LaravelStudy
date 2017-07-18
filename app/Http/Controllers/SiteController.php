<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

//    public function about()
//    {
//        $name = '<span style="color:orange">Bear</span>';
//        return view('sites.about')->with('name',$name);
//    }

//    public function about()
//    {
//        return view('sites.about')->with([
//            'first'=> 'Jelly',
//            'last'=> 'Bool',
//        ]);
//    }

//    public function about()
//    {
//    $data = [];
//    $data['first']='Bool';
//    $data['last']='Jelly';
//        return view('sites.about',$data);
//    }

    public function about()
    {
    $first='Bool Again';
    $last='Jelly Again';
        return view('sites.about',compact('first','last'));
    }
}
