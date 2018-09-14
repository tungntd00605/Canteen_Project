$(document).ready(function () {
    google.charts.load('current', {'packages': ['line']});

    var start = moment().subtract(29, 'days');
    var end = moment();

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

    google.charts.setOnLoadCallback(cb(start, end));
});

function cb(start, end) {
    $('#time-picker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

    $.ajax({
        'url': '/get-sale-api',
        'method': 'GET',
        'data': {
            'start': start.format('YYYY-MM-DD'),
            'end': end.format('YYYY-MM-DD'),
            '_token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            var newHtml = '';
            var sumSale = 0;
            console.log(response)
            for (var i in response.jsonData){
                sumSale += parseFloat(response.jsonData[i].total);
            }
            for (var m in response.order_table){
                newHtml += '<tr>'
                newHtml += '<td class="pt-3-half id-col">' + response.order_table[m].id + '</td>'
                newHtml +=    '<td class="pt-3-half">' + response.order_table[m].customer_name + '</td>'
                newHtml +=    '<td class="pt-3-half">' + response.order_table[m].ship_name + '</td>'
                newHtml +=    '<td class="pt-3-half">' + response.order_table[m].ship_phone + '</td>'
                newHtml += '<td class="pt-3-half">' + response.order_table[m].created_at + '</td>'
                newHtml +='<td class="pt-3-half">' + numeral(response.order_table[m].total_price).format('0,0') + ' VND</td>'
                newHtml +='</tr>'
            }
            $('#table-data').append(newHtml);
            $('#total-sale').html(numeral(sumSale).format('0,0') + ' VND');
            if(response.jsonData.length < 2){
                swal("Lỗi biểu đồ", "Không đủ dữ liệu để hiển thị biểu đồ", "error");
                $('#line_chart').html('Không đủ dữ liệu để hiển thị biểu đồ');
            }else {
                drawChart(response.jsonData);
            }
        },
        error: function (response) {
            console.log(response);
        }
    });

    var start = moment().subtract(1, 'days');
    var end = moment();
}


function drawChart(data) {
    var tableData = new google.visualization.DataTable();
    tableData.addColumn('date', 'Ngày');
    tableData.addColumn('number', 'Doanh Thu');
    for (var i in data) {
        tableData.addRow([new Date(data[i].day), parseFloat(data[i].total)]);
    }

    var options = {
        chart: {
            title: 'Doanh thu bán hàng của FPT Canteen',
            subtitle: 'Đơn vị (VND)'
        },
        width: 900,
        height: 500,
        animation:{
            duration: 1000,
            easing: 'out',
            startup: true
        },
    };

    var chart = new google.charts.Line(document.getElementById('line_chart'));

    chart.draw(tableData, google.charts.Line.convertOptions(options));
}