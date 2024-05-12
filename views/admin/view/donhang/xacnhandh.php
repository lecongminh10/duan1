<h4 class="text-center ">Đơn hàng đang xử lí   </h4>
<?php
    
    if (isset($message)) {
        echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
        </div>";
    }
    ?>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt đơn</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listxacnhan as $xacnhan) {
            extract($xacnhan);
            $xacnhan_tam= "index.php?act=xacnhan_donhang&id_hoadon=".$id_hoadon;
            $huy_tam= "index.php?act=huy_hoadon&id_hoadon=".$id_hoadon;
            if ($xuly== 1) {
                $tam = "Đã xử lý";
            } else {
                $tam = "Chưa xử lý";
            }
            echo '
            <tr>
                 <td>' . $id_hoadon . '</td>
                 <td>' . $ma_hd . '</td>
                 <td>' . $ngaydatdon . '</td>
                 <td>' . $tongtien . '</td>
                 <td>' . $tam . '</td>
                <td>
                <a href="'.$xacnhan_tam.'">Xác nhận</a> ||

                <a href="'.$huy_tam.'">Hủy</a>
               </td>
                </tr>';;
        }
        ?>
        <!-- <tr>
            <td>1</td>
            <td>DH001</td>
            <td>2023-11-08</td>
            <td>$100.00</td>
            <td>Đang xác nhận</td>
            <td><a href="index.php?act=chitietdh">Xem</a> </td>
            <td>
                <button class="btn btn-primary">Xác nhận</button>
                <button class="btn btn-danger">Hủy</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>DH002</td>
            <td>2023-11-09</td>
            <td>$80.00</td>
            <td>Đang xác nhận</td>
            <td><a href="index.php?act=chitietdh">Xem</a> </td>
            <td>
                <button class="btn btn-primary">Xác nhận</button>
                <button class="btn btn-danger">Hủy</button>
            </td>
        </tr> -->
        <!-- Thêm các đơn hàng khác đang xác nhận ở đây -->
    </tbody>
</table>
