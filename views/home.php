<main class="main">
            <section class="intro-section">
                <div class="container">
                <div class="home-slider slide-animate owl-carousel owl-theme owl-carousel-lazy">
                <div class="home-slide home-slide-1 banner d-flex flex-wrap">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="d-flex flex-column justify-content-center appear-animate"
                            data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                            <h4 class="text-light text-uppercase m-b-1">Giảm giá</h4>
                            <h2 class="text-uppercase m-b-1">20% </h2>
                            <h4 class="font-weight-bold text-uppercase heading-border m-b-3">Điện Thoại</h4>
                            <h3 class="font5 m-b-5">Winter Sale</h3>

                            <div>
                                <a href="index.php?act=blog" class="btn btn-dark btn-lg">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 with-bg"
                        style="background-image: url(assets/images/demoes/demo27/slider/slide-bg.png);">
                        <div class="appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                            <img class="m-b-5" src="views/admin/view/upload/b8.jpg" width="740"
                                height="397" alt="banner" />
                        </div>
                        <div class="content-box d-sm-flex appear-animate" data-animation-name="fadeInLeftShorter"
                            data-animation-delay="700">
                            <h5 class="text-uppercase m-b-2">Chỉ duy nhất <b
                                    class="text-secondary">15.690.000đ</b></h5>
                            <div class="content-info">
                                <h6 class="mb-0">Start Shopping Right Now</h6>
                                <p class="font2 mb-0">* Get Plus Discount Buying Package</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-slide home-slide-2 banner d-flex flex-wrap">
                    <div class="col-lg-5 d-flex justify-content-center">
                        <div class="d-flex flex-column justify-content-center appear-animate"
                            data-animation-name="fadeInRightShorter" data-animation-delay="200">
                            <h4 class="text-light text-uppercase m-b-1">Hot</h4>
                            <h2 class="text-uppercase m-b-1">Iphone 15 pro max</h2>
                            <h4 class="font-weight-bold text-uppercase heading-border m-b-3">Titanium</h4>
                            <h3 class="font5 p-b-4 m-b-5">Winter Sale</h3>

                            <div>
                                <a href="index.php?act=blog" class="btn btn-dark btn-lg">Xem thêm</a>
                            </div>
