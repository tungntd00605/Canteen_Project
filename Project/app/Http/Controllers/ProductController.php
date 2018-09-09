<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreProductRequest;
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
        $list_obj = null;
        $list_category = Category::all();
        $choosedCategory = Input::get('categoryId');
        if($choosedCategory == null || $choosedCategory == 0){
            $list_obj = Product::where('status', '!=' , 0)->paginate($limit);
        }
        else {
            $list_obj = Product::where('status', '!=' , 0)->where('categoryId', $choosedCategory)->paginate($limit);
        }
        return view('admin.product.list')
            ->with('list_obj', $list_obj)
            ->with('list_category', $list_category)
            ->with('choosedCategory', $choosedCategory);
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
    public function store(StoreProductRequest $request)
    {
        //
        $request->validated();

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
        $categories = Category::all()->where('status', 1);
        if ($obj == null){
            return view('error.404');
        }
        return view('admin.product.edit')->with('obj',$obj)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, $id)
    {
        //
        $request->validated();

        $obj = Product::find($id);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obj = Product::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Sản phẩm không tồn tại hoặc đã bị xoá!',
                'message-class' => 'alert alert-danger'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Đã xoá thông tin Sản phẩm',
            'message-class' => 'alert alert-success'], 200);
    }

    public function destroyMany(){
        Product::destroy(Input::get('ids'));
        return "Ok";
    }
}
