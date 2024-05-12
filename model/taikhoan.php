<?php

function  insert_taikhoan($ten,$matkhau,$email,$diachi,$sodienthoai,$chucvu){
    $sql =" INSERT INTO  taikhoan (ten, matkhau, email, diachi, sodienthoai, chucvu) VALUE ('$ten','$matkhau','$email','$diachi','$sodienthoai','$chucvu')";

    pdo_execute($sql);
}


function loadall_taikhoan(){
    $sql= "SELECT * FROM taikhoan WHERE trangthai=0 order by id desc";
    $listtaikhoan= pdo_query($sql);
    return  $listtaikhoan; // trả về danh sách danh mục
}
function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}
function loadall_taikhoan_rac(){
    $sql= "SELECT * FROM taikhoan WHERE trangthai=1 order by id desc";
    $listtaikhoan= pdo_query($sql);
    return  $listtaikhoan; // trả về danh sách danh mục
}
function update_taikhoan($id, $ten, $email, $diachi, $sodienthoai, $chucvu){
    $sql= "UPDATE taikhoan SET ten='".$ten."',email='".$email."',diachi='".$diachi."',sodienthoai='".$sodienthoai."',chucvu='".$chucvu."' WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql= "SELECT * FROM taikhoan WHERE  id=".$id;
    $tk= pdo_query_one($sql);
    return $tk;
}
function xoa_tam_tk($id){
    $sql= "UPDATE taikhoan SET trangthai= 1 WHERE id=".$id;
    pdo_execute($sql);
}
function khoiphuc_tk($id){
    $sql= "UPDATE taikhoan SET trangthai= 0 WHERE id=".$id;
    pdo_execute($sql);
}
// check tài khoản
function checkRole(){
    if(isset($_SESSION['user']) && ($_SESSION['user']['chucvu']) == "1"){
        header("location:admin/index.php");
    }
    else{
        header("location:../index.php");
    }
}
function checkAccount($email, $password) {
    $sql = "select * from taikhoan where email = '$email' and matkhau = '$password'";
    $result = pdo_query_one($sql);
    return $result;
}
function insertaccount($ten, $email , $pass){
    $sql ="INSERT INTO  taikhoan (ten, email , matkhau, chucvu) value ('$ten' , '$email' , '$pass','0') ";
    pdo_execute($sql);
}
function update_taikhoan_user($id, $ten,$matkhau ,$email, $diachi, $sodienthoai){
    $sql= "UPDATE taikhoan SET ten='".$ten."',matkhau='".$matkhau."',email='".$email."',diachi='".$diachi."',sodienthoai='".$sodienthoai."' WHERE id=".$id;
    pdo_execute($sql);
}

function loadtaikhoan($id){
    $sql= "SELECT * FROM  taikhoan WHERE id=".$id;
    $result = pdo_query($sql);
    return $result;
}


?>