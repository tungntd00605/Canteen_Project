@extends('layout.master', [
    'page_title'=>'Danh sách sản phẩm | FPTcanteen Admin Page',
    'current_page'=>'product_page',
])
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Product table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                @if (Session::has('message'))
                    <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
                @endif
                <span class="table-add float-right mb-3 mr-2"><a href="/admin/product/create" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                @if(count($list_obj) > 0)
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Thumbnail</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Option</th>
                    </tr>
                    @foreach ($list_obj as $item)
                    <tr>
                        <td class="pt-3-half">{{$item->id}}</td>
                        <td class="pt-3-half">{{$item->name}}</td>
                        <td class="pt-3-half">{{$item->price}}</td>
                        <td class="pt-3-half"><img src="{{$item->thumbnail}}" alt="" height="90px" width="150px"></td>
                        <td class="pt-3-half">{{$item->discount}}</td>
                        <td class="pt-3-half">{{$item->description}}</td>
                        <td class="pt-3-half">{{$item->statusLabel}}</td>
                        <td>
                            <a href="/admin/product/{{$item->id}}/edit" class="table-edit"><button type="button"
                                 class="btn-floating btn-sm btn-info btn-edit"><i class="far fa-edit"></i></button></a>
                            <span class="table-remove"><button type="button"
                               class="btn-floating btn-sm btn-danger btn-delete"><i class="far fa-trash-alt"></i></button></span>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="float-right">
                    {{ $list_obj->links() }}
                </div>
                @else
                    <div class="text-center">Hiện không có danh mục nào để hiển thị</div>
                @endif
            </div>
        </div>
    </div>
    <!-- Editable table -->
@endsection