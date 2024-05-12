


<?php
 include "../model/pdo.php";
include "../model/sanpham.php";
// Assuming you have a function to get product details based on ID
$id_sp = $_GET['id_sp'];
$sanphamchitiet=sanpham_chitietsanpham($id_sp);
extract($sanphamchitiet);
?>


<div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
	<div class="row">
		<div class="col-md-6 product-single-gallery mb-md-0">
			<div class="product-slider-container">
				<div class="label-group">
                   
					<div class="product-label label-hot"><?=$khuyen_mai?></div>
					<!---->
					<div class="product-label label-sale">
						
					</div>
				</div>

				<div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
					<div class="product-item">
						<img class="product-single-image" src="views/admin/view/upload/<?=$anh_sp?>"
							data-zoom-image="../../../../www.portotheme.com/html/porto_ecommerce/ajax/assets/images/products/zoom/product-1-big.html" />
					</div>
				</div>
				<!-- End .product-single-carousel -->
			</div>
			<div class="prod-thumbnail owl-dots">
				<div class="owl-dot">
					<img src="views/admin/view/upload/<?=$anh?> " alt="Không có ảnh " />
				</div>

			</div>
		</div><!-- End .product-single-gallery -->

		<div class="col-md-6">
			<div class="product-single-details mb-0 ml-md-4">
				<h1 class="product-title"><?=$ten_sp?> </h1>

				<div class="ratings-container">
					<div class="product-ratings">
						<span class="ratings" style="width:60%"></span><!-- End .ratings -->
					</div><!-- End .product-ratings -->

					<a href="#" class="rating-link">( 6 Reviews )</a>
				</div><!-- End .ratings-container -->

				<hr class="short-divider">

				<div class="price-box">
					<span class="product-price"></span>
				</div><!-- End .price-box -->

				<div class="product-desc">
					<p>
                        <?=$mota_sp?>
					
					</p>
				</div><!-- End .product-desc -->

				<ul class="single-info-list">
					<!---->
					<li>
						Số lượng còn 
						<strong><?=$soluongtonkho?></strong>
					</li>

					<li>
						Thương hiệu
						<strong>
							<a href="#" class="product-category"><?=$thuong_hieu?></a>
						</strong>
					</li>
				</ul>

				<div class="product-filters-container">
					<div class="product-single-filter">
						<label>Bộ nhớ</label>
                        <?=$bo_nho?>
						<!-- <ul class="config-size-list">
							<li><a href="javascript:;" class="d-flex align-items-center justify-content-center">XL</a>
							</li>
							<li class=""><a href="javascript:;"
									class="d-flex align-items-center justify-content-center">L</a></li>
							<li class=""><a href="javascript:;"
									class="d-flex align-items-center justify-content-center">M</a></li>
							<li class=""><a href="javascript:;"
									class="d-flex align-items-center justify-content-center">S</a></li>
						</ul> -->
					</div>

					<div class="product-single-filter">
						<label></label>
						<a class="font1 text-uppercase clear-btn" href="#">Clear</a>
					</div>
					<!---->
				</div>

				<div class="product-action">
                    Giá  : 
					<div class="price-box ">
                    
                        <?php if($gia_khuyen_mai==""){?>
                            <span class="product-price"><?=$gia_goc?> VND</span>
                        <?php }else{?>
                            <del class="old-price"><span><?=$gia_goc?> VND</span></del>
						<span class="product-price"><?=$gia_khuyen_mai?> VND</span>
                        <?php }?>

					</div>


        

					
				</div><!-- End .product-action -->

				<hr class="divider mb-0 mt-0">


			</div>
		</div><!-- End .product-single-details -->

		<button title="Close (Esc)" type="button" class="mfp-close">
			×
		</button>
	</div><!-- End .row -->
</div><!-- End .product-single-container -->
