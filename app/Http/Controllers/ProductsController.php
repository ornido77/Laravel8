<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Here is your products.";
        $credits = "Created by: Sonny Ornido";
        
        $data = [
            'prodOne' => 'iPhone',
            'prodTwo' => 'Samsung'
        ];

        //Compact Method
        // return view('products.index',
        // compact('title', 'credits'));

        //With Method
        //return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        // Directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }
}
