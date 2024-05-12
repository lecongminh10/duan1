<?php
/*



function delete_danhmuc($id){
    $sql= "delete from danhmuc where id=".$id;
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql= "SELECT * FROM danhmuc order by id desc";

    $listdanhmuc= pdo_query($sql);
    return  $listdanhmuc; // trả về danh sách danh mục
}

function loadone_danhmuc($id){
    $sql= "SELECT * FROM danhmuc WHERE id=".$id;
    $dm= pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai){
    $sql= "UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
*/
function insert_danhmuc($ten_dm , $mota_dm, $anh_dm){
    $sql= "INSERT INTO danhmuc_sanpham (ten_dm, mota_dm, anh_dm) VALUES ('$ten_dm' , '$mota_dm', '$anh_dm')";
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql= "SELECT * FROM danhmuc_sanpham WHERE trangthai= 0  
     order by id_dm desc";

    $listdanhmuc= pdo_query($sql);
    return  $listdanhmuc; // trả về danh sách danh mục
}
function loadall_danhmuc_thungrac(){
    $sql= "SELECT * FROM danhmuc_sanpham WHERE trangthai= 1 
     order by id_dm desc";

    $listdanhmuc= pdo_query($sql);
    return  $listdanhmuc; // trả về danh sách danh mục
}
function delete_danhmuc($id_dm){
    $sql= "delete from danhmuc_sanpham where id_dm=".$id_dm;
    pdo_execute($sql);
}
// 1 là cho vào thùng rác
function xoa_tam_dm($id_dm){
    $sql= "UPDATE danhmuc_sanpham SET trangthai= 1 WHERE id_dm=".$id_dm;
    pdo_execute($sql);
}
// 0 là hiện tại 
function khoi_phuc_dm($id_dm){
    $sql= "UPDATE danhmuc_sanpham SET trangthai= 0 WHERE id_dm=".$id_dm;
    pdo_execute($sql);
}
// cập nhập danh mục 
function update_danhmuc($id_dm, $ten_dm, $mota_dm, $anh_dm){
    if ($anh_dm != "") {
        $sql = "UPDATE danhmuc_sanpham SET ten_dm='".$ten_dm."',mota_dm='".$mota_dm."', anh_dm='" . $anh_dm . "' WHERE id_dm=" . $id_dm;
    } else {
        $sql = "UPDATE danhmuc_sanpham SET ten_dm='".$ten_dm."',mota_dm='".$mota_dm."'  WHERE id_dm=" . $id_dm;
    }
    
    pdo_execute($sql);
}
function loadone_danhmuc($id_dm){
    $sql= "SELECT * FROM danhmuc_sanpham WHERE  id_dm=".$id_dm;
    $dm= pdo_query_one($sql);
    return $dm;
}
function load_ten_dm($id_dm){
    if($id_dm>0){
        $sql="SELECT * FROM danhmuc_sanpham WHERE id_dm=".$id_dm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $ten_dm;
    }
}

?>