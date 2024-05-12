<?php

if (isset($message)) {
    echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
</div>";
}
?>

<div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data">
      <h2>Danh sách bài viết</h2>
        <?php foreach($baiviet as $key =>$value){?>
            <input type="hidden" name="id" value="<?=$value['id']?>">
        <div class="mb-3">
            <label for="anh_1" class="form-label">Ảnh 1:</label>
            <input type="file" class="form-control" id="anh_1" name="anh1" accept="/admin/view/upload" >
            <img src="view/upload/<?=$value['anh1']?>" alt="không có ảnh" style="width:70px ; height:100px">
        </div>

        <div class="mb-3">
            <label for="anh_2" class="form-label">Ảnh 2:</label>
            <input type="file" class="form-control" id="anh_2" name="anh2" accept="/admin/view/upload" >
            <img src="view/upload/<?=$value['anh2']?>" alt="không có ảnh" style="width:70px ; height:100px">
        </div>

        <div class="mb-3">
            <label for="anh_3" class="form-label">Ảnh 3:</label>
            <input type="file" class="form-control" id="anh_3" name="anh3" accept="/admin/view/upload">
            <img src="view/upload/<?=$value['anh3']?>" alt="không có ảnh" style="width:70px ; height:100px">
        </div>

        <div class="mb-3">
            <label for="noidung_1" class="form-label">Nội dung 1:</label>
            <textarea class="form-control" id="noidung_1" name="noidung1" ><?=$value['noidung1']?></textarea>
        </div>

        <div class="mb-3">
            <label for="noidung_2" class="form-label">Nội dung 2:</label>
            <textarea class="form-control" id="noidung_2" name="noidung2" ><?=$value['noidung2']?></textarea>
        </div>

        <div class="mb-3">
            <label for="noidung_3" class="form-label">Nội dung 3:</label>
            <textarea class="form-control" id="noidung_3" name="noidung3"><?=$value['noidung3']?> </textarea>
        </div>
        <?php }?>

        <input type="submit" name="capnhat" class="btn btn-primary" value="Gửi"></button>
    </form>
</div>


