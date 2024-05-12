<?php  
    session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    checkRole();
?>