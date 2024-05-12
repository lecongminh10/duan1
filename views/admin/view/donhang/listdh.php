<h4 class="text-center ">Danh sách đơn hàng </h4>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã đơn hàng </th>
            <th>Ngày Đặt Đơn </th>
            <th>Phí vận chuyển </th>
            <th>Tổng hóa đơn </th>

            <th>Trạng thái</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listhoadon as $hoadon) {
            extract($hoadon);
           
            $chitiethoadon = "index.php?act=chitiethd&ma_hd=" .$ma_hd;
            if($xuly==0){
                $tam= "Chờ xác nhận ";
            }
            else if($xuly== 1){
                    $tam= "Đã Xác Nhận ";
            }
            else if($xuly== 2){
                $tam= "Đang giao ";
            }
            else if($xuly== 3){

                $tam= "Hoàn thành";
            }
            else{
                $tam= "Đã hủy";
            }
           
            echo '<tr>
                <td>' . $id_hoadon . '</td>
                <td>' . $ma_hd . '</td>
                <td>' . $ngaydatdon. '</td>
                <td>' . $vanchuyen . '</td>
                
                <td>' . $tongtien. '</td>
             
                <td>' . $tam . '</td>
                
                <td><a href="' . $chitiethoadon . '"><button class="btn btn-warning">Xem đơn hàng</button></a></td>
                </tr>';

        }
        ?>
    </tbody>
</table>