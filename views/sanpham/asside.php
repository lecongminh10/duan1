<aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true"
                                        aria-controls="widget-body-1">Danh mục </a>
                                </h3>

                                <div class="collapse show" id="widget-body-1">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li>
                                        <div class="collapse show" id="widget-category-1">
                                            <ul class="cat-sublist">
                                                <li><a href="index.php?act=sanpham"  class="products-count">Tất cả</a></li>
                                                <?php
                                                
                                                foreach ($list_dm as $dm) {
                                                    extract($dm);
                                                    $linkdm = "index.php?act=sanpham&id_dm=" . $id_dm;
                                                    echo '<li><a href="' . $linkdm . '"><span
                                                                class="products-count">' . $ten_dm . '</span>
                                                                </a></li>';
                                                }
                                                ?>

                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            

                            <div class="widget widget-featured pb-0">
                                <h3 class="widget-title">Thịnh hành </h3>

                                <div class="widget-body">
                                    <div class="featured-col">
                                        <?php foreach($list_thinhhanh as $key => $value):
                                        
                                        $link = "index.php?act=chitietsanpham&id_sp=" . $value['id_sp'];
                                        ?>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="<?=$link?>">
                                                    <img src="views/admin/view/upload/<?=$value['anh_sp']?>"
                                                        width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title">
                                                    <a href="<?=$link?>"><?=$value['ten_sp']?></a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price"><?=number_format($value['gia_goc'])?></span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <?php endforeach; ?>
                                       
                                    </div><!-- End .featured-col -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar-wrapper -->
                    </aside>