<?php
session_start();

if(isset($_SESSION["user"])){

}else{
    header("location:dangnhap/index.php");
}

include "../../model/pdo.php";
include "../../model/danhmuc.php";
include "../../model/sanpham.php";
include "view/header.php";
include "view/boxleft.php";
include "view/topbar.php";
include "../../model/taikhoan.php";
include "../../model/thongke.php";
include "../../model/blog.php";
include "../../model/binhluan.php";
include "../../model/hoadon.php";
if(isset($_GET['act']) && ($_GET['act']!="")){
    $act= $_GET['act'];
    switch($act){

        case "them_tk":
                if(isset($_POST['them_tk']) && ($_POST['them_tk'])){
                    $ten = $_POST['ten'];
                    $matkhau = $_POST['matkhau'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $chucvu = $_POST['chucvu'];
                    insert_taikhoan($ten,$matkhau,$email,$diachi,$sodienthoai,$chucvu);
                    $message="Thêm tài khoản thành công ";
                }
                include "view/taikhoan/add.php";
        break;

        case "xoa_tam_tk":
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $id = $_GET['id'];
                    xoa_tam_tk($id);
                    $message = "Danh mục đã được cho vào thùng rác.";
                }
                $listtaikhoan = loadall_taikhoan();
                include "view/taikhoan/list.php";
        break;
            case "khoiphuc_tk":
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $id = $_GET['id'];
                      khoiphuc_tk($id);    
                    $message = "Danh mục đã được cho vào thùng rác.";
                }
                $listtaikhoan = loadall_taikhoan_rac();
                include "view/taikhoan/delete.php";
            break;
        case "delete_tk":
            $listtaikhoan = loadall_taikhoan_rac();
        include "view/taikhoan/delete.php";
        break;
        case "xoa_tk":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id = $_GET['id'];
                delete_taikhoan($id) ;
                $message = "Tài khoản đã được xóa.";
            }
            $listtaikhoan = loadall_taikhoan();
            include "view/taikhoan/list.php";
            break;
        
            case "add_dm":
                if (isset($_POST['add_dm']) && $_POST['add_dm']) {
                    $ten_dm = $_POST['ten_dm'];
                    $mota_dm = $_POST['mota_dm'];
                    $anh_dm = $_FILES["anh_dm"]["name"];
                    $target_dir = "view/upload/";
                    $target_file = $target_dir . basename($_FILES["anh_dm"]["name"]);
                    if (move_uploaded_file($_FILES["anh_dm"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    insert_danhmuc($ten_dm, $mota_dm, $anh_dm);
                    $message = "Danh mục đã được thêm thành công.";
                }
    
                include "view/danhmuc/add.php";
                break;
        case "list_sp":
            // $list_sp=loadall_sanpham($kyw="",$iddm=0);
              include "view/sanpham/list.php"; 
          break;
        case "add_sp":
            if(isset($_POST['them_moi_sp']) && ($_POST['them_moi_sp'])){

                $ten_sp = $_POST['ten_sp'];
             
                $gia_goc = $_POST['gia_goc'];
                $mota_sp = $_POST['mota_sp'];
                $soluongtonkho = $_POST['soluongtonkho'];
                $id_dm = $_POST['id_dm'];
                $anh_sp= $_FILES["anh_sp"]["name"];
                $target_dir= "view/upload/";
                $target_file= $target_dir.basename($_FILES["anh_sp"]["name"]);
                if (move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file)) {
               // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
               } else {
                 //echo "Sorry, there was an error uploading your file.";
               }
               insert_sanpham($ten_sp, $anh_sp, $gia_goc, $mota_sp, $soluongtonkho, $id_dm) ;
               
               $message = "Sản phẩm  đã được thêm thành công.";

            }
            $listdanhmuc=loadall_danhmuc();
            include "view/sanpham/add.php";
        break;

        case 'sua_sp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {

                $sanpham = loadone_sanpham($_GET['id_sp']);
            }

            $list_dm = loadall_danhmuc();
            include "view/sanpham/update.php";
            break;

        case 'update_sp':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_sp = $_POST['id_sp'];
                $ten_sp = $_POST['ten_sp'];
                $gia_goc = $_POST['gia_goc'];
                $mota_sp = $_POST['mota_sp'];
                $soluongtonkho = $_POST['soluongtonkho'];
                $id_dm = $_POST['id_dm'];
                $anh_sp = $_FILES["anh_sp"]["name"];
                $target_dir = "view/upload/";
                $target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
                if (move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
        
                update_sanpham($id_sp, $ten_sp, $anh_sp, $gia_goc, $mota_sp, $soluongtonkho, $id_dm);
                $message = "Sản phẩm đã được cập nhật .";

            }
            $list_dm = loadall_danhmuc();
            $sanpham = loadall_sanpham();
            include "view/sanpham/update.php";
            break;

            case "danhsach_sp":
                // Lấy giá trị từ khóa tìm kiếm từ URL
                $searchTerm = isset($_GET['search']) ? $_GET['search'] : "";
                
                // Gọi hàm loadall_sanpham để lấy danh sách sản phẩm dựa trên từ khóa tìm kiếm
                $danhsach_sp = loadall_sanpham($searchTerm);
                
                // Bao gồm view để hiển thị danh sách sản phẩm
                include "view/sanpham/list.php";
                break;
            
            
        case "xoa_dm_tam":
            if(isset($_GET['id_dm']) && $_GET['id_dm'] !=""){
                $id_dm =$_GET['id_dm'];
                xoa_tam_dm($id_dm);
                $message = "Danh mục đã được cho vào thùng rác.";
            }
        $list_dm=loadall_danhmuc();
     include "view/danhmuc/list.php";
      break;
      case "xoa_sp":
        if(isset($_GET['id_sp']) && $_GET['id_sp'] !=""){
            $id_sp =$_GET['id_sp'];
            delete_sanpham($id_sp) ;
            $message = "Danh mục đã được xóa.";
        }
        $danhsach_sp = loadall_sanpham_rac();
        include "view/sanpham/delete.php";
    break;
        case "list_dm":

            $list_dm=loadall_danhmuc();
            include "view/danhmuc/list.php"; 
        break;



        case "khoiphuc_dm_tam":
            if(isset($_GET['id_dm']) && $_GET['id_dm'] !=""){
                $id_dm =$_GET['id_dm'];
                khoi_phuc_dm($id_dm);
                $message = "Danh mục đã được khôi phục .";
            }
        $list_dm=loadall_danhmuc_thungrac();
        include "view/danhmuc/delete.php";
        break;
        case "xoa_dm":
            if(isset($_GET['id_dm']) && $_GET['id_dm'] !=""){
                $id_dm =$_GET['id_dm'];
                delete_danhmuc($id_dm);
                $message = "Danh mục đã được xóa.";
            }
        $list_dm=loadall_danhmuc_thungrac();
        include "view/danhmuc/delete.php";
        break;
        case 'sua_dm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {

                $list_dm = loadone_danhmuc($_GET['id_dm']);
            }
            include "view/danhmuc/update.php";
            break;

        case "update_dm":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_dm = $_POST['id_dm'];
                $ten_dm = $_POST['ten_dm'];
                $mota_dm = $_POST['mota_dm'];
                $anh_dm = $_FILES["anh_dm"]["name"];
                $target_dir = "view/upload/";
                $target_file = $target_dir . basename($_FILES["anh_dm"]["name"]);
                if (move_uploaded_file($_FILES["anh_dm"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }

                update_danhmuc($id_dm, $ten_dm, $mota_dm, $anh_dm);
                $message = "Danh mục đã được cập nhật .";

            }
            $list_dm = loadall_danhmuc();

            include "view/danhmuc/update.php";
            break;

       // danh sách bình luận 
        case "danhsachbl":
         $danhsach_bl = loadall_binhluan();
          include "view/binhluan/list.php";
         break;

         case "danhsachbl_rac":
         $danhsach_bl = loadall_binhluan_rac();
         include "view/binhluan/delete.php";
         break;

         case  "xoatam_bl":
            if(isset($_GET["id_bl"]) && ($_GET["id_bl"]) !==0){
                    $id_bl=$_GET["id_bl"] ;
                    xoa_tam_bl($id_bl) ;
                    $message = "Mục đã thêm vào thùng rác";
            }
            $danhsach_bl = loadall_binhluan();
            include "view/binhluan/list.php";
        break;
        case "khoiphucbl":
            if(isset($_GET["id_bl"]) && ($_GET["id_bl"]) !==0){
                $id_bl=$_GET["id_bl"] ;
                khoiphucbl($id_bl) ;
                $message = "Mục đã được khôi phục ";
        }
        $danhsach_bl = loadall_binhluan_rac();
        include "view/binhluan/delete.php";
        break;

        case "xoa_bl":

        if(isset($_GET["id_bl"]) && ($_GET["id_bl"]) !== 0){
            $id_bl=$_GET["id_bl"] ;
            delete_binhluan($id_bl) ;
        }
        $danhsach_bl = loadall_binhluan_rac();
        include "view/binhluan/delete.php";

        break;
        
         case "chitietsp":
        if(isset($_GET["id_sp"]) && ($_GET["id_sp"]!=="")){
            $id_sp=$_GET['id_sp'];
           $chitietsanpham= sanpham_chitietsanpham($id_sp);
           $danhsach_bl= loadall_binhluan_sp($id_sp);
          $sanpham_bienthe= load_sp_bienthe($id_sp);
        }
        include "view/sanpham/chitietsp.php";
        break;
        case "xoa_tam_sp":
            if(isset($_GET['id_sp']) && $_GET['id_sp'] !=""){
                $id_sp =$_GET['id_sp'];
                xoa_tam_sp($id_sp);
                $message = "Danh mục đã được cho vào thùng rác.";
            }
            $danhsach_sp = loadall_sanpham();
            include "view/sanpham/list.php";
        break;
        case "delete_sp":
            $danhsach_sp = loadall_sanpham_rac();
            include "view/sanpham/delete.php";
        break;
        case "khoiphuc_sp":
            if(isset($_GET['id_sp']) && $_GET['id_sp'] !=""){
                $id_sp =$_GET['id_sp'];
            khoiphuc_sp($id_sp) ;
            $message = "Danh mục đã khôi phục .";
        }
            $danhsach_sp = loadall_sanpham_rac();
            include "view/sanpham/delete.php";
        break;
        case "themchitietsanpham":
            if(isset($_GET["id_sp"]) && ($_GET["id_sp"]!=="")){
                $id_sp=$_GET['id_sp'];
               $chitietsanpham= sanpham_chitietsanpham($id_sp);
            }
            if(isset($_POST['themchitietsanpham']) && ($_POST['themchitietsanpham'])){
                $id_sp=$_POST['id_sp'];
                $gia_khuyen_mai= $_POST['gia_khuyen_mai'];
                $thuong_hieu= $_POST['thuong_hieu'];
                $tinh_nang_ky_thuat= $_POST['tinh_nang_ky_thuat'];
                $khuyen_mai= $_POST['khuyen_mai'];
                $mau_sac= $_POST['mau_sac'];
                $bo_nho= $_POST['bo_nho'];
                $anh= $_FILES["anh"]["name"];
                $target_dir= "view/upload/";
                $target_file= $target_dir.basename($_FILES["anh"]["name"]);
                if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
               // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
               } else {
                 //echo "Sorry, there was an error uploading your file.";
               }
                them_sp_chitiet($gia_khuyen_mai,$anh, $thuong_hieu, $tinh_nang_ky_thuat, $khuyen_mai, $mau_sac, $bo_nho, $id_sp);
                $message= 'Thêm chi tiết thành công ';
                $chitietsanpham= sanpham_chitietsanpham($id_sp);
            }
       
       
        include "view/sanpham/addctsp.php";
        break;
        case "listdh":
            $listhoadon=loadall_hoadon();
        include "view/donhang/listdh.php";
        break;
  
        case "chitiethd":
            if(isset($_GET['ma_hd']) && ($_GET['ma_hd'])){
                $ma_hd= $_GET['ma_hd'];
               $chitiethoadon=load_hoadon_chitiet($ma_hd);
              
            }
          
        include "view/donhang/chitietdh.php";
        break;
            // xử lí đơn hàng 
         case "xacnhandh":

             $listxacnhan=loadall_dangxuly() ;
         include "view/donhang/xacnhandh.php";
         break;

         case "xacnhan_donhang":
            if(isset($_GET["id_hoadon"]) && ($_GET["id_hoadon"])){
                $id_hoadon= $_GET["id_hoadon"];
                xacnhan_hoadon($id_hoadon);
                $message = "Đơn hàng đã đưuọc xác nhận ";

            }
            $listxacnhan=loadall_dangxuly() ;
            include "view/donhang/xacnhandh.php";
        break;
        // xác nhận đơn hàng
            
        case "donhang_xacnhan":

        
            $listxacnhan=loadall_daxacnhan() ;
        include "view/donhang/hoantat.php";
        break;
        //giao_donhang
        case "giao_donhang":
            if(isset($_GET["id_hoadon"]) && ($_GET["id_hoadon"])){
                $id_hoadon= $_GET["id_hoadon"];
                giao_hoadon($id_hoadon);
                $message = "Đơn hàng đang được vận chuyển ";

            }

        $listxacnhan=loadall_daxacnhan() ;
        include "view/donhang/hoantat.php";
        break;
        // danh sách đơn hàng đang giao
        case "donhang_danggiao":

            $listxacnhan =loadall_danggiao();
        include  "view/donhang/giaodonhang.php";
        break;
        // danh sách đơn hàng hoàn tất

        case "hoanthanh_donhang":
            $listxacnhan = loadall_hoantat() ;
        include "view/donhang/hoanthanh.php";
        break;

        case  "hoantat_donhang":
            if(isset($_GET["id_hoadon"]) && ($_GET["id_hoadon"])){
                $id_hoadon= $_GET["id_hoadon"];
                hoantat_hoadon($id_hoadon);
                $message = "Đơn hàng đã hoàn tất ";
                

            }
            $listxacnhan =loadall_danggiao();
         include  "view/donhang/giaodonhang.php";
        break;

        case "huydh":
            $listxacnhan = loadall_huydon();
        include "view/donhang/huydonhang.php";
        break;

        case   "huy_hoadon":
            if(isset($_GET["id_hoadon"]) && ($_GET["id_hoadon"])){
                $id_hoadon= $_GET["id_hoadon"];
                huy_hoadon($id_hoadon) ;
                $message = "Đơn hàng đã hủy ";

            }
            $listxacnhan=loadall_dangxuly() ;
            include "view/donhang/xacnhandh.php";

        break;



        //  case  'hoan_tat':
        //     $listhoantat = loadall_hoantat() ;
        //    include "view/donhang/hoantat.php";
        //   break;
   

       
         case "dskh":
            $listtaikhoan = loadall_taikhoan();
            include "view/taikhoan/list.php";
         break;

         case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $listtaikhoan = loadone_taikhoan($id);
            }
            include "view/taikhoan/update.php";

         break;
        case "update_tk":
            if (isset($_POST['capnhap']) && $_POST['capnhap'] != "") {
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sodienthoai = $_POST['sodienthoai'];
                $chucvu = $_POST['chucvu'];
                update_taikhoan($id, $ten, $email, $diachi, $sodienthoai, $chucvu);
                $message = "Tài khoản đã được cập nhật .";

            }
            $listtaikhoan = loadone_taikhoan($id);
            include "view/taikhoan/update.php";

        break;

    
          
            case 'blog':
              if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                            $id = $_POST['id'];
                            $anh1 = $_FILES['anh1']['name'];
                            $anh2 = $_FILES['anh2']['name'];
                            $anh3 = $_FILES['anh3']['name'];
                            $target_dir = "view/upload/";
                            $target_file = $target_dir . basename($_FILES["anh1"]["name"]);
                            if (move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file)) {
                                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                            } else {
                                //echo "Sorry, there was an error uploading your file.";
                            }
                            $noidung1 = $_POST['noidung1'];
                            $noidung2 = $_POST['noidung2'];
                            $noidung3 = $_POST['noidung3'];
                            update_baiviet($id, $anh1, $anh2, $anh3, $noidung1, $noidung2, $noidung3);
                            $message = "Tài khoản đã được cập nhật .";
                        }
                     $baiviet=loadall_baiviet();
                        include "view/blog.php";
                        break;
            case "tkdm":
                $thongkedanhmuc = load_thongke_sanpham_danhmuc();
                include "view/thongke/thongkedanhmuc.php";
                break;
    
            case "tksp":
                $thongkesanpham = load_thongke_sanpham();
                include "view/thongke/thongkesanpham.php";
                break;
    
            case "bieudo":
                $thongkedanhmuc = load_thongke_sanpham_danhmuc();
                $thongkesanpham = load_thongke_sanpham();
                include "view/thongke/bieudo.php";
                break;

            case 'thongkedoanhthu':
               $data=doanhthu_sanpham();
                include 'view/thongke/bieudodoanhthu.php';
            break;
            case 'lido_huydonhang':
                if(isset($_GET['ma_hd']) && ($_GET['ma_hd'])){
                    $ma_hd= $_GET['ma_hd'];
                   $lido= xemlidohuydonhang($ma_hd) ;
                }
                include 'view/donhang/lidohuydonhang.php';
            break;
            // sản phẩm biển thể
            case 'sanphambienthe':
                if(isset($_GET["id_sp"]) && ($_GET["id_sp"]!=="")){
                    $id_sp=$_GET['id_sp'];
                   $chitietsanpham= sanpham_chitietsanpham($id_sp);
                }
            include  'view/sanpham/add_sp_bienthe.php';
            break;

            case 'them_sp_bienthe':
         
                    if(isset($_POST['them_sp_bienthe']) && ($_POST['them_sp_bienthe']!== '')){

                        $id_sp = $_POST['id_sp'];
                        $mau_sac= $_POST['mau_sac'];
                        $dungluong= $_POST['dungluong'];
                        $anh_sp_bienthe= $_FILES["anh_sp_bienthe"]["name"];
                        $target_dir= "view/upload/";
                        $target_file= $target_dir.basename($_FILES["anh_sp_bienthe"]["name"]);
                        if (move_uploaded_file($_FILES["anh_sp_bienthe"]["tmp_name"], $target_file)) {
                       
                       } else {
                         
                       }
                       them_sp_bienthe($id_sp , $mau_sac , $dungluong, $anh_sp_bienthe);
                    }
                    if(isset($_GET["id_sp"]) && ($_GET["id_sp"]!=="")){
                        $id_sp=$_GET['id_sp'];
                       $chitietsanpham= sanpham_chitietsanpham($id_sp);
                    }
                include  'view/sanpham/add_sp_bienthe.php';
            break;
            
    }
}else{
    $data=doanhthu_sanpham();
    $soluong_tonkho= soluongtonkho();
    $donhanghuy=demsodonhangbihuy();
    $donhangvanchuyen=demsodonhangvanchuyen();
include 'view/thongke/bieudodoanhthu.php';
}

include "view/footer.php";


?>