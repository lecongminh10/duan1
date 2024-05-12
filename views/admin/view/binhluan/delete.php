



<div class="container mt-5">
        <div class="d-flex justify-content-between">
            <div class="">
                <h2 class="mb-4">Thùng Rác </h2>
            </div>
            <div class="">
              
                <h5 class="mb-4">    
                <a href="index.php?act=danhsachbl" class="btn btn-primary">
       
                Danh sách </a></h5>
            </div>
        </div>

        <?php
    
        if (isset($message)) {
            echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
            </div>";
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên Người Dùng</th>
                    <th scope="col">Nội Dung</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Ngày Bình Luận</th>
                    <th scope="col">Ảnh Sản Phẩm</th>
                    <th scope="col">Chức năng </th>
                </tr>
            </thead>
            <tbody>
                 <?php foreach($danhsach_bl as $danhsach_bl): extract($danhsach_bl); 
                 $tam= "index.php?act=xoa_bl&id_bl=".$id_bl;
                 $khoiphuc_bl= "index.php?act=khoiphucbl&id_bl=".$id_bl;
                 ?>
                <tr>
                    <th scope="row"><?=$id_bl?></th>
                    <td><?=$ten?></td>
                    <td><?=$noidung_bl?></td>
                    <td><?=$ten_sp?></td>
                    <td><?=$ngaybinhluan?></td>
                    <td><img src="../upload/<?=$anh_bl?>" alt="sản phẩm người dùng "></td>
                    <td><a href="<?=$khoiphuc_bl?>" class="btn btn-primary">Khôi phục </a> <a href="<?=$tam?>" class="btn btn-primary">Xóa </a></td>
                
                </tr>   
                <?php endforeach ?>  
            </tbody>
        </table>
        <a href="index.php?act=danhsachbl" class="btn btn-primary">Trở vể </a>
    </div>