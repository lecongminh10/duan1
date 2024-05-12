<?php
extract($sanphamchitiet);

if($gia_khuyen_mai==""){
    $gia_khuyen_mai=0;
}
$duong_dan_anh= "views/admin/view/upload/".$anh_sp;



/*




if (isset($_POST['themgiohang'])) {

    if(isset($_SESSION['user']) && ($_SESSION['user'])){
    $ten_sp = $_POST['ten_sp'];
    $gia_goc = $_POST['gia_goc'];
    $anh_sp = $_POST['anh_sp'];
    $gia_khuyen_mai = $_POST['gia_khuyen_mai'];
    $id_sp = $_POST['id_sp'];
    $quantity = $_POST['quantity'];
    $productIndex = -1;
    $productExists = false;

    // kiểm tra sản phẩm có trong giỏ hàng không
    // 
    $fl=0;
    for( $i = 0; $i < sizeof($_SESSION['cart']); $i++ ){
        if($_SESSION['cart'][$i]['ten_sp'] == $ten_sp){
            $fl=1;
            $newQuantity= $quantity  + $_SESSION['cart'][$i]['quantity'];
            $_SESSION['cart'][$i]['quantity']= $newQuantity;
        }
    }

    // không trùng sản phẩm thì thêm mới 
 if($fl == 0){
    $_SESSION['cart'][] = array(
        'ten_sp' => $ten_sp,
        'gia_goc' => $gia_goc,
        'anh_sp' => $anh_sp,
        'gia_khuyen_mai' => $gia_khuyen_mai,
        'id_sp' => $id_sp,
        'quantity' => $quantity
    );

}
    }
}

*/
?>


