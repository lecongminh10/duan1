<?php 


    function loadall_binhluan(){
        $sql = " SELECT binhluan.* , taikhoan.ten, sanpham.ten_sp FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.id_user = taikhoan.id
            LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id_sp
            WHERE binhluan.trangthai = 0
        ";
        $result =  pdo_query($sql);
        return $result;
     }
     function xoa_tam_bl($id_bl){
        $sql= "UPDATE binhluan SET trangthai= 1 WHERE id_bl=".$id_bl;
        pdo_execute($sql);
    }
    function loadall_binhluan_rac(){
        $sql = " SELECT binhluan.* , taikhoan.ten, sanpham.ten_sp FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.id_user = taikhoan.id
            LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id_sp
            WHERE binhluan.trangthai = 1
        ";
        $result =  pdo_query($sql);
        return $result;
     }
     function delete_binhluan($id_bl){
        $sql= "delete from binhluan where id_bl=".$id_bl;
        pdo_execute($sql);
    }
    function khoiphucbl($id_bl){
        $sql= "UPDATE binhluan SET trangthai= 0 WHERE id_bl=".$id_bl;
        pdo_execute($sql);
    }
     function loadall_binhluan_sp($id_sp){
        $sql = " SELECT binhluan.* , taikhoan.ten, sanpham.ten_sp FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.id_user = taikhoan.id
            LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id_sp
            WHERE binhluan.trangthai = 0 and  binhluan.id_sp like ".$id_sp;
        ;
        $result =  pdo_query($sql);
        return $result;
     }

     // đến bình luận + sao 

     function dem_binhluan($id_sp){

        $sql = "SELECT  count(binhluan.id_sp) as soluongbinhluansanpham FROM binhluan
        WHERE id_sp=".$id_sp ;

        $result =  pdo_query($sql);
       return $result;
     }
     // thêm bình luận 
    function insert_binhluan($noidung_bl,$sao,$anh_bl,$id_sp,$id_user){
        $sql = " INSERT INTO binhluan (noidung_bl, sao, anh_bl, id_sp, id_user) 
            VALUES ('$noidung_bl','$sao','$anh_bl', '$id_sp', '$id_user');
        ";
        pdo_execute($sql);
    }

    // function loadall_binhluan_home(){
    //     $sql = "
    //         SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan ,sanpham.name FROM `binhluan` 
    //         LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
    //         LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
    //         WHERE 1;
    //     ";
    //     $result =  pdo_query($sql);
    //     return $result;
    // }

    // function delete_binhluan($id){
    //     $sql= "delete from binhluan where id=".$id;
    //     pdo_execute($sql);
    // }

?>