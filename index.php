<?php

 session_start();

if (!isset($_SESSION['cart'])) {
   $_SESSION['cart'] = array();
}
if(!isset($_SESSION['like'])) {
$_SESSION['like']= array();
}

if(isset($_GET["delcart"]) && $_GET["delcart"] ==1){
   unset($_SESSION['cart']);
   header('location:index.php?act=giohang');
}
 include "model/pdo.php";
 include "model/taikhoan.php";
 
 include "model/danhmuc.php";
 include "model/sanpham.php";
 include "model/hoadon.php";
 include "model/binhluan.php";
 include "model/blog.php";
 $list_thinhhanh=loadall_sanpham_thinhhanh() ;
 $list_dm=loadall_danhmuc();
 $list_sp_danhsach=loadall_sanpham_dm($kyw="",$id_dm="");
 $list_sp_home=loadall_sanpham_home() ;
 $dstop10 = loadall_sanpham_top10();
 include "views/header.php"; 
 if(isset($_GET['act']) && ($_GET['act'] !="")){
    $act= $_GET['act'];
    switch($act){



      // case 'sanpham':
      //    $list_dm = loadall_danhmuc();
     
      //    // Move these lines up before calling loadall_sanpham_dm
      //    $id_dm = isset($_GET['id_dm']) && !empty($_GET['id_dm']) ? $_GET['id_dm'] : 0;
      //    $ten_dm = load_ten_dm($id_dm);
     
      //    if (isset($_GET['kyw']) && !empty($_GET['kyw'])) {
      //        $kyw = $_GET['kyw'];
      //    }
     
      //    $dssp = loadall_sanpham_dm($kyw, $id_dm);
      //    include 'views/sanpham/list.php';
      //    break;
      case 'sanpham':
         
         $list_dm = loadall_danhmuc();
     
         // Xác định id_dm và ten_dm
         $id_dm = isset($_GET['id_dm']) && !empty($_GET['id_dm']) ? $_GET['id_dm'] : 0;
         $ten_dm = load_ten_dm($id_dm);
     
         // Xác định kyw
         $kyw = isset($_GET['kyw']) && !empty($_GET['kyw']) ? $_GET['kyw'] : '';
     
         // Xác định trang hiện tại
         $cr_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
     
         // Load dữ liệu sản phẩm cho trang hiện tại
         $limit = 9;
         $offset = ($cr_page - 1) * $limit;
         $dssp = loadall_sanpham_dm($kyw, $id_dm, $offset, $limit);
     
         // Tính tổng số trang
         $total = count(loadall_sanpham_dm($kyw, $id_dm));
         $num_pages = ceil($total / $limit);
     
         // Include view
         include 'views/sanpham/list.php';
         break;
     
     
      case "chitietsanpham":
         if(isset($_GET["id_sp"]) && $_GET["id_sp"] != ""){
         $id_sp= $_GET["id_sp"];
         $sanphamchitiet=sanpham_chitietsanpham($id_sp);
         loadone_sanpham_luotxem($id_sp);
         $listbinh_luan=loadall_binhluan_sp($id_sp);
         $dem= dem_binhluan($id_sp);
         $sanpham_bienthe=load_sp_bienthe($id_sp);
         }
         include "views/sanpham/chitietsanpham.php";
      break;
      
        case 'giohang':  
        include 'views/sanpham/giohang.php';
        break;

         case 'updategiohang':
         include 'views/sanpham/giohang/update.php';
         break;


         
     
        case 'checkout':

         include "views/sanpham/checkout.php";
        break;
      
        case "dathang":

         $id= $_SESSION['user']['id'];
         if(isset($_POST['thanhtoan']) && ($_POST['thanhtoan']) ){
            $ghichu= $_POST['chuthich'];
            $ma_dh= $_POST['ma_hd'];
            $id_user= $_SESSION['user']['id'];
              $vanchuyen= $_POST['phivanchuyen'];
            $Alltongtien= $_POST['tongtienthanhtoan'];

            insert_hoadon($ma_dh, $vanchuyen,$Alltongtien);
           

            if(isset( $_SESSION['total_price_after_discount'])){
               unset( $_SESSION['total_price_after_discount']);
            }

        
            for($i=0; $i < sizeof($_SESSION['cart']); $i++)
        {
            $id_sanpham= $_SESSION['cart'][$i]['id_sp'];
            $dongia= $_SESSION['cart'][$i]['gia_goc'];
            $thanhtien= $_SESSION['cart'][$i]['gia_goc'] * $_SESSION['cart'][$i]['quantity'];
            $mota_dh= $_SESSION['cart'][$i]['ten_sp'];
            $soluong= $_SESSION['cart'][$i]['quantity'];
           
            insert_chitethoadon($ma_dh,$id_sanpham,$id_user,$soluong,$dongia,$thanhtien,$ghichu);
        }
        if(isset($_SESSION['cart'])){
         unset($_SESSION['cart']);
      }
      if(isset( $_SESSION['total_price_after_discount'])){
         unset( $_SESSION['total_price_after_discount']);
      }
        }
            $danhsachhoadon= load_hoadon($id);
        include "views/sanpham/giohang/dathang.php";
        break;
        // xem đơn hàng 
        case "xemdonhang":

         if(isset($_GET['ma_hd']) && ($_GET['ma_hd'])){
            $ma_hd= $_GET['ma_hd'];
            $chitietdonhang= load_hoadon_chitiet($ma_hd);

         }
         include  'views/sanpham/giohang/xemdonhang.php';
         break;

         // hủy đơn hàng 
         case 'huydonhang':
            if(isset($_GET['id_chitiethoadon']) && ($_GET['id_chitiethoadon'])){
               $id_chitiethoadon= $_GET['id_chitiethoadon'];
               $chitietsanpham=loadhoadonchitiet($id_chitiethoadon);
            }
   
         include  'views/sanpham/binhluan/huydonhang.php';
         break;
        case 'hoso':
            $id =$_SESSION['user']['id'];
            $listtaikhoan=loadtaikhoan($id);

         include 'views/hoso/index.php';
         break;
        case "capnhathoso":
         if(isset($_POST["luuthaydoi"]) && $_POST["luuthaydoi"] !==""){
            $ten= $_POST["ten"];
            $email= $_POST['email'];
            $diachi= $_POST['diachi'];
            $sodienthoai= $_POST['sodienthoai'];
            $matkhau=$_POST['matkhau'];
            $matkhaumoi= $_POST['matkhaumoi'];
            $nhaplaimatkhaumoi= $_POST['nhaplaimatkhaumoi'];
            $chucvu=0;
           $id= $_SESSION['user']['id'];
            if(($_SESSION['user']['matkhau'] ==$matkhau) && ($matkhaumoi ==$nhaplaimatkhaumoi)){
               update_taikhoan_user($id, $ten,$matkhaumoi ,$email, $diachi, $sodienthoai);
            }else{
               $matkhau=$_SESSION['user']['matkhau'];
               update_taikhoan_user($id, $ten,$matkhau ,$email, $diachi, $sodienthoai);
               
            }
         }
         $listtaikhoan=loadtaikhoan($id);
         include 'views/hoso/index.php';
         break;
            // gủi bình luận sản phẩm 
            // blog

         case 'danhgiadonhang':

            if(isset($_GET['id_sp']) && ($_GET['id_sp'])){
               $id_sp = $_GET['id_sp'];
               $chitietsanpham=sanpham_chitietsanpham($id_sp);
            }

         include 'views/sanpham/binhluan/danhgiasanpham.php';
         break;

         case 'guidanhgiasanpham':

            if(isset($_POST['gui']) && ($_POST['gui'])){
               $id_sp = $_POST['id_sp'];
               $id_user= $_SESSION['user']['id'];
               $noidung_bl= $_POST['noidung_bl'];
               $sao = $_POST['sao'];
               $anh_bl= $_FILES["anh_bl"]["name"];
               $target_dir= "views/admin/view/upload/";
               $target_file= $target_dir.basename($_FILES["anh_bl"]["name"]);
               if (move_uploaded_file($_FILES["anh_bl"]["tmp_name"], $target_file)) {
             
              } else {
                
              }
              insert_binhluan($noidung_bl,$sao,$anh_bl,$id_sp,$id_user) ;
            }

         include "views/sanpham/giohang.php";


         break;
            // blog
           case "blog":       
               $listbaiviet=loadall_baiviet(); 
              
            include "views/sanpham/blog.php";
            break;

         case 'yeuthich':

         include 'views/sanpham/wishlist.php';

         break;
           
    }
 }
 else{
 include "views/home.php";
 }
include "views/footer.php";




?>