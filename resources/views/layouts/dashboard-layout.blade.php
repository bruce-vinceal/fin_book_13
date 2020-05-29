<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="/css/all.css" rel="stylesheet">
        <link href="/css/category-management.css" rel="stylesheet">
        <link href="/css/monthly-report.css" rel="stylesheet">
        <link href="/css/ledger.css" rel="stylesheet">
        <link href="/css/footer.css" rel="stylesheet">
        <link href="/css/dashboard-layout.css" rel="stylesheet">
        <link href="/css/datatables.css" rel="stylesheet">
        <link href="/css/Chart.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            @include('components.dashboard-sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('components.dashboard-nav')
                    @yield('content')
                </div>
                @include('components.footer')
            </div>
        </div>
        @include('components.dashboard-logout-modal')
        <script src="/js/all.js"></script>
        <script src="/js/jquery-3.5.1.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap/bootstrap.js"></script>
        <script src="/js/datatables.js"></script>
        <script src="/js/Chart.bundle.js"></script>
        <script>
            $(document).ready(function () {
                $("#sidebarToggle, #sidebarToggleTop").on("click", function (e) {
                    $("body").toggleClass("sidebar-toggled");
                    $(".sidebar").toggleClass("toggled");
                    if ($(".sidebar").hasClass("toggled")) {
                        $(".sidebar .collapse").collapse("hide");
                    }
                });

                // Close any open menu accordions when window is resized below 768px
                $(window).resize(function () {
                    if ($(window).width() < 768) {
                        $(".sidebar .collapse").collapse("hide");
                    }
                });

                // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
                $("body.fixed-nav .sidebar").on(
                    "mousewheel DOMMouseScroll wheel",
                    function (e) {
                        if ($(window).width() > 768) {
                            var e0 = e.originalEvent,
                                delta = e0.wheelDelta || -e0.detail;
                            this.scrollTop += (delta < 0 ? 1 : -1) * 30;
                            e.preventDefault();
                        }
                    }
                );

                $('#ledger-table').DataTable();


                var ctx = document.getElementById('daily-expense-line-graph');
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: ['15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'],
                        datasets: [{
                            backgroundColor: 'transparent',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [75,100,105,103,100,80,150,85,75,95,110,120,115,110,120,95,150]
                        }]
                    },

                    // Configuration options go here
                    options: {
                        legend: {
                            display: false
                        },
                    }
                });

                    var ctx = document.getElementById("expense-category-pie-chart");
                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ["Direct", "Referral", "Social"],
                            datasets: [{
                            data: [55, 30, 15],
                            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                            hoverBorderColor: "rgba(234, 236, 244, 1)",
                            }],
                        },
                        options: {
                            legend: {
                                display: false
                            },
                        },
                    });

                    var ctx = document.getElementById("monthly-income-bar-graph");
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["January", "February", "March", "April", "May", "June"],
                            datasets: [{
                            label: "Revenue",
                            backgroundColor: "#4e73df",
                            hoverBackgroundColor: "#2e59d9",
                            borderColor: "#4e73df",
                            data: [4215, 5312, 6251, 7841, 9821, 14984],
                            }],
                        },
                        options: {
                            legend: {
                                display: false
                            },
                        }
                    });

                    var ctx = document.getElementById("monthly-expense-bar-graph");
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["January", "February", "March", "April", "May", "June"],
                            datasets: [{
                            label: "Revenue",
                            backgroundColor: "#4e73df",
                            hoverBackgroundColor: "#2e59d9",
                            borderColor: "#4e73df",
                            data: [4215, 5312, 6251, 7841, 9821, 14984],
                            }],
                        },
                        options: {
                            legend: {
                                display: false
                            },
                        }
                    });
            });
        </script>
    </body>
</html>