<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use JD\Cloudder\Facades\Cloudder;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $limit = 5;
        if(Input::get('limit') != null || Input::get('limit') != 0){
            $limit = Input::get('limit');
        }
        $list_obj = Category::where('status', 1)->paginate($limit);
        return view('admin.category.list')->with('list_obj', $list_obj)->with('limit', $limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
        $request->validated();

        $obj = new Category();
        $obj->name = Input::get('name');
        if(Input::hasFile('thumbnail')) {
            $image_id = time();
            Cloudder::upload(Input::file('thumbnail')->getRealPath(), $image_id);
            $obj->thumbnail = Cloudder::secureShow($image_id);
        }
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('admin/category');
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
        $limit = 5;
        if(Input::get('limit') != null || Input::get('limit') != 0){
            $limit = Input::get('limit');
        }
        $list_category = Category::all();
        $choosedCategory = $id;
        $list_obj = Product::where('status', '!=' , 0)->where('categoryId', $choosedCategory)->paginate($limit);
        if ($list_obj == null){
            return view('error.404');
        }
        return view('admin.product.list')
            ->with('limit', $limit)
            ->with('list_obj', $list_obj)
            ->with('list_category', $list_category)
            ->with('choosedCategory', $choosedCategory);
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
        $obj = Category::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('error.404');
        }
        return view('admin.category.edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        //
        $request->validated();

        $obj = Category::find($id);
        if ($obj == null){
            return view('error.404');
        }
        $obj->name = Input::get('name');
        if(Input::hasFile('thumbnail')) {
            $image_id = time();
            Cloudder::upload(Input::file('thumbnail')->getRealPath(), $image_id);
            $obj->thumbnail = Cloudder::secureShow($image_id);
        }
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('admin/category');
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
            return response()->json(['message' => 'Danh mục không tồn tại hoặc đã bị xoá!',
                                    'message-class' => 'alert alert-danger'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Đã xoá thông tin danh mục',
                                'message-class' => 'alert alert-success'], 200);
    }
}
