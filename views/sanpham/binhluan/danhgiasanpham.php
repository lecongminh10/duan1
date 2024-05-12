<?php

extract($chitietsanpham);



?>

<div class="container">
    <h2 class="mb-4">Đánh giá sản phẩm</h2>
    <form action="index.php?act=guidanhgiasanpham" method="post" enctype="multipart/form-data">
         <div class="mb-3 row">
            <div class="col">
                <label for="productName" class="form-label">Tên sản phẩm:</label>
                <span class="form-text" style="font-size:2rem;"><?=$ten_sp?></span>
            </div>
            <div class="col">
                <label for="productImage" class="form-label">Hình ảnh sản phẩm </label>
                <img src="views/admin/view/upload/<?=$anh_sp?>" alt="" class="img-fluid" style="width:120px; height:120px">
            </div>
            <div class="col">
                <label for="price" class="form-label">Giá tiền:</label>
                <span class="form-text"  style="font-size:2rem;"><?=$gia_goc?></span>
            </div>
        </div>
        <input type="hidden" name="id_sp" value="<?=$id_sp?>">
        <input type="hidden" id="sao" name="sao">
        <div class="mb-3">
                <label for="productImage" class="form-label">Hình ảnh khách hàng </label>
                <input type="file" class="form-control" id="productImage" name="anh_bl">
            </div>
        <div class="mb-3">
            <label for="review" class="form-label">Bình luận:</label>
            <textarea class="form-control" id="review" rows="3" required name="noidung_bl"></textarea>
        </div>
        <div class="mb-3 row">
        <div class="col">
         <label for="rating" class="form-label" >Đánh giá sao:</label>
         <div class="rating-form">

                                            <span class="rating-stars">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                            </span>
        </div>
        </div>

            <div class="col">
                <!-- Nút gửi bình luận -->
                <input type="submit" class="btn btn-primary" name="gui" value="Gửi đánh giá" data-toggle="modal" data-target="binhluanthanhcong">
            </div>
        </div>
    </form>
</div>
<script>
    // JavaScript để xử lý sự kiện khi click vào ngôi sao
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.rating-form a');
        var sao= document.getElementById('sao');
        
        stars.forEach(function (star) {
            star.addEventListener('click', function (event) {
                event.preventDefault();
                const ratingValue = this.textContent;
                alert('Bạn đã đánh giá ' + ratingValue + ' sao.');
                sao.value= ratingValue;
            });
        });
    });
</script>