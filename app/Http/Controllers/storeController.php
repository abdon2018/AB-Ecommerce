<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class storeController extends Controller
{
    public function index(){
      $products = Product::all();
      $vac = compact('products');
      return view('index', $vac);
    }
}
