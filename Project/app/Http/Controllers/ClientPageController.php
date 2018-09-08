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
        $product = Product::where('status', '!=' , 0)->paginate($limit);
        $foods = Product::where('status', '!=' , 0)->where('categoryId', 1)->paginate(3);
        $drinks = Product::where('status', '!=' , 0)->where('categoryId', 2)->paginate(3);
        $others = Product::where('status', '!=' , 0)->where('categoryId', 3)->paginate(3);
        return view('client.homepage')
            ->with('categories',$categories)
            ->with('product',$product)
            ->with('foods', $foods)
            ->with('drinks', $drinks)
            ->with('others', $others);
    }

    public function productDetail($id){
        $obj = Product::find($id);
        if ($obj == null){
            return view('error.404');
        }
        return view('client.productDetail')->with('obj',$obj);
    }
    public function categoryList(){

    }
}
