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

    //Validate form order
    var orderCusNameValidate = false;
    $('#cusName').focusout(function () {
        if ($(this).val() == null || $(this).val().length == 0){
            $('#errorCusName').html('Vui lòng nhập tên người gửi!');
            $('#cusName').addClass('error');
            orderValidate = false;
        }else {
            $('#errorCusName').html('');
            $('#cusName').removeClass('error');
            orderValidate = true;
        }
    });

    var orderShipNameValidate = false;
    $('#ship_phone').focusout(function () {
        if ($(this).val() == null || $(this).val().length == 0) {
            $('#errorShipPhone').html('Vui lòng nhập sô điện thoại!');
            orderShipNameValidate = false;
        } else {
            $('#errorCusName').html('');
            orderShipNameValidate = true;
        }
    });

    var orderShipAddressValidate = false;
    $('#ship_address').focusout(function () {
        if ($(this).val() == null || $(this).val().length == 0) {
            $('#errorShipAddress').html('Vui lòng nhập sô phòng!');
            orderShipAddressValidate = false;
        } else {
            $('#errorShipAddress').html('');
            orderShipAddressValidate = true;
        }
    });

    var orderShipNameValidate = false;
    $('#ship_name').focusout(function () {
        if ($(this).val() == null || $(this).val().length == 0) {
            $('#errorShipName').html('Vui lòng nhập người nhận!');
            orderShipNameValidate = false;
        } else {
            $('#errorShipName').html('');
            orderShipNameValidate = true;
        }
    });
    
    $('.btn-delete').each(function () {
        $(this).click(function () {
            var button = $(this);
            var remove_id = button.attr('id').replace('product-', '');
            button.prop('disabled', true);
            $.ajax({
                url: '/api-xoa-san-pham',
                method: 'POST',
                data: {
                    remove_id: remove_id,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (resp) {
                    swal("Thành công!", "Đơn hàng của bạn đã được gửi đi!", "success")
                        .then((value) => {
                            window.location.reload();
                        });
                    button.prop('disabled', false);
                },
                error: function (error) {
                    swal('Thao tác thất bại', "Vui lòng thử lại sau", 'error');
                    button.prop('disabled', false);
                }
            });
        })
    })
});

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