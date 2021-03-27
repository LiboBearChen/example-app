<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        print_r(route('products'));
        return view('products.index');
    }

    public function about(){
        return 'About Us Page';
    }

    public function show($id){
        $data=['one'=>'fref','two'=>'ewfwe'];
        return view('products.index',['products'=>$data[$id] ?? 'Product '.$id." does not exist."]);
    }
}
