<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientPageController extends Controller
{
    public function showHome(){
        $limit = 6;

        $categories = Category::all();
        $product = Product::where('status', '!=' , 0)->paginate($limit);
        $foods = Product::where('status', '!=' , 0)->where('categoryId', 1)->paginate(3);
        $drinks = Product::where('status', '!=' , 0)->where('categoryId', 2)->paginate(3);
        $others = Product::where('status', '!=' , 0)->where('categoryId', 3)->paginate(3);
        return view('client.homepage')
            ->with([
                'categories'=> $categories,
                'product'=> $product,
                'foods'=> $foods,
                'drinks'=> $drinks,
                'others'=> $others
            ]);
    }
}
