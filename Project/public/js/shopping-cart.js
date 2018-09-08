$(document).ready(function () {
    $('#btn-order').on('click', function () {
        if($('tbody').has('img')){
            swal('Giỏ hàng trống', 'Vui lòng thêm sản phẩm vào giỏ hàng', 'error');
        } else {
            $.ajax({
                'url': '/gui-don-hang',
                'method': 'POST',
                'data': {
                    'customer_name': $('input[name="customer_name"]').val(),
                    'ship_name': $('input[name="ship_name"]').val(),
                    'ship_phone': $('input[name="ship_phone"]').val(),
                    'ship_address': $('input[name="ship_address"]').val(),
                    'message': $('textarea[name="message"]').val(),
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    swal("Thành công!", "Đơn hàng của bạn đã được gửi đi!", "success");
                    setTimeout(function () {
                        window.location.reload();
                    }, 2*1000);
                },
                error: function () {
                    swal("Có lỗi xảy ra!", "Vui lòng thử lại sau", "error");
                }
            });
        }
    })
})
