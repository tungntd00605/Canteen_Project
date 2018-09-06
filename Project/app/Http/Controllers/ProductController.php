<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $limit = 10;
        $list_obj = Product::where('status', '!=' , 0)->paginate($limit);
        return view('admin.product.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all()->where('status', 1);
        return view('admin.product.create') -> with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $obj = new Product();
        $obj->name = Input::get('name');
        $obj->categoryId = Input::get('categoryId');
        $obj->price = Input::get('price');
        $obj->discount = Input::get('discount');
        if(Input::hasFile('thumbnail')) {
            $image_id = time();
            Cloudder::upload(Input::file('thumbnail')->getRealPath(), $image_id);
            $obj->thumbnail = Cloudder::secureShow($image_id);
        }
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $obj = Product::find($id);
        if ($obj == null){
            return view('error.404');
        }
        return view('admin.product.show')->with('obj',$obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obj = Product::find($id);
        if ($obj == null){
            return view('error.404');
        }
        return view('admin.product.edit')->with('obj',$obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $obj = Product::find($id);
        $obj->name = Input::get('name');
        $obj->price = Input::get('price');
        $obj->discount = Input::get('discount');
        $obj->thumbnail = Input::get('thumbnail');
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obj = Category::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Sản phẩm không tồn tại hoặc đã bị xoá!',
                'message-class' => 'alert alert-danger'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Đã xoá thông tin Sản phẩm',
            'message-class' => 'alert alert-success'], 200);
    }
}
