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
            for (var i in response.jsonData){
                sumSale += parseFloat(response.jsonData[i].total);

                newHtml += '<tr>'
                newHtml += '<td class="pt-3-half id-col">20</td>'
                newHtml +=    '<td class="pt-3-half">Ly</td>'
                newHtml +=    '<td class="pt-3-half">Ly</td>'
                newHtml +=    '<td class="pt-3-half">0231839021</td>'
                newHtml += '<td class="pt-3-half">2018-09-11 03:12:32</td>'
                newHtml += '<td class="pt-3-half">'
                newHtml +=    '<ul>'
                newHtml +=    '<li>Nước chanh leo x 6</li>'
                newHtml +='</ul>'
                newHtml +='</td>'
                newHtml +='<td class="pt-3-half">Chờ xử lý</td>'
                newHtml +='<td>'
                newHtml +='<span class="table-confirm" id="order-20" title="Xác nhận đơn hàng">'
                newHtml +=    '<button type="button" class="btn-floating btn-sm btn-info btn-confirm waves-effect waves-light"><i class="fas fa-check"></i></button>'
                newHtml +='</span>'
                newHtml +='<span class="table-remove"><button type="button" class="btn-floating btn-sm btn-danger btn-delete waves-effect waves-light"><i class="far fa-trash-alt"></i></button></span>'
                newHtml +='</td>'
                newHtml +='</tr>'

                $('#table-data').append(newHtml);
            }
            $('#total-sale').html(numeral(sumSale).format('0,0') + ' VND');
            if(response.jsonData.length < 2){
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