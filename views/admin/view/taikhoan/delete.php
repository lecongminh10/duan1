<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Content Row -->
<div class="row">

<div class="container py-4" >
    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thùng Rác</h1>
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

<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Điện Thoại</th>
            <th>Vai Trò</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listtaikhoan as $taikhoan) {
            extract($taikhoan);
            $suatk = "index.php?act=khoiphuc_tk&id=" . $id;
            $xoatk = "index.php?act=xoa_tk&id=" . $id;
            if($chucvu==1) {
                $tam="Admin";
            }else{
                $tam= "Người dùng";
            }
            echo '
                        <tr>
                        
                        <td>' . $id . '</td>
                        <td>' . $ten . '</td>
                        <td>' . $email . '</td>
                        <td>' . $diachi . '</td>
                        <td>' . $sodienthoai . '</td>
                        <td>' . $tam . '</td>
                        <td>
                        <td><a href="' . $suatk . '" class="btn btn-warning">Khôi phục</a> <a href="' . $xoatk . '" class="btn btn-danger">Xóa</a></td>
                        </td>
                        </tr>
                        
                        ';
        } ?>
    </tbody>
</table>
    <a href="index.php?act=them_tk"class="btn btn-warning mx-4">Thêm tài khoản </a> 
    <a href="index.php?act=dskh" class="btn btn-primary">Danh sách tài khoản </a>
    </div>

    </div>
</div>
