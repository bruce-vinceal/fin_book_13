<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Finote</title>

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

              var dailyExpense = <?php echo json_encode($dailyExpense ?? ''); ?>;
              var days = <?php echo json_encode($days ?? ''); ?>;
              var monthlyIncome = <?php echo json_encode($monthlyIncome ?? ''); ?>;
              var monthlyExpense = <?php echo json_encode($monthlyExpense ?? ''); ?>;
              var category = <?php echo json_encode($category ?? ''); ?>;
              var expenseCategory = <?php echo json_encode($expenseCategory ?? ''); ?>;
      

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
                        labels: days,
                        datasets: [{
                            label: "Expense",
                            backgroundColor: 'rgba(80, 78, 224, 0.1)',
                            borderColor: 'rgba(80, 78, 224)',
                            data: dailyExpense
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
                            labels: category,
                            datasets: [{
                                data: expenseCategory,
                                backgroundColor: [
                                    'rgba(154, 136, 255, 0.8)',
                                    'rgba(118, 106, 255, 0.8)',
                                    'rgba(80, 78, 224, 0.8)',
                                    'rgba(0, 35, 170, 0.8)',
                                    'rgba(0, 113, 249, 0.8)',
                                    'rgba(0, 135, 245, 0.8)',
                                    'rgba(0, 149, 216, 0.8)',
                                    'rgba(0, 159, 173, 0.8)',
                                    'rgba(0, 166, 125, 0.8)',
                                ],
                                hoverBackgroundColor: [
                                    'rgba(154, 136, 255)',
                                    'rgba(118, 106, 255)',
                                    'rgba(80, 78, 224)',
                                    'rgba(0, 35, 170)',
                                    'rgba(0, 113, 249)',
                                    'rgba(0, 135, 245)',
                                    'rgba(0, 149, 216)',
                                    'rgba(0, 159, 173)',
                                    'rgba(0, 166, 125)',
                                ],
                            }],
                        },
                        options: {
                        },
                    });

                    var ctx = document.getElementById("monthly-income-bar-graph");
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                              "January", "February", "March", "April", "May", "June","July","August","September","November","December"
                            ],
                            datasets: [{
                            label: "Revenue",
                            backgroundColor: 'rgba(80, 78, 224)',
                            hoverBackgroundColor: 'rgba(52, 51, 131)',
                            borderColor: 'rgba(80, 78, 224)',
                            data: monthlyIncome,
                            }],
                        },
                        options: {
                            legend: {
                                display: false,
                            },
                        }
                    });

                    var ctx = document.getElementById("monthly-expense-bar-graph");
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                              "January", "February", "March", "April", "May", "June","July","August","September","November","December"
                            ],
                            datasets: [{
                            label: "Revenue",
                            backgroundColor: 'rgba(80, 78, 224)',
                            hoverBackgroundColor: 'rgba(52, 51, 131)',
                            borderColor: 'rgba(80, 78, 224)',
                            data: monthlyExpense,
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