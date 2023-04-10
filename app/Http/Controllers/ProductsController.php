<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        // $products = [
        //     ['name' => 'a', 'status'=>'R', 'price'=>'20.000'],
        //     ['name' => 'b', 'status'=>'SR', 'price'=>'20.000'],
        //     ['name' => 'c', 'status'=>'SSR', 'price'=>'20.000']
        // ];
        return view('/product', [
            'products'=>[
                ['name' => 'a', 'status'=>'R', 'price'=>'20.000'],
                ['name' => 'b', 'status'=>'SR', 'price'=>'20.000'],
                ['name' => 'c', 'status'=>'SSR', 'price'=>'20.000']
        ]]);
    }
}
