<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h3 class=" text-center-800 ">Danh sách sản phẩm  </h3>
<div class="d-sm-flex align-items-center justify-content-end mb-4">
        
    
            <a href="index.php?act=add_sp "class="btn btn-primary m-2">Thêm sản phẩm </a>
            <a href="index.php?act=delete_sp" class="btn btn-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
  </svg>
            Thùng Rác </a>
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
                        <th>Cập nhật</th>
                        <th>Xóa sản phẩm </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($danhsach_sp as $danhsach_sp):extract($danhsach_sp);
                    $chitietsp="index.php?act=chitietsp&id_sp=".$id_sp;
                    $xoa_sp= "index.php?act=xoa_tam_sp&id_sp=".$id_sp;
                    $sua_sp= "index.php?act=sua_sp&id_sp=".$id_sp;
                    $hinhpath= "../admin/view/upload/".$anh_sp;
                    ?>
                    <tr>
                        <td><?=$id_sp?></td>
                        <td><?=$ten_sp?></td>
                        <td><img src="<?=$hinhpath?>" alt="Nophoto" style="width:70px ; height:70px"></td>
                        <td><?=$gia_goc?></td>
                        <td><?=$soluongtonkho?></td>
                        <td><?=$luotxem?></td>
                        <td><?=$luotmua?></td>
                        <th><a href="<?=$chitietsp?>" class="btn btn-primary">Xem</a></th>
                        <th><a href="<?= $sua_sp?>" class="btn btn-primary">Sửa</a></th>
                        <th><a href="<?= $xoa_sp?>" class="btn btn-primary">xóa</a></th>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->