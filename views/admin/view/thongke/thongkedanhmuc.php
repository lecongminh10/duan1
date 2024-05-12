<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <div class="">
            <h2 class="mb-4">Thống Kê Danh Mục</h2>
        </div>
        <!-- <div class="">

            <h5 class="mb-4">
                <a href="index.php?act=danhsachbl_rac" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                        <path
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                    </svg>

                    Thùng rác</a>
            </h5>
        </div> -->
    </div>

    <?php

    if (isset($message)) {
        echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
            </div>";
    }
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Mã Loại</th>
                <th scope="col">Tên Loại</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Giá Nhỏ Nhất</th>
                <th scope="col">Giá Lớn Nhất</th>
                <th scope="col">Giá Trung Bình</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($thongkedanhmuc as $tkdm):
                extract($tkdm);
                // $tam = "index.php?act=xoatam_bl&id_bl=" . $id_bl;
                ?>
                <tr>
                    <th scope="row">
                        <?= $id_dm ?> 
                    </th>
                    <td>
                        <?= $ten_dm ?>
                    </td>
                    <td>
                        <?= $soluong ?>
                    </td>
                    <td>
                        <?= number_format($gia_min, 3) ?> VNĐ
                    </td>
                    <td>
                        <?=  number_format($gia_max,3) ?> VNĐ
                    </td>
                    <td>
                        <?php echo number_format($gia_avg, 3) ?> VNĐ
                    </td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>