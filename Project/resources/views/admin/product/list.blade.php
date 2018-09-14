@extends('layout.master', [
    'page_title'=>'Danh sách sản phẩm | FPTcanteen Admin Page',
    'current_page'=>'product_page',
])
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Product table</h3>
        <div class="card-body">
            <div id="table" class="table-editable table-responsive" style="position: relative">
                @if (Session::has('message'))
                    <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
                @endif
                <div class="row  mb-0 " >
                    <div class="col-md-1" >
                        <div>
                            <select class="mdb-select colorful-select dropdown-primary pl-2" name="limit">
                                <option value="0" disabled>Rows number</option>
                                <option value="5" {{$limit == 5? 'selected':''}}>5 rows</option>
                                <option value="25" {{$limit == 25? 'selected':''}}>25 rows</option>
                                <option value="50" {{$limit == 50? 'selected':''}}>50 rows</option>
                                <option value="100" {{$limit == 100? 'selected':''}}>100 rows</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <select class="mdb-select colorful-select dropdown-primary" name="categoryId">
                            <option value="" choosed>Tất cả</option>
                            @foreach ($list_category as $item)
                                <option value="{{$item->id}}" {{$item->id==$choosedCategory?'selected':''}}>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <span class="table-add float-right mt-3 mr-2" title="Thêm mới sản phấm">
                            <a href="/admin/product/create" class="text-success">
                                <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div>
                </div>

                @if(count($list_obj) > 0)
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <tr>
                            <th class="text-center"></th>
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
                            <tr id="row-{{$item->id}}">
                                <td class="pt-3-half">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check-item"
                                               id="check-{{$item->id}}">
                                        <label class="custom-control-label" for="check-{{$item->id}}"></label>
                                    </div>
                                </td>
                                <td class="pt-3-half id-col">{{$item->id}}</td>
                                <td class="pt-3-half">{{$item->name}}</td>
                                <td class="pt-3-half">{{$item->price}}</td>
                                <td class="pt-3-half"><img src="{{$item->thumbnail}}" alt="" height="90px"
                                                           width="150px"></td>
                                <td class="pt-3-half">{{$item->discount}}</td>
                                <td class="pt-3-half">{{$item->description}}</td>
                                <td class="pt-3-half">{{$item->statusLabel}}</td>
                                <td>
                                    <a title="Sửa thông tin sản phẩm" href="/admin/product/{{$item->id}}/edit" class="table-edit">
                                        <button type="button"
                                                class="btn-floating btn-sm btn-info btn-edit"><i
                                                    class="far fa-edit"></i></button>
                                    </a>
                                    <span class="table-remove" title="Xóa sản phấm"><button type="button"
                                                                       class="btn-floating btn-sm btn-danger btn-delete"><i
                                                    class="far fa-trash-alt"></i></button></span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="row mt-3">
                        <div class="col-md-8">
                            <div class="custom-control-inline">
                                <div class="custom-control custom-checkbox ml-2">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll">Check All</label>
                                </div>
                                <div class="col mr-5">
                                    <button type="button" class="btn btn-danger btn-rounded btn-sm my-0" id="btn-apply">Remove
                                        Selected
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right ml-5">
                                {{ $list_obj->appends(request()->input())->links() }}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center">Hiện không có danh mục nào để hiển thị</div>
                @endif
            </div>
        </div>
    </div>
    <!-- Editable table -->
    <script src="{{asset('js/product.js')}}"></script>
@endsection