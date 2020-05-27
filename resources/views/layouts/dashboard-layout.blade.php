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
        <link href="/css/Chart.css" rel="stylesheet">
        <link href="/css/dashboard-layout.css" rel="stylesheet">
        <link href="/css/datatables.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            @include('components.dashboard-sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('components.dashboard-nav')
                    @yield('content')
                </div>
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
            });
        </script>
    </body>
</html>