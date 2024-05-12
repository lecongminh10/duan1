<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class=" text-center-800 ">Thùng Rác</h3>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">
<div class="container py-4" >
                <?php

                  if (isset($message)) {
               echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
                         <button type='button' class='close' data-dismiss='alert'>&times;</button>
                     </div>";
                   }
              ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm </th>
                        <th>Ảnh sản phẩm </th>
                        <th>Giá </th>
                        <th>Số lượng tồn kho </th>
                        <th>Lượt xem  </th>
                        <th>Lượt mua </th>
                        <th>Chi tiết </th>
                        <th>Chức năng </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($danhsach_sp as $danhsach_sp):extract($danhsach_sp);
                    $chitietsp="index.php?act=chitietsp&id_sp=".$id_sp;
                    $xoa_sp= "index.php?act=xoa_sp&id_sp=".$id_sp;
                    $khoiphuc_sp= "index.php?act=khoiphuc_sp&id_sp=".$id_sp;
                    ?>
                    <tr>
                        <td><?=$id_sp?></td>
                        <td><?=$ten_sp?></td>
                        <td><img src="../../view/upload/<?=$anh_sp?>"alt="nophoto"></td>
                        <td><?=$gia_goc?></td>
                        <td><?=$soluongtonkho?></td>
                        <td><?=$luotxem?></td>
                        <td><?=$luotmua?></td>
                        <th><a href="<?=$chitietsp?>" class="btn btn-primary">Xem</a></th>
                        <th><a href="<?=$khoiphuc_sp?>" class="btn btn-primary mx-2">Khôi phục </a><a href="<?= $xoa_sp?>" class="btn btn-primary">Xóa</a></th>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <a href="index.php?act=add_sp"class="btn btn-primary">Thêm sản phẩm </a>
            <a href="index.php?act=danhsach_sp" class="btn btn-primary">Danh sách sản phẩm  </a>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
    