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
        $mostBuy = Product::where('status', '=' , 1)
                ->join('order_details', 'products.id', '=' ,'order_details.product_id')
                ->groupBy('product_id')
                ->orderByRaw('SUM(quantity) DESC')->paginate($limit);
        return view('client.homepage')
            ->with([
                'categories'=> $categories,
                'product'=> $product,
                'foods'=> $foods,
                'drinks'=> $drinks,
                'others'=> $others,
                'mostBuy' => $mostBuy
            ]);
    }

    public function showProductDetail($id){
        $obj = Product::find($id);
        if ($obj == null){
            return view('error.404');
        }
        $related_product = Product::where('categoryId', $obj->categoryId)->inRandomOrder()->limit(5)->get();
        return view('client.productDetail')->with(['obj'=>$obj,'related_product'=>$related_product]);
    }

    public function showContact(){
        return view('client.contact');
    }

    public function showCategory(){
        $limit = 12;
        $orderOption = Input::get('order-by');
        $choosed_category = Input::get('categoryId');
        $list_product = null;
        
        if($choosed_category == null){
           switch ($orderOption){
                case "priceUp": 
                    $list_product = Product::where('status', '=' , 1)->orderBy('price', 'asc')->paginate($limit);    
                    break;
                case "priceDown": 
                    $list_product = Product::where('status', '=' , 1)->orderBy('price', 'desc')->paginate($limit);
                    break;
                case "mostBuy":
                    $list_product = Product::where('status', '=' , 1)
                    ->join('order_details', 'products.id', '=' ,'order_details.product_id')
                    ->groupBy('product_id')
                    ->orderByRaw('SUM(quantity) DESC')->paginate($limit);
                    break;
                default:
                    $list_product = Product::where('status', '=' , 1)->paginate($limit);
                    break;
           }
        }
        else if($choosed_category != null){
            switch ($orderOption){
                case "priceUp": 
                    $list_product = Product::where('status', '=' , 1)->where('categoryId', $choosed_category)->orderBy('price', 'asc')->paginate($limit);    
                    break;
                case "priceDown": 
                    $list_product = Product::where('status', '=' , 1)->where('categoryId', $choosed_category)->orderBy('price', 'desc')->paginate($limit);
                    break;
                case "mostBuy":
                    $list_product = Product::where('status', '=' , 1)
                    ->join('order_details', 'products.id', '=' ,'order_details.product_id')
                    ->where('categoryId', $choosed_category)
                    ->groupBy('product_id')
                    ->orderByRaw('SUM(quantity) DESC')->paginate($limit);
                    break;
                default:
                    $list_product = Product::where('status', '=' , 1)->where('categoryId', $choosed_category)->paginate($limit);
                    break;
           }
        }
        
        $list_category = Category::all();
        if($list_product == null){
            return view('error.404');
        }
        return view('client.categoryPage')
            ->with([
                'list_product' => $list_product,
                'list_category' => $list_category,
                'choosed_category' => $choosed_category,
                'order_option' => $orderOption
            ]);
    }
}
