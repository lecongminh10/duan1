<?php

session_start();
session_destroy();

// Điều hướng người dùng đến trang đăng nhập
header('Location:../../index.php'); // Thay đổi đường dẫn dựa trên trang bạn muốn người dùng được điều hướng đến sau khi đăng xuất
exit();
?>
