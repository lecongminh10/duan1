<?php

// vì phần danh mục sẽ trả về mảng nên dùng is_array()


if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath= "../admin/view/upload/".$anh_sp;

?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class=" text-center-800 ">Cập nhật sản phẩm </h3>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="container py-4">
      <?php

      if (isset($message)) {
        echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
                         <button type='button' class='close' data-dismiss='alert'>&times;</button>
                     </div>";
      }
      ?>
      <form action="index.php?act=update_sp" method="POST" enctype="multipart/form-data">
        <div class="from-group">
          <label for="ten_dm">Danh mục hàng hóa</label>

          <select class="form-select form-control" aria-label="Default select example" name="id_dm">
            <option value="0" selected></option>
            <?php foreach ($list_dm as $value) {

              if ($id_dm == $value['id_dm'])
                $s = "selected";
              else
                $s = "";
              echo ' <option value="' . $value['id_dm'] . '" ' . $s . ' > ' . $value['ten_dm'] . '</option>';
            }
            ?>
          </select>

          <div class="mb-3">
            <label for="ten_sp" class="form-label">Tên Sản Phẩm</label>

            <input type="text" class="form-control" id="ten_sp" name="ten_sp" required value="<?= $ten_sp; ?>">
          </div>
          <div class="mb-3">
            <label for="anh_sp" class="form-label">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" id="anh_sp" name="anh_sp">
            <img src="<?=$hinhpath?>" alt="Nophoto" style="width:70px ; height:70px">
          </div>
          <div class="mb-3">
            <label for="gia_goc" class="form-label">Giá Gốc</label>

            <input type="text" class="form-control" id="gia_goc" name="gia_goc" required value="<?= $gia_goc; ?>">
          </div>
          <div class="mb-3">
            <label for="mota_sp" class="form-label">Mô tả Sản Phẩm</label>

            <textarea class="form-control" id="mota_sp" name="mota_sp" row="4" required> <?= $mota_sp; ?> </textarea>
          </div>
          <div class="mb-3">
            <label for="soluongtonkho" class="form-label">Số Lượng Tồn Kho</label>

            <input type="text" class="form-control" id="soluongtonkho" name="soluongtonkho" required
              value="<?= $soluongtonkho; ?>">
          </div>
          <input type="hidden" name="id_sp" value="<?= $id_sp; ?>">
<input type="submit" class="btn btn-primary" name="capnhap" value="Cập nhập Sản phẩm">
          <a href="index.php?act=danhsach_sp" class="btn btn-primary">Danh sách sản phẩm </a>
      </form>

    </div>

  </div>
</div>

<!-- /.container-fluid -->