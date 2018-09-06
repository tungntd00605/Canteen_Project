<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientPageController extends Controller
{
    public function showHome(){
        $limit = 8;

        $categories = Category::all();
        $product = Product::all()->pagi;
        return view('client.homePage')
            ->with('categories',$categories)
            ->with('product',$product);
    }
}
