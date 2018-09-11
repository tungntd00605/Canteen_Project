$(document).ready(function () {
    $('.table-confirm').on('click', function () {
        var id = $(this).attr('id').replace('order-', '');
        swal({
            title: "Xác nhận đơn hàng",
            text: "Bạn có chắc muốn xác nhận đơn hàng này?",
            icon: "info",
            buttons: true,
            dangerMode: true,
        })
            .then((confirm) => {
                if (confirm) {
                    swal("Xác nhận đơn hàng thành công", {
                        icon: "success",
                    }).then((value)=> {
                        window.location.href = '/admin/order/change-status?id=' + id + '&status=1';
                    });
                } else {
                }
            });
    })

    $('.table-done').on('click', function () {
        var id = $(this).attr('id').replace('order-', '');
        swal({
            title: "Hoàn thành đơn hàng",
            text: "Bạn có chắc muốn xác nhận đơn hàng này đã hoàn thành?",
            icon: "info",
            buttons: true,
            dangerMode: true,
        })
            .then((confirm) => {
                if (confirm) {
                    swal("Đơn hàng đã được hoàn thành", {
                        icon: "success",
                    }).then((value)=> {
                        window.location.href = '/admin/order/change-status?id=' + id + '&status=2';
                    });
                } else {
                }
            });
    })

    $('.btn-delete').on('click', function () {
        var thisButton = $(this);
        swal({
            title: "Warning!",
            text: "Bạn có chắc muốn hủy đơn hàng này không?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var id = thisButton.closest("tr").children(".id-col").text();
                $.ajax({
                    'url': '/admin/order/' + id,
                    'method': 'DELETE',
                    'data': {
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        swal("Thành công!", "Đơn hàng đã bị hủy!", "success");
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