<?php
 $totalRevenue = array_sum($data['totalRevenueByProduct']);

?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bảng điều khiển</h1>
    
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div class="row no-gutters align-items-center">
    <div class="col mr-2">
        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
            Thu nhập
        </div>
        <div class="h5 mb-0 font-weight-bold text-gray-800">
            <?php echo number_format($totalRevenue, 2).'VND'; ?> <!-- Hiển thị tổng doanh thu -->
        </div>
    </div>
    <div class="col-auto">
        <i class="fas fa-calendar fa-2x text-gray-300"></i>
    </div>
</div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Thu nhập (Hàng năm)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">480.000.000 VNĐ</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Số đơn hàng đang vận chuyển 
                        </div>
                        <div class="row no-gutters align-items-center">
    <div class="col-auto">
        <?php foreach ($donhangvanchuyen as $key => $value) : ?>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $value['SoDonHangDangGiao'] ?></div>
        <?php endforeach; ?>
    </div>
    <div class="col">
        <?php foreach ($donhangvanchuyen as $key => $value) : ?>
            <?php
            // Trích xuất giá trị từ mảng
            $soDonHangDangGiao = $value['SoDonHangDangGiao'];

            // Tính toán tỷ lệ phần trăm
            $tyLePhanTram = ($soDonHangDangGiao > 0) ? ($soDonHangDangGiao / 10) * 100 : 0;
            ?>
            <div class="progress progress-sm mr-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: <?= $tyLePhanTram ?>%"
                    aria-valuenow="<?= $tyLePhanTram ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->

</div>
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tổng quan về thu nhập</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Bảng thống kê doanh thu</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tháng</th>
                                <th>Sản phẩm</th>
                                <th>Doanh thu</th>
                            </tr>
                        </thead>
                        <tbody id="dataTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thống kê cửa hàng</h6>
            </div>
            <div class="card-body">
            <?php
// Giả sử bạn đã thiết lập kết nối với cơ sở dữ liệu và có mảng $soluong_tonkho chứa các giá trị soluonghangdanhap và sosanphamdaban

foreach ($soluong_tonkho as $key => $value) {
    // Trích xuất giá trị từ mảng
    $soluonghangdanhap = $value['soluonghangdanhap'];
    $sosanphamdaban = $value['sosanphamdaban'];

    // Tính toán sự chênh lệch (số lượng tồn kho = số lượng hàng đặt nhập - số lượng đã bán)
    $soluongtonkho = $soluonghangdanhap - $sosanphamdaban;

    // Tính toán tỷ lệ phần trăm
    $tiLeNhap = ($soluonghangdanhap > 0) ? ($soluonghangdanhap / ($soluonghangdanhap + $sosanphamdaban)) * 100 : 0;
    $tiLeBan = ($sosanphamdaban > 0) ? ($sosanphamdaban / ($soluonghangdanhap + $sosanphamdaban)) * 100 : 0;
    $tiLeTonKho = ($soluongtonkho > 0) ? ($soluongtonkho / ($soluonghangdanhap + $sosanphamdaban)) * 100 : 0;
    ?>

    <!-- Hiển thị HTML với các tỷ lệ phần trăm tính toán được -->
    <h4 class="small font-weight-bold">Số lượng hàng nhập <span class="float-right"><?php echo round($tiLeNhap); ?>%</span></h4>
    <div class="progress mb-4">
        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo round($tiLeNhap); ?>%"
            aria-valuenow="<?php echo round($tiLeNhap); ?>" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <h4 class="small font-weight-bold">Số lượng đã bán <span class="float-right"><?php echo round($tiLeBan); ?>%</span></h4>
    <div class="progress mb-4">
        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo round($tiLeBan); ?>%"
            aria-valuenow="<?php echo round($tiLeBan); ?>" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <h4 class="small font-weight-bold">Số lượng tồn kho <span class="float-right"><?php echo round($tiLeTonKho); ?>%</span></h4>
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: <?php echo round($tiLeTonKho); ?>%"
            aria-valuenow="<?php echo round($tiLeTonKho); ?>" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

<?php
}
?>
<!---  đơn hàng hủy -->
<?php foreach ($donhanghuy as $key => $value) : ?>
    <?php
 
    $soDonHangBiHuy = $value['SoDonHangBiHuy'];

    
    $tyLePhanTram = ($soDonHangBiHuy > 0) ? ($soDonHangBiHuy / 100) * 100 : 0;
    ?>

    <!-- Hiển thị thông tin -->
    <h4 class="small font-weight-bold">Số lượng hàng hủy <span class="float-right"><?php echo $tyLePhanTram; ?>%</span></h4>
    <div class="progress mb-4">
        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $tyLePhanTram; ?>%"
            aria-valuenow="<?php echo $tyLePhanTram; ?>" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
<?php endforeach; ?>



            </div>
        </div>

    

    </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Hàm định dạng số
    function number_format(number, decimals, decPoint, thousandsSep) {
        decimals = decimals || 0;
        number = parseFloat(number);

        if (!decPoint || !thousandsSep) {
            decPoint = '.';
            thousandsSep = ',';
        }

        var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
        var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
        var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
        var formattedNumber = "";

        while (numbersString.length > 3) {
            formattedNumber += thousandsSep + numbersString.slice(-3);
            numbersString = numbersString.slice(0, -3);
        }

        return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
    }

    var doanhThuData = <?php echo json_encode($data); ?>;

    // Chuyển đổi dữ liệu để phản ánh cấu trúc của biểu đồ
    var formattedData = {
        labels: [],  // Sử dụng labels từ doanhThuData
        datasets: [{
            label: "đường dẫn",
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgba(78, 115, 223, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(78, 115, 223, 1)",
            pointBorderColor: "rgba(78, 115, 223, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: [],
        }],
    };

    // Lặp qua dữ liệu và đổ vào biểu đồ và bảng
    doanhThuData.data.forEach(function (item) {
        formattedData.labels.push(item.Month);
        formattedData.datasets[0].data.push({
            x: item.Month,
            y: parseFloat(item.Revenue),
            label: item.Product,
        });

        // Đổ dữ liệu vào bảng
        var tableRow = document.createElement('tr');
        tableRow.innerHTML = '<td>' + item.Month + '</td><td>' + item.Product + '</td><td>' + number_format(item.Revenue)+'  '+'VND' + '</td>';
        document.getElementById('dataTableBody').appendChild(tableRow);
    });

    // Khởi tạo biểu đồ với dữ liệu đã được định dạng
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: formattedData,
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    type: 'category',
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        callback: function (value, index, values) {
                            return '$' + number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        var value = tooltipItem.yLabel;
                        var productName = chart.data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index].label;
                        return 'Tháng ' + productName + ': VND' + number_format(value);
                    }
                }
            }
        }
    });
</script>
