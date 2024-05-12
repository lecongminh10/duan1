<!-- Begin Page Content -->
<div class="container-fluid">



<!-- Content Row -->
<div class="row">
<div class="container py-4" >
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thùng Rác </h1>
   
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
                <th>Ảnh</th>
                <th>Cập nhật</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_dm as $list_dm){
            extract($list_dm);
             $xoa_dm= "index.php?act=xoa_dm&id_dm=".$id_dm;
             $khoiphuc_dm= "index.php?act=khoiphuc_dm_tam&id_dm=".$id_dm;
             $hinhpath= "../admin/view/upload/".$anh_dm;
         
           echo' <tr>
                <td>'.$id_dm.'</td>
                <td>'.$ten_dm.'</td>
                <td>'.$mota_dm.'</td>
                <td><img src="'.$hinhpath.'" alt=" anh sản phẩm " style="width:70px ; height:70px"> </td>
                <td><a href="'. $khoiphuc_dm.'"><button class="btn btn-warning">Khôi phục </button></a></td>
                <td><a href="'.$xoa_dm.'"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>

                ';

            }?>
        </tbody>
    </table>

    <div class="container py-4" >
    <a href="index.php?act=add_dm"class="btn btn-primary">Thêm danh mục</a>
    <a href="index.php?act=list_dm"class="btn btn-primary">Danh sách danh mục</a>

    </div>

    </div>
</div>
</div>
