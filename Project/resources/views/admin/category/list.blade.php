@extends('layout.master', [
    'page_title'=>'Danh sách danh mục sản phẩm | FPTcanteen Admin Page',
    'current_page'=>'category_page',
])
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Category table</h3>
        <div class="card-body">
            <div id="table" class="table-editable table-responsive">
                @if (Session::has('message'))
                    <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
                @endif
                <div class="row">
                    <div class="col-md-2">
                        <select class="mdb-select colorful-select dropdown-primary pl-2" name="limit">
                            <option value="0" disabled>Rows number</option>
                            <option value="5" {{$limit == 5? 'selected':''}}>5 rows</option>
                            <option value="25" {{$limit == 25? 'selected':''}}>25 rows</option>
                            <option value="50" {{$limit == 50? 'selected':''}}>50 rows</option>
                            <option value="100" {{$limit == 100? 'selected':''}}>100 rows</option>
                        </select>
                    </div>
                    <div class="col-md-10">
                        <span class="table-add float-right pt-3 mr-2" data-toggle="tooltip" data-placement="top" title="Thêm mới danh mục">
                            <a href="/admin/category/create" class="text-success">
                                <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div>
                </div>
                @if(count($list_obj) > 0)
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <tr>
                            <th class="text-center "></th>
                            <th class="text-center id-col">ID</th>
                            <th class="text-center name-col">Name</th>
                            <th class="text-center description-col">Description</th>
                            <th class="text-center thumbnail-col">Thumbnail</th>
                            <th class="text-center">Option</th>
                        </tr>
                        @foreach ($list_obj as $item)
                            <tr>
                                <td class="pt-3-half">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check-item"
                                               id="check-{{$item->id}}">
                                        <label class="custom-control-label" for="check-{{$item->id}}"></label>
                                    </div>
                                </td>
                                <td class="pt-3-half id-col">{{$item->id}}</td>
                                <td class="pt-3-half name-col">{{$item->name}}</td>
                                <td class="pt-3-half description-col">{{$item->description}}</td>
                                <td class="pt-3-half thumbnail-col">
                                    <img src="{{$item->thumbnail}}" alt="" height="120px" width="180px">
                                </td>
                                <td>
                                    <a title="Xem các sản phẩm trong danh mục" href="/admin/category/{{$item->id}}" class="table-edit">
                                        <button  type="button" class="btn-floating btn-sm secondary-color btn-detail">
                                            <i class="fas fa-list-ol"></i>
                                        </button>
                                    </a>
                                    <a title="Sửa thông tin danh mục" href="/admin/category/{{$item->id}}/edit" class="table-edit">
                                        <button  type="button" class="btn-floating btn-sm btn-info btn-edit">
                                            <i class="far fa-edit">
                                            </i>
                                        </button>
                                    </a>
                                    <span title="Xóa danh mục" class="table-remove"><button type="button"   class="btn-floating btn-sm btn-danger btn-delete">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="row mt-3">
                        <div class="col-md-8">
                            <div class="custom-control-inline">
                                <div class="custom-control custom-checkbox ml-4">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <label class="custom-control-label" for="checkAll">Check All</label>
                                </div>
                                <div class="col mr-5">
                                    <button type="button" class="btn btn-danger btn-rounded btn-sm my-0" id="btn-apply">
                                        Remove
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

    <!-- Script -->
    <script type="text/javascript" src="{{asset('js/category.js')}}"></script>
@endsection