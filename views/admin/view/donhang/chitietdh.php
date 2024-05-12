<div class="container">
    <h4 class="text-center">Chi tiết đơn hàng : <?php echo $ma_hd?></h4>

    <?php
    foreach ($chitiethoadon as $index => $value) { ?>
        <div class="mb-4">
            <p><strong>Tên Người Dùng:</strong> <?= $value['ten'] ?></p>
            <p><strong>Địa chỉ:</strong> <?= $value['diachi'] ?></p>
            <p><strong>Số điện thoại :</strong> <?= $value['sodienthoai'] ?></p>
            <p><strong>Phí vận chuyển :</strong> <?= $value['vanchuyen'] ?> VND</p>
            <p><strong>Tổng tiền thanh toán  :</strong> <?= $value['tongtien'] ?> VND</p>
            <p><strong>Ghi chú:</strong> <?= $value['ghichu'] ?></p>

            <table class="table table-striped table-bordered mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn Giá</th>
                        <th>Thành tiền</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $value['ten_sp'] ?></td>
                        <td><img style="max-width: 120px; max-height: 120px" src="view/upload/<?= $value['anh_sp'] ?>" alt=""></td>
                        <td><?= $value['soluong'] ?></td>
                        <td><?= $value['dongia'] ?></td>
                        <td><?= $value['thanhtien'] ?></td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    <?php } ?>

    <div class="container py-4">
        <a href="index.php?act=listdh" class="btn btn-primary">Trở về</a>
    </div>
</div>
