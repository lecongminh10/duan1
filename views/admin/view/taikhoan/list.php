<!-- Begin Page Content -->
<div class="container-fluid">


<?php

if (isset($message)) {
    echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
        </div>";
}
?>


<!-- Content Row -->
<div class="row">


    <!-- Page Heading -->
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách tài khoản  </h1>
    <a href="index.php?act=them_tk"class="btn btn-warning mx-4">Thêm tài khoản </a> 
    <a href="index.php?act=delete_tk" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
    
    Thùng Rác </a>
</div>



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
            $suatk = "index.php?act=suatk&id=" . $id;
            $xoatk = "index.php?act=xoa_tam_tk&id=" . $id;
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
                        <td><a href="' . $suatk . '" class="btn btn-warning">Cập nhật</a> <a href="' . $xoatk . '" class="btn btn-danger">Xóa</a></td>
                        </td>
                        </tr>
                        
                        ';
        } ?>
    </tbody>
</table>

    </div>

    </div>

