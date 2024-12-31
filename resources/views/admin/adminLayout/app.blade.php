<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.headerLink')
</head>

<body>
    <!-- Header -->
    @include('admin.partials.header')

    <section>
        <div class="main">
            <div class="incon">
                <div class="row">
                    @include('admin.partials.sidebar')
                    <!-- Main Content -->
                    @yield('content')
                </div>
            </div>
    </section>

    <!-- Footer -->
    @include('admin.partials.footer')

    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/select-opt.js') }}"></script>
    <script src="{{ asset('admin/js/chart.js') }}"></script>
    <script src="{{ asset('admin/js/admin-custom.js') }}"></script>
    <script>
        //ARNING CHART
        var earningCanvas = document.getElementById("Chart_earni");
        Chart.defaults.global.defaultFontSize = 14;
        var earningsData = {
            labels: ["Premium Plus", "Premium"],
            datasets: [{
                data: [50, 60],
                backgroundColor: ["#8463FF", "#6384FF"]
            }]
        };
        var pieChart = new Chart(earningCanvas, {
            type: 'pie',
            data: earningsData
        });
        //USER CHART
        var usersCanvas = document.getElementById("Chart_users");
        var usersData = {
            labels: ["Premium Plus", "Premium", "Free"],
            datasets: [{
                data: [40, 30, 30],
                backgroundColor: ["#198754", "#ffc107", "#6c757d"]
            }]
        };
        var pieChart = new Chart(usersCanvas, {
            type: 'pie',
            data: usersData
        });
        //USER CHART
        var ctx = document.getElementById("Chart_earni_rece").getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: 'data-1',
                    data: [4000, 5000, 4550, 6005, 8550, 9008, 3220, 4880, 6550, 2500],
                    backgroundColor: "rgba(255,99,132,0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    borderWidth: 2,
                    hoverBackgroundColor: "rgba(255,99,132,0.4)",
                    hoverBorderColor: "rgba(255,99,132,1)",
                }]
            }
        });
    </script>

</body>

</html>
