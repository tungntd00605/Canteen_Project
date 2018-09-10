<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

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

    public function showProductDetail($id){
        $obj = Product::find($id);
        if ($obj == null){
            return view('error.404');
        }
        return view('client.productDetail')->with('obj',$obj);
    }

    public function showCategory(){
        $limit = 12;
        $choosed_category = Input::get('categoryId');
        if($choosed_category == null || $choosed_category == 0){
            $list_product = Product::where('status', '=' , 1)->paginate($limit);
        }
        else {
            $list_product = Product::where('status', '=' , 1)->where('categoryId', $choosed_category)->paginate($limit);
        }
        $list_category = Category::all();

        return view('client.categoryPage')
            ->with([
                'list_product' => $list_product,
                'list_category' => $list_category,
                'choosed_category' => $choosed_category
            ]);
    }
}
