<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\category_product;

class Controller extends BaseController
{
    public function index(){
        return view('index');
        // echo "kenek"
    }
    public function tes(){
        // return view('index');
        echo "tes";
    }
    public function admin(){
        // $data = category_product::all();
        // return view('admin')->with('data', $data);
        return response()->json(category_product::all());
    }
}