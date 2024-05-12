<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class=" text-center-800 ">Thống kê danh mục sản phẩm</h3>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="container py-4">
            <!-- <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme.
                        The charts below have been customized - for further customization options, please visit the <a
                            target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
                            documentation</a>.</p> -->

            <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">

                    <!-- Area Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh mục</h6>
                        </div>
                        <html>

                        <head>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load("current", { packages: ["corechart"] });
                                google.charts.setOnLoadCallback(drawChart);
                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Danh mục', 'Số lượng'],
                                        <?php
                                        foreach ($thongkedanhmuc as $thongke) {
                                            extract($thongke);
                                            echo "['$ten_dm', $soluong],";
                                        }
                                        ?>
                                    ]);

                                    var options = {
                                        title: 'Biểu đồ số lượng sản phẩm trong danh mục',
                                        is3D: true,
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                    chart.draw(data, options);
                                }
                            </script>
                        </head>

                        <body>
                            <div id="piechart_3d" style="width: 700px; height: 500px;"></div>
                        </body>
</html>
                    </div>

              
                </div>

            </div>

            <!-- Donut Chart -->
            <!-- <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Biểu đồ số lượng sản phẩm trong danh mục</h6>
                    </div>
                    
                    <div class="card-body">
<div class="chart-pie pt-4">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <hr>
                        <button style="background-color: #2E59D9; ">&nbsp;&nbsp;</button> Iphone &nbsp;&nbsp;

                        <button style="background-color: #18AB77;">&nbsp;&nbsp;</button> Samsung &nbsp;&nbsp;

                        <button style="background-color: #2C9FAF;">&nbsp;&nbsp;</button> Xiaomi &nbsp;&nbsp;

                        
                    </div>
                </div>
            </div> -->
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->