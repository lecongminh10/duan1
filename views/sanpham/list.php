<main class="main">
    <div class="category-banner-container bg-gray">
        <div class="category-banner banner text-uppercase" style="background: no-repeat 60%/cover url('assets/images/banners/banner-top.jpg');">
            <div class="container position-relative">
                <div class="row">
                    <div class="pl-lg-5 pb-5 pb-md-0 col-sm-5 col-xl-4 col-lg-4 offset-1">
                        <h3>Electronic<br>Deals</h3>
                        <a href="category.html" class="btn btn-dark">Get Yours!</a>
                    </div>
                    <div class="pl-lg-3 col-sm-4 offset-sm-0 offset-1 pt-3">
                        <div class="coupon-sale-content">
                            <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Exclusive COUPON
                            </h4>
                            <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-dark">$100</b> OFF</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Men</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accessories</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-9 main-content">


                <div class="row">

                    <?php foreach ($dssp as $key => $value) { ?>
                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="index.php?act=chitietsanpham&id_sp=<?= $value['id_sp'] ?>">
                                        <img src="views/admin/view/upload/<?= $value['anh_sp'] ?>" width="280" height="280" alt="product" />
                                        <img src="views/admin/view/upload/<?= $value['anh'] ?>" width="280" height="280" alt="product" />
                                    </a>

                                    <div class="label-group">
                                        <div class="product-label label-hot"><?= $value['khuyen_mai'] ?></div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                        </div>
                                    </div>

                                    <h3 class="product-title" data-id="<?= $value['id_sp'] ?>"> <a href="index.php?act=chitietsanpham&id_sp=<?= $value['id_sp'] ?>"><?= $value['ten_sp'] ?></a> </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <?php if ($value['gia_khuyen_mai'] == "") { ?>
                                            <span class="product-price"><?= $value['gia_goc'] ?> VND </span>
                                        <?php } else { ?>
                                            <span class="old-price"><?= $value['gia_goc'] ?>VND</span>
                                            <span class="product-price"><?= $value['gia_khuyen_mai'] ?> VND</span>
                                        <?php } ?>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>
                                        <span class="btn-icon btn-add-cart product-type-simple addToCartBtn" data-id="<?= $value['id_sp'] ?>"><i class="icon-shopping-cart"></i><span>Thêm giỏ hàng</span></span>
                                        <a href="views/xemsanpham.php?id_sp=<?= $value['id_sp'] ?>" class="btn-quickview" data-product-id="<?= $value['id_sp'] ?>"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End .col-sm-4 -->






                </div>
                <!-- End .row -->

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">

                    </div>
                    <!-- End .toolbox-item -->

                    <ul class="pagination toolbox-item">
                        <?php
                        $prev_page = $cr_page - 1;
                        $next_page = $cr_page + 1;
                        ?>
                        <li class="page-item <?php echo ($prev_page <= 0) ? 'disabled' : ''; ?>">
                            <a class="page-link page-link-btn" href="index.php?act=sanpham&page=<?php echo $prev_page; ?>"><i class="icon-angle-left"></i></a>
                        </li>
                        <?php
                        for ($i = max(1, $cr_page - 2); $i <= min($cr_page + 2, $num_pages); $i++) {
                        ?>
                            <li class="page-item <?php echo ($i == $cr_page) ? 'active' : ''; ?>">
                                <a class="page-link" href="index.php?act=sanpham&page=<?php echo $i; ?>"><?php echo $i; ?><span class="sr-only">(current)</span></a>
                            </li>
                        <?php
                        }
                        ?>
                        <li class="page-item <?php echo ($next_page > $num_pages) ? 'disabled' : ''; ?>">
                            <a class="page-link page-link-btn" href="index.php?act=sanpham&page=<?php echo $next_page; ?>"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>

                </nav>
            </div>
            <!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <?php include "views/sanpham/asside.php"; ?>
            <!-- End .col-lg-3 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="mb-4"></div>
    <!-- margin -->
</main>