</div>
                    </div>
                    <div class="col-lg-7 order-lg-first text-lg-right appear-animate"
                        data-animation-name="fadeInRightShorter" data-animation-delay="500">
                        <img class="m-b-5" src="views/admin/view/upload/b13.jpg" width="740" height="397"
                            alt="banner" />
                    </div>
                    <div class="content-box d-sm-flex appear-animate" data-animation-name="fadeInLeftShorter"
                            data-animation-delay="700">
                            <h5 class="text-uppercase m-b-2">Giá chỉ từ <b
                                    class="text-secondary">32.990.000đ</b></h5>
                            <div class="content-info">
                                <h6 class="mb-0">Start Shopping Right Now</h6>
                                <p class="font2 mb-0">* Get Plus Discount Buying Package</p>
                            </div>
                        </div>
                </div>
            </div>
                </div>
            </section>

            <section class="popular-products">
                <div class="container">
                    <h2 class="section-title appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="200">Sản phẩm mới </h2>

                    <div class="row">
                        <div class="products-slider 5col owl-carousel owl-theme appear-animate" data-owl-options="{
                            'margin': 0
                        }" data-animation-name="fadeInUpShorter" data-animation-delay="200">

                            <?php foreach($list_sp_home as $key => $value){ 
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
                                <input type="hidden" id="quantityInput" value="1">
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
                                        <?php
                                        $tam= " - ";
                                        if($value['gia_khuyen_mai']==""){
                                            
                                            ?>
                                        <span class="product-price">  <?=$value['gia_goc']?> VND</span>
                                        <?php } else{?>
                                            <span class="product-price" style="font-size: small; opacity: 0.6;"><s><?=$value['gia_goc']?>VND</s></span>
                                        <span class="product-price-new"> <?=$tam?>  <?=$value['gia_khuyen_mai']?>VND</span>
                                           
                                            <?php } ?>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        
                                        <a class="themyeuthich btn-icon-wish" ><i
                                                class="icon-heart"></i></a>
                                                <span class="btn-icon btn-add-cart product-type-simple addToCartBtn" data-id="<?=$value['id_sp']?>"><i class="icon-shopping-cart"></i><span>Thêm giỏ hàng</span></span>
                                                <a href="views/xemsanpham.php?id_sp=<?=$value['id_sp']?>" class="btn-quickview" data-product-id="<?=$value['id_sp']?>"><i class="fas fa-external-link-alt"></i></a>

                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                            <?php }?>

                   
                        </div>
                       
                    </div>

                    <div class="categories-slider owl-carousel owl-theme mb-4 appear-animate" data-owl-options="{
                        'margin': 2,
                        'nav': false,
                        'items': 1,
                        'responsive': {
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5
                            }
                        }
                    }" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                    <div class="product-category">
                    <img src="views/admin/view/upload/icon2.png" alt="icon" width="60" height="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">IPHONE</h3>
                    </div>
                </div>
                <div class="product-category">
                    <img src="views/admin/view/upload/icon3.png" alt="icon" width="60" height="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">SAMSUNG</h3>
                    </div>
                </div>
                <div class="product-category">
                    <img src="views/admin/view/upload/icon4.png" alt="icon" width="60" height="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">XIAOMI</h3>
                    </div>
                </div>
                <div class="product-category">
                    <img src="views/admin/view/upload/icon5.png" alt="icon" width="60" height="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">REALME</h3>
                    </div>
                </div>
                <div class="product-category">
                    <img src="views/admin/view/upload/icon6.png" alt="icon" width="60" height="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">OPPO</h3>
                    </div>
                </div>
                <div class="product-category">
                    <img src="views/admin/view/upload/icon7.png" alt="icon" width="60" height="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">VIVO</h3>
                    </div>
                </div>
                    </div>
                </div>
            </section>

            <div class="banners-section mb-4">
        <div class="row row-sm">
            <div class="col-md-4">
                <div class="banner banner1 appear-animate" data-animation-name="fadeIn" data-animation-delay="200"
                    style="background-color: #696f6f;">
                    <figure>
                        <img src="views/admin/view/upload/b14.jpg" alt="banner" width="640"
                            height="640">
                    </figure>
                </div>
            </div>
            <div class="col-md-8">
                <div class="banner banner2 h-100"
                    style="background: #101010 no-repeat center/cover url(views/admin/view/upload/b1.jpg);">
               
                </div>
            </div>
        </div>
    </div>
    <section class="trendy-section mb-2">
        <div class="container">
            <h2 class="section-title appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                Sản phẩm nổi bật</h2>

            <div class="row appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                <div class="products-slider 5col owl-carousel owl-theme" data-owl-options="{
                            'margin': 0
                        }">
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
                                                <a href="views/xemsanpham.php?id_sp=<?=$value['id_sp']?>" class="btn-quickview" data-product-id="<?=$value['id_sp']?>"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                       <?php }?>

                    
                    
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 mb-2">
                    <div class="banner banner3 d-flex flex-wrap align-items-center bg-gray h-100 appear-animate"
                        data-animation-name="fadeInRightShorter" data-animation-delay="100">
                        <div class="col-sm-4 text-center">
                            <h3 class="font5 mb-0">Winter Sale</h3>
                            <h2 class="text-uppercase mb-0">20% off</h2>
                        </div>
                        <div class="col-sm-4">
                            <img src="views/admin/view/upload/b11.jpg" alt="banner" width="232"
                                height="124">
                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="#" class="btn btn-dark">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-2">
                    <div class="banner banner4 d-flex flex-wrap align-items-center bg-primary h-100 appear-animate"
                        data-animation-name="fadeInRightShorter" data-animation-delay="400">
                        <div class="col-sm-4 text-center">
                            <h3 class="font5 text-white mb-0">Flash Sale</h3>
                            <h2 class="text-uppercase text-white mb-0">30% off</h2>
                        </div>
                        <div class="col-sm-4">
                            <img src="views/admin/view/upload/b12.jpg" alt="banner" width="232"
                                height="124">
                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="demo27-shop.html" class="btn btn-light">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </main><!-- End .main -->
 


