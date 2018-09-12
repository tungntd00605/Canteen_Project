
$(document).ready(function () {

    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });

    $('#btn-apply').click(()=>{
        deleteMany();
    });

    $('select[name="categoryId"]').change(()=>{
        window.location.href = '/admin/product?categoryId=' +  $('[name="categoryId"]').val() + '&limit=' + $('select[name="limit"]').val();
    });

    $('select[name="limit"]').change(function () {
        window.location.href = '/admin/product?categoryId=' +  $('[name="categoryId"]').val() + '&limit=' + $('select[name="limit"]').val();
    })

    $('.btn-delete').on('click', function () {
        deleteOne(this);
    });
});

function deleteOne(button) {
    var thisButton = $(button);
    swal({
        title: "Xóa sản phẩm!",
        text: "Bạn có chắc muốn xoá sản phẩm này không?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            var id = thisButton.closest("tr").children(".id-col").text();
            $.ajax({
                'url': '/admin/product/' + id,
                'method': 'DELETE',
                'data': {
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    swal("Thành công!", "Sản phẩm đã bị xoá!", "success");
                    thisButton.closest('tr').remove();
                },
                error: function () {
                    swal("Có lỗi xảy ra!", "Vui lòng thử lại sau", "error");
                }
            });
        } else {
        }
    });
    return false;
}

function deleteMany(){
    var arrayId = [];
    $('.check-item:checked').each(function(index, item) {
        //arrayId.push(item.closest('.row').id.replace('row-item-', ''));
        arrayId.push(item.id.replace('check-', ''));
    });
    
    if(arrayId.length == 0){
        swal('Bạn chưa chọn gì!', 'Vui lòng chọn ít nhất một sản phẩm.', 'error');
        return;
    }

    swal({
        title: "Xóa sản phẩm!",
        text: "Bạn có chắc muốn xoá sản phẩm những sản phẩm đã chọn không?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                method: 'DELETE',
                url: '/admin/destroy-many/product',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'ids': arrayId
                },
                success: function (resp) {
                    swal("Thành công!", "Sản phẩm được chọn đã bị xoá!", "success");
                    $('#messageSuccess').text('Action success!');
                    $('#messageSuccess').removeClass('d-none');
                    for (var i = 0; i < arrayId.length; i++) {
                        $('#row-' + arrayId[i]).remove();
                    }

                    if($('.check-item').length == 0){
                        setTimeout(function(){
                            window.location.reload(1);
                        }, 3*1000);
                    }
                },
                error: function () {
                    $('#messageError').removeClass('d-none');
                    $('#messageError').text('Action fails! Please try again later!');
                    swal("Có lỗi xảy ra!", "Vui lòng thử lại sau", "error");
                }
            });
        } else {
        }
    });
}

