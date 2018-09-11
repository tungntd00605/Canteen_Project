$(document).ready(function () {
    $('#btn-order').on('click', function () {
        if (!$('tbody').find('img').length > 0) {
            swal('Giỏ hàng trống', 'Vui lòng thêm sản phẩm vào giỏ hàng', 'error');
        } else {
            button = $(this)
            button.prop('disabled', true);
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
                    swal("Thành công!", "Đơn hàng của bạn đã được gửi đi!", "success")
                        .then((value) => {
                            window.location.reload();
                        });
                    button.prop('disabled', false);
                },
                error: function (response) {
                    var errors = response.responseJSON;
                    console.log();
                    var errorsHtml = '';
                    $.each(errors.errors, function( key, value ) {
                        errorsHtml += '<li class="text-danger">' + value[0] + '</li>';
                    });
                    console.log(errorsHtml);
                    $('#validate-msg ul').html(errorsHtml);

                    swal("Có lỗi xảy ra!", "Vui lòng thử lại sau", "error").
                    then((value) => {
                    });
                    button.prop('disabled', false);
                }
            });
        }
    });

    $('.btn-add').each(function () {
        $(this).click(function () {
            var button = $(this);
            var product_id = button.closest('tr').find('button.btn-delete').attr('id').replace('product-', '');
            updateQuantity(product_id, 1, button)
        });
    });

    $('.btn-minus').each(function () {
        $(this).click(function () {
            var button = $(this);
            var product_id = button.closest('tr').find('button.btn-delete').attr('id').replace('product-', '');
            updateQuantity(product_id, -1, button)
        });
    });
})

function updateQuantity(id, quantity, button) {
    $.ajax({
        url: '/api-them-gio-hang',
        method: 'post',
        data: {
            id: id,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (resp) {
            var qty_element = '.product-qty-' + id;
            var product_total_ele = '.product-total-price-' + id;
            $(qty_element).text(resp.new_item.new_qty);
            $(product_total_ele).text(resp.new_item.new_total_price);
            $('#total-cart-price').text(resp.new_cart_price);
        },
        error: function (error) {
            swal('Thao tác thất bại', "Vui lòng thử lại sau", 'error');
        }
    });
}