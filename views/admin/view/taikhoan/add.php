<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Content Row -->
<div class="row">

<div class="container py-4" >
    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm tài khoản  </h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
        <?php
    
        if (isset($message)) {
            echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
            </div>";
        }
        ?>
    <form action="index.php?act=them_tk" method="POST">
        <div class="mb-3">
            <label for="ten" class="form-label">Tên</label>
            <input type="text" class="form-control" id="ten" name="ten" required>
        </div>
        <div class="mb-3">
            <label for="matkhau" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="matkhau" name="matkhau" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="diachi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="diachi" name="diachi">
        </div>
        <div class="mb-3">
            <label for="sodienthoai" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="sodienthoai" name="sodienthoai">
        </div>
        <div class="mb-3">
            <label for="chucvu" class="form-label">Chức vụ</label>
            <select class="form-control" id="chucvu" name="chucvu">
                <option value="0">Người dùng</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Thêm Tài Khoản" name="them_tk">
        <a href="index.php?act=dskh"  class="btn btn-primary">Danh sách tài khoản </a>
    </form>

    </div>

    </div>
</div>

<!-- /.container-fluid -->




