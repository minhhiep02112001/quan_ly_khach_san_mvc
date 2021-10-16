const numberFormat = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
});
$(function () {
    var start_day;
    var end_day;
    var data_count_order = [
        10,
        30,
        40,
        20,
        0
    ];

    $('#daterange-btn').daterangepicker(
        {
            ranges: {
                'Today': [moment(), moment().subtract('days', -1)],
                'Yesterday': [moment().subtract('days', 1), moment()],
                'Last 7 Days': [moment().subtract('days', 6),  moment().subtract('days', -1)],
                'Last 30 Days': [moment().subtract('days', 29),  moment().subtract('days', -1)],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            startDate: moment().subtract('days', 29),
            endDate: moment(),
            label: true
        },
        function (start, end, label) {

            $('#reportrange span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            start_day = start.format('YYYY-MM-DD')
            end_day = end.format('YYYY-MM-DD')

            getCountOrder(start_day, end_day);
        }
    );
    getCountOrder(moment().subtract('days', 29).format('YYYY-MM-DD'), moment().subtract('days', -1).format('YYYY-MM-DD'));


});

function getCountOrder($start_day, $end_day) {
    var item = {};
    $.ajax({
        url: 'admin/ajax/chart',
        data: {
            start_day: $start_day,
            end_day: $end_day
        },
        dataType: 'json',
        type: 'POST',
        async: false,
        success: function (data) {
            item = (data);
        },
    });
    var data_count_order = [];
    var array_label = [];
    for (let elements of item) {
        array_label.push(elements['sum_price']);
    }
    for (let elements of item) {
        data_count_order.push(elements['sum_records']);
    }
    let myChart = document.getElementById('myChart').getContext('2d');
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 15;
    Chart.defaults.global.defaultFontColor = '#777';
    let massPopChart = new Chart(myChart, {
        type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: [
                'Đặt phòng',
                'Đặt phòng thành công',
                'Đã thanh toán',
                'Nhân viên hủy',
                'Khách hàng hủy'
            ],
            datasets: [{
                label: 'Population',
                data: data_count_order,
                //backgroundColor:'green',
                backgroundColor: [
                    'rgba(127,255,212)',
                    'rgba(0,0,205)',
                    'rgba(0,128,0)',
                    'rgba(255,0,0)',
                    'rgba(165,70,70)',

                ],
                borderWidth: 1,
                borderColor: '#777',
                hoverBorderWidth: 3,
                hoverBorderColor: '#000'
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Thống kê đơn đặt hàng',
                fontSize: 25
            },
            legend: {
                display: true,
                position: 'right',
                labels: {
                    fontColor: '#000'
                }
            },
            layout: {
                padding: {
                    left: 50,
                    right: 0,
                    bottom: 0,
                    top: 0
                }
            },
            tooltips: {
                enabled: true
            }
        }
    });
}
