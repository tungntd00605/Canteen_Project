@extends('layout.master', [
    'page_title'=>'Danh sách danh mục sản phẩm | FPTcanteen Admin Page',
    'current_page'=>'category_page',
])
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Category table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                @if (Session::has('message'))
                    <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
                @endif
                <span class="table-add float-right mb-3 mr-2"><a href="/admin/category/create" class="text-success"><i
                                class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                @if(count($list_obj) > 0)
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center id-col">ID</th>
                        <th class="text-center name-col">Name</th>
                        <th class="text-center description-col">Description</th>
                        <th class="text-center thumbnail-col">Thumbnail</th>
                        <th class="text-center">Option</th>
                    </tr>
                    @foreach ($list_obj as $item)
                        <tr>
                            <td class="pt-3-half id-col">{{$item->id}}</td>
                            <td class="pt-3-half name-col">{{$item->name}}</td>
                            <td class="pt-3-half description-col">{{$item->description}}</td>
                            <td class="pt-3-half thumbnail-col">
                                <img src="{{$item->thumbnail}}" alt="" height="120px" width="180px">
                            </td>
                            <td>
                                <a href="/admin/category/{{$item->id}}/edit" class="table-edit"><button type="button"
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

    <!-- Script -->
    <script>
        $(document).ready(function () {
            $('.btn-delete').on('click', function () {
                var thisButton = $(this);
                swal({
                    title: "Warning!",
                    text: "Bạn có chắc muốn xoá danh mục này không?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        var id = thisButton.closest("tr").children(".id-col").text();
                        $.ajax({
                            'url': '/admin/category/' + id,
                            'method': 'DELETE',
                            'data': {
                                '_token': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (response) {
                                swal("Thành công!", "Danh mục đã bị xoá!", "success");
                                thisButton.closest('tr').remove();
                            },
                            error: function () {
                                swal("Có lỗi xảy ra!", "Vui lòng thử lại sau", "error");
                            }
                        });
                    } else {
                    }
                })
                return false;
            });
        });

    </script>
@endsection