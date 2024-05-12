<?php
if(isset($_SESSION['cart']) && ($_SESSION['cart']> 0)){
$item= $_SESSION['cart'];
}
function getTotalQuantityInCart() {
    $totalQuantity = 0;

    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $totalQuantity += $item['quantity'];
        }
    }

    return $totalQuantity;
}
$totalQuantityInCart = getTotalQuantityInCart();
$totalPrice = 0; 

if (isset($_POST['removeFromCart']) && isset($_POST['xoasanpham'])) {
    $productIdToRemove = $_POST['product_id_to_remove'];

    // Find the key of the product with the specified id_sp in the cart array
    $keyToRemove = array_search($productIdToRemove, array_column($_SESSION['cart'], 'id_sp'));

    // Remove the product from the cart array
    if ($keyToRemove !== false) {
        unset($_SESSION['cart'][$keyToRemove]);
    }

    // Reset the array keys to ensure they are sequential
    $_SESSION['cart'] = array_values($_SESSION['cart']);

	
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo27.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 14:22:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Big_phone</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Big_phone">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800', 'Poppins:200,300,400,500,600,700,800', 'Oswald:300,600,700', 'Playfair+Display:700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/assets/css/style.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="views/assets/css/demo27.min.css">
    <link rel="stylesheet" type="text/css" href="views/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="views/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                

                    <div class="header-right d-none d-lg-flex">
                        <div class="header-dropdown dropdown-expanded">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">Liên hệ : 0392853609</a></li>
                                    <?php 
                                            if(isset($_SESSION['user']) && ($_SESSION['user'] !=="")){
                                                    echo ' <li><a href="index.php?act=giohang">Giỏ hàng</a></li>';
                                                    echo ' <li><a href="index.php?act=dathang">Đơn hàng</a></li>';
                                            }
                                            
                                    ?>
                                   
                                   <?php 
                                   if(isset($_SESSION['user']) && ($_SESSION['user'] !=="")){
                                    $ten= $_SESSION['user']['ten'];
                                    echo '<li><a href="index.php?act=hoso">'.$ten.'</a></li>  <li><a href="views/dangnhap/logout.php">Đăng xuất </a></li>';
                                   }
                                   else{
                                    echo '<li><a href="views/dangnhap/register.php">Đăng kí </a></li> <li><a href="views/dangnhap/login.php">Đăng Nhập </a></li>';
                                   }
                                   ?>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="index.php" class="logo">
                            <img src="views/assets/images/logo.png" alt="Porto Logo" width="111" height="44">
                        </a>
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="index.php">Trang chủ </a>
                                </li>
                                <li>
                                    <a>Danh mục </a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">Điện Thoại </a>
                                                 <ul class="submenu">
                                                 <?php  foreach($list_dm as  $list_dm):extract($list_dm); ?>
                                                    <?php $linkdm = "index.php?act=sanpham&id_dm=" . $id_dm; ?>
                                                    <li><a href="<?=$linkdm?>"><?=$ten_dm?></a></li>
                                                    <?php endforeach;?>
                                                
                                                </ul> 
                                            </div>
                                    
                                            <div class="col-lg-4 p-0">
                                                <div class="menu-banner">
                                                    
                                                    <figure>
                                                        <img src="views/admin/view/upload/menu-banner.jpg" alt="Menu banner"
                                                            width="120" height="70">
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4>
                                                            <span class="">UP TO</span><br />
                                                            <b class="">50%</b>
                                                            <i>OFF</i>
                                                        </h4>
                                                        <a href="demo27-shop.html" class="btn btn-sm btn-dark">SHOP
                                                            NOW</a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="index.php?act=sanpham">Sản phẩm </a>
                                <!-- End .megamenu -->
                                </li>
                                <li class="d-none d-xxl- block"><a href="index.php?act=blog">Blog</a></li>
    
                              
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <div
                            class="header-icon header-search header-search-inline header-search-category w-lg-max text-right d-none d-sm-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="index.php" method="get">
    <input type="hidden" name="act" value="sanpham"> <!-- Thêm trường ẩn để xác định hành động -->
    <div class="header-search-wrapper">
        <input type="search" class="form-control" name="kyw" id="q" placeholder="Bạn muốn tìm gì ..." required>
        <button class="btn icon-magnifier" title="search" type="submit"></button>
    </div><!-- End .header-search-wrapper -->
</form>
                        </div><!-- End .header-search -->

                        <a href="index.php?act=yeuthich" class="header-icon">
                            <i class="icon-wishlist-2 line-height-1"></i>
                        </a>
                        <!--  gio hang -->
                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle"><?php echo $totalQuantityInCart; ?></span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Giỏ Hàng</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">

                                    <?php foreach($item as $key=>$value): 
                                        
										
										$tien= (int)$value['gia_goc'] * $value['quantity'];
										$totalPrice +=$tien; 
										?>
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="index.php?act=chitietsanpham&id_sp=<?=$value['id_sp']?>"><?=$value['ten_sp']?></a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty"><?=$value['quantity']?></span>
                                                   *  <?=$value['gia_goc']?>
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="" class="product-image">
                                                    <img src="<?=$value['anh_sp']?>" alt="product"
                                                        width="80" height="80">
                                                </a>

                                                <form action="" method="post">

                     <input type="hidden" name="removeFromCart" value="1">
                    <input type="hidden" name="product_id_to_remove" value="<?=$value['id_sp'];?>">
                        <input type="submit" class="btn-remove icon-cancel" title="Remove Product"  value="*" name="xoasanpham">
                          </form>
                                            </figure>
                                        </div><!-- End .product -->
                                    <?php endforeach;?>
                                  
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right"><?=$totalPrice?></span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="index.php?act=giohang" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="index.php?act=checkout" class="btn btn-dark btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="owl-carousel info-boxes-slider" data-owl-options="{
                        'items': 1,
                        'dots': false,
                        'loop': false,
                        'responsive': {
                            '768': {
                                'items': 2
                            },
                            '992': {
                                'items': 3
                            }
                        }
                    }">
                    <div class="info-box info-box-icon-left">
                        <i class="icon-shipping text-white"></i>

                        <div class="info-box-content">
                            <h4 class="text-white">Miễn phí vận chuyển  &amp; Trả lại </h4>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box info-box-icon-left">
                        <i class="icon-money text-white"></i>

                        <div class="info-box-content">
                            <h4 class="text-white">Hoàn tiền 99% </h4>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box info-box-icon-left">
                        <i class="icon-support text-white"></i>

                        <div class="info-box-content">
                            <h4 class="text-white">Hỗ trợ trực tuyến 24 / 7</h4>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .owl-carousel -->
            </div>
        </header><!-- End .header -->
