<?php extract($chitietsanpham);

$tam= "index.php?act=themchitietsanpham&id_sp=".$id_sp;
$tam2= "index.php?act=sanphambienthe&id_sp=".$id_sp;
$hinhpath= "../admin/view/upload/".$anh_sp;
?>

<div class="container">
<div class="container py-4" >
    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-end mb-4">
            <a  style="margin: 10px 7px;" href="<?=$tam?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Cập nhật chi tiết sản phẩm </a>
            <a  style="margin: 10px 7px;" href="index.php?act=danhsach_sp" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Danh sách sản phẩm  </a>
            <a  style="margin: 10px 7px;" href="<?=$tam2?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i>Thêm biến thể sản phẩm </a>
</div>

     <div class="row">
            <div class="col-md-6">

            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="anh_sp" src="<?= $hinhpath ?>" class="d-block w-100" alt="Ảnh sản phẩm 1" style="width:400px; height:400px">
        </div>
    </div>

    <div class="d-flex">
        <img class="anh_sp_bienthe"  src="<?= $hinhpath ?>"  alt="" style="width:70px; height:70px">
        <?php foreach($sanpham_bienthe as $key => $value ){ ?>
            <img class="anh_sp_bienthe" src="../admin/view/upload/<?=$value['anh_sp_bienthe']?>" alt="" style="width:70px; height:70px">
        <?php } ?>
    </div>
</div>
                
            </div>
            <div class="col-md-6" style="color:#0033FF; font-size:medium">
                <p >ID sản phẩm:<span  style="color:#888888;"><?=$id_sp?></span></p>
                <p>Tên sản phẩm: <span  style="color:#888888;"> <?=$ten_sp?></span> </p>
                <p>Giá gốc: <span  style="color:#888888;"> <?=$gia_goc?></span></p>
                <p>Giá khuyến mãi:<span  style="color:#888888;">  <?=$gia_khuyen_mai?></span></p>
                <p>Thương hiệu:  <span  style="color:#888888;"><?=$thuong_hieu?></span></p>
                <p>Số lượng tồn kho: <span  style="color:#888888;"> <?=$soluongtonkho?></span></p>
                <p>Tính năng kỹ thuật:<span  style="color:#888888;"> <?=$tinh_nang_ky_thuat?></span></p>
                <p>Khuyến mãi: <span  style="color:#888888;"> <?=$khuyen_mai?></span></p>

                <p>Màu sắc:
                    
                <span  style="color:#888888;"> <?=$mau_sac?> ,
            
            
                <?php foreach( $sanpham_bienthe as $key => $value ) {

                        echo $value['mau_sac'].',';

                } ?>
                 </span></p>
                <p>Bộ nhớ:<span  style="color:#888888;">  <?=$bo_nho?> ,
                <?php foreach( $sanpham_bienthe as $key => $value ) {

                     echo $value['dungluong'].',';

                   } ?>
            </span></p>
                <p>Mô tả sản phẩm:    <span  style="color:#888888;">  <?=$mota_sp?></span></p>
                <p>Lượt xem: <span  style="color:#888888;"> <?=$luotxem?></span></p>
                <p>Lượt mua:<span  style="color:#888888;">  <?=$luotmua?></span></p>
            </div>
        </div>
 
   

    </div>

<!--  Bình luận từng sản phẩm -->
<div class="container mt-5">
        <div class="d-flex justify-content-between">
            <div class="">
                <h2 class="mb-4">Bảng Bình Luận</h2>
            </div>
            <div class="">
              
                <h5 class="mb-4">    
                <a href="index.php?act=danhsachbl_rac" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
  </svg>
                
                Thùng rác</a></h5>
            </div>
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
                    <th scope="col">STT</th>
                    <th scope="col">Tên Người Dùng</th>
                    <th scope="col">Nội Dung</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Ngày Bình Luận</th>
                    <th scope="col">Ảnh Sản Phẩm</th>
                    <th scope="col">Chức năng </th></th>
                </tr>
            </thead>
            <tbody>
                 <?php foreach($danhsach_bl as $danhsach_bl): extract($danhsach_bl); 
                 $tam= "index.php?act=xoatam_bl&id_bl=".$id_bl;
                 ?>
                <tr>
                    <th scope="row"><?=$id_bl?></th>
                    <td><?=$ten?></td>
                    <td><?=$noidung_bl?></td>
                    <td><?=$ten_sp?></td>
                    <td><?=$ngaybinhluan?></td>
                    <td><img src="../upload/<?=$anh_bl?>" alt="sản phẩm người dùng "></td>
                    <th> <a href="<?=$tam?>" class="btn btn-primary">Xóa </a></th>
                </tr>   
                <?php endforeach ?>  
            </tbody>
        </table>
    </div>


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var anhSpBientheList = document.querySelectorAll(".anh_sp_bienthe");
        var anhSp = document.querySelector(".anh_sp");

        anhSpBientheList.forEach(function (anhSpBienthe) {
            anhSpBienthe.addEventListener("click", function () {
                // Thay đổi src của ảnh chính (class="anh_sp") thành src của ảnh được click
                anhSp.src = this.src;
            });
        });
    });
</script>