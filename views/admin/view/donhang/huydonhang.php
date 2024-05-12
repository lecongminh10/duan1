<h4 class="text-center ">Đơn hàng đã bị hủy</h4>
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
            $xacnhan_tam= "index.php?act=lido_huydonhang&ma_hd=".$ma_hd;
           
            if ($xuly== 4) {
                $tam = "Đơn hàng đã bị hủy ";
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
                <a href="'.$xacnhan_tam.'">Xem lí do </a> 

              
               </td>
                </tr>';;
        }
        ?>

    </tbody>
</table>