<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ </a></li>
                        <li class="breadcrumb-item"><a href="index.php?act=sanpham">Sản phẩm </a></li>
                    </ol>
                </div>
            </nav>

            <div class="container">
            <div class="product-single-container product-single-default" id="product-<?= $id_sp ?>">
    <div class="cart-message d-none">
        <strong class="single-cart-notice"><?= $ten_sp ?></strong>
        <span>sản phẩm của bạn đã được thêm vào giỏ hàng.</span>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-6 product-single-gallery">
            <!-- Product Images -->
            <div class="product-slider-container">
                <div class="label-group">
                    <div class="product-label label-hot"><?= $khuyen_mai ?></div>
                </div>

                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover product-default">
                    <figure>
                        <div class="product-item">
                            <img class="product-single-image" src="views/admin/view/upload/<?= $anh_sp ?>" style="width:468px; height:468px"
                               
                                alt="product" />
                        </div>
                    </figure>
                </div>
                <span class="prod-full-screen">
                    <i class="icon-plus"></i>
                </span>
            </div>

            <!-- Product Thumbnails -->
            <div class="prod-thumbnail owl-dots">
                <div class="owl-dot">
                    <img src="views/admin/view/upload/<?=$anh_sp?>" width="110" height="110" alt="product-thumbnail" />
                </div>
                <?php foreach( $sanpham_bienthe as $key => $value){?>
                    <div class="owl-dot">
                    <img src="views/admin/view/upload/<?=$value['anh_sp_bienthe']?>" width="110" height="110" alt="product-thumbnail" />
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="col-lg-7 col-md-6 product-single-details">
            <!-- Product Title -->
            <h1 class="product-title" data-id="<?= $id_sp ?>"> <?= $ten_sp ?></h1>

            <!-- Product Ratings -->
            <div class="ratings-container">
                <div class="product-ratings">
                    <span class="ratings" style="width:60%"></span>
                    <span class="tooltiptext tooltip-top"></span>
                </div>
                <a href="#" class="rating-link">( 6 Reviews )</a>
            </div>

            <!-- Price Box -->
            <hr class="short-divider">
            <div class="price-box product-price">

            <?php if($gia_khuyen_mai==0){ ?>

            <span class="new-price"><?= $gia_goc ?> VND</span>
             <?php } else{?>
            <span class="old-price"><?= $gia_goc ?> VND</span>
            <span class="new-price"><?= $gia_khuyen_mai ?> VND</span>
                                           
               <?php } ?>
               
                
            </div>

            <!-- Product Description -->
            <div class="product-desc">
                <p><?= $mota_sp ?></p>
            </div>

            <!-- Product Information -->
            <ul class="single-info-list">
                <li>Màu sản phẩm </li>
            <li class=" d-flex ">
        <?php foreach( $sanpham_bienthe as $key => $value){?>
     <div class="d-flex align-items-center p-2 border border-secondary mr-2">
        <img src="views/admin/view/upload/<?= $value['anh_sp_bienthe'] ?>" width="50" height="50" alt="" class="me-3">
        <div>
            <p class="m-0" style="font-size: 10px;"><?=$value['mau_sac']?></p>
            <p class="m-0"><?php echo (isset($gia_khuyen_mai)) ? $gia_khuyen_mai : $gia_goc; ?></p>
        </div>
     </div>
     <?php }?>

     </li>
     

                <li>Số lượng còn : <strong><?= $soluongtonkho ?></strong></li>
                <li>Thương hiệu <strong><a href="#" class="product-category"><?= $thuong_hieu ?></a></strong></li>
                <li>Bộ nhớ <strong><a href="#" class="product-category"><?=$bo_nho ?></a></strong></li>
            </ul>

            <!-- Product Action -->
            <div class="product-action">
                <div class="product-single-qty">
                    <input class="horizontal-quantity form-control" type="number" id="quantity" value="1" min="1">
                </div>
                <button class="btn btn-dark thesanphamchitiet add-cart mr-2 product-type-simple"
                    onclick="addToCart(<?= $id_sp ?>, '<?= $ten_sp ?>', <?= $gia_goc ?>, <?= $gia_khuyen_mai ?>, '<?=$duong_dan_anh?>');">
                 Thêm vào giỏ hàng
                </button>
                <a href="index.php?act=giohang" class="btn btn-gray view-cart d-none">Xem giỏ hàng </a>
            </div>

            <!-- Share and Wishlist -->
            <hr class="divider mb-0 mt-0">
            <div class="product-single-share mb-3">
                <label class="sr-only">Share:</label>
                <div class="social-icons mr-2">
                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                </div>
                <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                        class="icon-wishlist-2"></i><span>Add to Wishlist</span></a>
            </div>
        </div>
    </div>
</div>



         

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab"
                                href="#product-desc-content" role="tab" aria-controls="product-desc-content"
                                aria-selected="true">Mô tả </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content"
                                role="tab" aria-controls="product-size-content" aria-selected="true">Thông tin khuyến mãi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content"
                                role="tab" aria-controls="product-tags-content" aria-selected="false">Thông tin ký thuật </a>
                        </li>

                        <li class="nav-item">
                        <?php foreach( $dem as $key =>$value){?>
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab"
                                href="#product-reviews-content" role="tab" aria-controls="product-reviews-content"
                                aria-selected="false">Bình luận (<?=$value['soluongbinhluansanpham']?>) </a>
                         <?php  }?>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                            aria-labelledby="product-tab-desc">
                            <div class="product-desc-content font2">
                                <p><?=$mota_sp?></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-size-content" role="tabpanel"
                            aria-labelledby="product-tab-size">
                            <div class="product-size-content">
                                <div class="row">

                                </div><!-- End .row -->
                            </div><!-- End .product-size-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel"
                            aria-labelledby="product-tab-tags">
                            <?=$tinh_nang_ky_thuat?>
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                            aria-labelledby="product-tab-reviews">

                          

                            <div class="product-reviews-content">
                                <?php foreach( $dem as $key =>$value){?>
                                <h3 class="reviews-title">Có (<?=$value['soluongbinhluansanpham']?>) bình luận liên quan đến sản phẩm </h3> 
                                <?php  }?>
                                <?php foreach($listbinh_luan as $listbinh_luan) {
                                    $demsao= ($listbinh_luan['sao']) * 20;
                                    ?>
                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="views/admin/view/upload/<?=$listbinh_luan['anh_bl']?>" alt="author" width="80"
                                                height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <div class="ratings-container float-sm-right">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:<?=$demsao?>%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div>

                                                <span class="comment-by">
                                                    <strong><?=$listbinh_luan['ten'];?></strong> <?=$listbinh_luan['ngaybinhluan'];?>
                                                </span>
                                            </div>

                                            <div class="comment-content">
                                                <p> <?=$listbinh_luan['noidung_bl'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>

                                <div class="divider"></div>


                            </div>
                          

                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->

                <div class="products-section pt-0">
                    <h2 class="section-title m-b-4 border-0">Sản phẩm mới nhất</h2>
                  <div class="row">
                                
                        <div class="products-slider 5col owl-carousel owl-theme appear-animate" data-owl-options="{
                            'margin': 0
                        }" data-animation-name="fadeInUpShorter" data-animation-delay="200">

                        <?php
                         $tam= " - ";
                        foreach($dstop10 as $key => $value){ 
                                 $link = "index.php?act=chitietsanpham&id_sp=".$value['id_sp'];
                                ?>
                            <div class="product-default">
                                <figure>
                                    <a href="<?=$link?>">
                                        <img src="views/admin/view/upload/<?=$value['anh_sp']?>" width="280"
                                            height="280" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <!-- <div class="category-list">
                                        <a href="category.html" class="product-category">Categor</a>
                                    </div> -->
                                    <h3 class="product-title" data-id="<?=$value['id_sp']?>">
                                        <a href="<?=$link?>"><?=$value['ten_sp']?></a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <?php if($value['gia_khuyen_mai']==""){
                                            ?>
                                        <span class="product-price"> <?=$value['gia_goc']?> VND</span>
                                        <?php } else{?>
                                            <span class="product-price"> <s style="font-size: small; opacity: 0.6;"><?=$value['gia_goc']?> VND</s></span>
                                        <span class="product-price-new">  <?=$tam?> <?=$value['gia_khuyen_mai']?> VND</span>
                                           
                                            <?php } ?>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        
                                        <a href="#" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                                <a href="" id="addToCartBtn" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>Thêm giỏ hàng </span></a>
                                        <a href="" class="btn-quickview"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                       <?php }?>

                   
                        </div>
                    </div>
                </div>
              
            </div><!-- End .container -->
        </main><!-- End .main -->
     
        <script>
    function addToCart(id_sp, ten_sp, gia_goc, gia_khuyen_mai, duong_dan_anh) {
        var quantity = $('#quantity').val();
        if(gia_khuyen_mai==''){
            gia_khuyen_mai=0;
        }

        $.ajax({
            type: 'POST',
            url: 'views/addTocart.php', // Change this to the actual file where you handle the cart logic
            data: {
                themgiohang: true,
                productDetails: {
                    ten_sp: ten_sp,
                    gia_goc: gia_goc,
                    anh_sp: duong_dan_anh,
                    gia_khuyen_mai:gia_khuyen_mai,
                    id_sp: id_sp,
                    quantity: quantity
                }
            },
            dataType: 'json',
            success: function (response) {
                // Handle success response (e.g., show a success message)
                console.log(response);
                console.log('chính xác');
            },
            error: function (error) {
                // Handle error response (e.g., show an error message)
                console.log(error);
                console.log(' xác');
            }
        });
    }
</script>
<script>
    $(document).ready(function(){
        $('.owl-dot').click(function(){
            // Lấy đường dẫn của hình ảnh từ thuộc tính src của ảnh thumbnail
            var newImageSrc = $(this).find('img').attr('src');
            
            // Thay đổi đường dẫn của hình ảnh chính
            $('.product-single-image').attr('src', newImageSrc);
            
            // Nếu bạn sử dụng zoom image, cũng cần cập nhật đường dẫn zoom image
            $('.product-single-image').attr('data-zoom-image', newImageSrc);
        });
    });
</script>



