
//fix tạm lỗi cao thấp (chưa được)
// $(document).ready(function() {
//     var max_h = 0;
//     $('.product-thumb').each(function () {
//         console.log('max = ' + max_h);
//         console.log('img height = ' +$(this).height);
//         if($(this).height > max_h){
//             max_h = $(this).height;
//         }
//     })
//     $('.product-thumb').each(function () {
//         $(this).height(max_h);
//     })
// });

$('.btn-add-cart').click(function () {
    var product_id = $(this).attr('id').replace('add-cart-', '');
    var quantity = 1;
    $.ajax({
        url: '/api-them-gio-hang',
        method: 'post',
        data: {
            id: product_id,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (resp) {
            var new_count = resp.shopping_cart.count;
            var new_total_money = resp.shopping_cart.total_money;
            var new_items = resp.shopping_cart.items;
            var new_content = '';
            for (var i in new_items) {
                new_content += '<tr>';
                new_content += '<th scope="row"><img src="' + new_items[i].product.thumbnail + '" class="img-fluid img-thumbnail" width="110px" alt=""></th>';
                new_content += '<td>' + new_items[i].product.name + '</td>';
                new_content += '<td>' + new_items[i].quantity + '</td>';
                new_content += '<td>' + new_items[i].product.dicountPriceString + '</td>';
                new_content += '</tr>';
            }
            if($('#cart-count-icon').hasClass( "grey" )){
                $('#cart-count-icon').removeClass('grey')
                $('#cart-count-icon').addClass('danger-color')
            }
            if(new_count == undefined){
                $('#cart-count-icon').text(1);
            }else{
                $('#cart-count-icon').text(new_count);
            }
            $('#cart-body').html(new_content);
            $('#cart-total').text(new_total_money);
            swal('Thao tác thành công!', 'Sản phẩm đã được thêm vào giỏ hàng!', 'success');
        },
        error: function (error) {
            swal('Thao tác thất bại', "Vui lòng thử lại sau", 'error');
        }
    });
});
