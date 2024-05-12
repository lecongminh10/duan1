<?php extract($chitietsanpham);
$hinhpath= "../admin/view/upload/".$anh_sp;

?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class=" text-center-800 ">Thêm chi tiết sản phẩm  </h3>
    <div class="d-sm-flex align-items-center justify-content-end mb-4">
            <a  style="margin: 10px 7px;" href="index.php?act=danhsach_sp" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Danh sách sản phẩm  </a>
            <a  style="margin: 10px 7px;" href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Thùng rác </a>
            <a  style="margin: 10px 7px;" href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Xuat file</a>
</div>

</div>
<?php

if (isset($message)) {
echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
       <button type='button' class='close' data-dismiss='alert'>&times;</button>
   </div>";
 }
?>
<div class="row">

            <div class="col-md-6">

                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                    <div class="carousel-item active">
                            <img src="<?= $hinhpath ?>" class="d-block w-100" alt="Ảnh sản phẩm 1">
                        
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                   <!-- <a href="index.php?act=list_sp" class="btn btn-primary">Thêm  ảnh</a>
                   <a href="index.php?act=list_sp" class="btn btn-primary">Abmul ảnh </a> -->
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
                <p>Màu sắc: <span  style="color:#888888;"> <?=$mau_sac?></span></p>
                <p>Bộ nhớ:<span  style="color:#888888;">  <?=$bo_nho?></span></p>
                <p>Mô tả sản phẩm:    <span  style="color:#888888;">  <?=$mota_sp?></span></p>
                <p>Lượt xem: <span  style="color:#888888;"> <?=$luotxem?></span></p>
                <p>Lượt mua:<span  style="color:#888888;">  <?=$luotmua?></span></p>
            </div>
        </div>
 

<!-- Content Row -->
<div class="row">
    
    <div class="container py-4" >
        <form action="index.php?act=them_sp_bienthe&id_sp=<?=$id_sp?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_sp" value="<?=$id_sp?>">
        <div class="mb-3">
            <label for="mau_sac" class="form-label">Màu sắc </label>
            <input type="text" class="form-control" id="mau_sac" name="mau_sac" required>
        </div>
        <div class="mb-3">
            <label for="anh" class="form-label">Ảnh_Sp_ll</label>
            <input type="file" class="form-control" id="anh" name="anh_sp_bienthe">
        </div>
        <div class="mb-3">
            <label for="thuong_hieu" class="form-label">Dung lượng </label>
            <input type="text" class="form-control" id="thuong_hieu" name="dungluong" required>
        </div>

        <input type="submit" class="btn btn-primary" name="them_sp_bienthe" value="Thêm sản phẩm biến thể ">
         </form>

    </div>

</div>

</div>
<!-- /.container-fluid -->