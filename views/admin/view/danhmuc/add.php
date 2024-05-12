<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">

        <div class="container py-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Thêm danh mục </h1>
                
            </div>
            <?php

            if (isset($message)) {
                echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
            </div>";
            }
            ?>
            <form action="index.php?act=add_dm" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="ten_dm">Tên danh mục : </label>
                    <input type="text" class="form-control" name="ten_dm" id="ten_dm" required>
                </div>
                <div class="form-group">
                    <label for="mota_dm">Mô tả danh mục : </label>
                    <input type="text" class="form-control" name="mota_dm" id="mota_dm" required>
                </div>
                <div class="mb-3">
                    <label for="anh_dm" class="form-label">Ảnh Sản Phẩm</label>
                    <input type="file" class="form-control" id="anh_dm" name="anh_dm" required>
                </div>


                <input type="submit" class="btn btn-primary" name="add_dm" value="Thêm Danh Mục">
                <a href="index.php?act=list_dm" class="btn btn-primary">Danh sách Danh Mục</a>


            </form>
        </div>

    </div>
</div>

<!-- /.container-fluid -->