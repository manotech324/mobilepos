document.addEventListener('DOMContentLoaded', function() {
    // Sales & Purchase Chart
    var salesData = {
        series: [
            {
                name: 'Total Purchase',
                data: [20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130]
            },
            {
                name: 'Total Sales',
                data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120]
            }
        ],
        chart: {
            type: 'line',
            height: 350,
            toolbar: {
                show: false
            }
        },
        colors: ['#405189', '#00b894'],
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: [3, 3],
            curve: 'smooth'
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yaxis: {
            labels: {
                formatter: function(val) {
                    return val + 'K'
                }
            }
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return val + 'K'
                }
            }
        }
    };

    var salesChart = new ApexCharts(document.querySelector('#sales-daychart'), salesData);
    salesChart.render();

    // Revenue Chart
    var revenueData = {
        series: [44, 55, 41, 17, 15],
        chart: {
            type: 'donut',
            height: 350,
            toolbar: {
                show: false
            }
        },
        colors: ['#00b894', '#405189', '#f9ca24', '#e17055', '#6c5ce7'],
        labels: ['Revenue', 'Expenses', 'Profit', 'Returns', 'Loss'],
        responsive: [
            {
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        ]
    };

    var revenueChart = new ApexCharts(document.querySelector('#revenue-chart'), revenueData);
    revenueChart.render();

    // Product Sales Chart
    var productSalesData = {
        series: [
            {
                name: 'Sales',
                data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43, 33]
            }
        ],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false
            }
        },
        colors: ['#00b894'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        yaxis: {
            title: {
                text: 'Sales'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return val + " Sales"
                }
            }
        }
    };

    var productSalesChart = new ApexCharts(document.querySelector('#product-sales-chart'), productSalesData);
    productSalesChart.render();
});
