$(document).ready(function () {
    $('.btn-delete').on('click', function () {
        deleteOne(this);
    });
  
    $("#checkAll").click(function () {
      $('input:checkbox').not(this).prop('checked', this.checked);
    });
    
    $('select[name="limit"]').change(function () {
        window.location.href = '/admin/category?limit=' +  $(this).val();
    })
});

function deleteOne(button) {
    var thisButton = $(button);
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
}
