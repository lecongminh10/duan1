<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Content Row -->
<div class="row">
<div class="container py-4" >
    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách danh mục  </h1>

</div>

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
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Ảnh </th>
                <th>Cập nhật</th>
               
                <th>Xóa tạm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_dm as $list_dm):
            extract($list_dm);
             $xoa_dm_tam= "index.php?act=xoa_dm_tam&id_dm=".$id_dm;
             $sua_dm= "index.php?act=sua_dm&id_dm=".$id_dm;
              $hinhpath= "../admin/view/upload/".$anh_dm;
              
             ?>
            <tr>
                <td><?=$id_dm?></td>
                <td><?=$ten_dm?></td>
                <td><?=$mota_dm?></td>
                <td><img src="<?=$hinhpath?>" alt=" anh sản phẩm " style="width:70px ; height:70px"></td>
                <td><a href="<?=$sua_dm?>"><button class="btn btn-warning">Cập nhật</button></a></td>
                <td><a href="<?=$xoa_dm_tam?>"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="container py-4" >
    <a href="index.php?act=add_dm"class="btn btn-primary">Thêm danh mục</a>
    <a href="index.php?act=xoa_dm" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
  </svg>    
    Thùng Rác </a>
    </div>
</div>
</div>
        </div>
<!-- /.container-fluid -->