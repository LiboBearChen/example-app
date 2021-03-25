<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title="fwefwefwe";
        $description="ucn8743tz782nzcr247nor13zn2zcr829mzcr892zr9zr9nr2389n";
        //return view('products.index',compact('title','description'));
        $data=['one'=>'fref','two'=>'ewfwe'];
        return view('products.index')->with('data',$data);
    }

    public function about(){
        return 'About Us Page';
    }

    public function show($id){
        $data=['one'=>'fref','two'=>'ewfwe'];
        return view('products.index',['products'=>$data[$id] ?? 'Product '.$id." does not exist."]);
    }
}
