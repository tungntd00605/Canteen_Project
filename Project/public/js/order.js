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

    var start = moment().subtract(1, 'days');
    var end = moment()

    $('#time-picker').daterangepicker({
        startDate: start,
        endDate: end,
        alwaysShowCalendars: true,
        maxDate: end,
        locale: {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
            "firstDay": 1
        },
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);
});

function cb(start, end) {
    $('#time-picker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    window.location.href = '/admin/search/order?start=' + start.format('DD-MM-YYYY') + '&end=' + end.format('DD-MM-YYYY');
}