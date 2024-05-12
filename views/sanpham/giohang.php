<?php




if (isset($_POST["apdungmagiamgia"]) && ($_POST['apdungmagiamgia'])) {
    $code = $_POST["coupon_code"];
    $result = magiamgia($code);
    if ($result) {
        $couponInfo = $result[0]; // Lấy thông tin mã giảm giá từ kết quả truy vấn
        $couponCode = $couponInfo["code"];
        $discountPercent = $couponInfo["discount_percent"];
    }
    
}


if (isset($_POST['removeFromCart']) && isset($_POST['xoasanpham'])) {
    $productIdToRemove = $_POST['product_id_to_remove'];

    
    $keyToRemove = array_search($productIdToRemove, array_column($_SESSION['cart'], 'id_sp'));

   
    if ($keyToRemove !== false) {
        unset($_SESSION['cart'][$keyToRemove]);
    }

    // Reset the array keys to ensure they are sequential
    $_SESSION['cart'] = array_values($_SESSION['cart']);

	
}

$totalPrice = 0; 
?>
<main class="main">
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
					<li class="active">
						<h3><a href="cart.html">Giỏ hàng </a></h3>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">

                        <form action="index.php?act=updategiohang" method="POST" style="margin-bottom: 0px !important;">
 
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Tên sản phẩm </th>
										<th class="price-col">Giá </th>
										<th class="qty-col">Số Lượng </th>
										<th class="text-right">Tiền </th>
									</tr>
								</thead>
								<tbody>
                                      <?php
                                      // Kiểm tra xem có mã giảm giá được áp dụng không

                                    
                                      
                                      if(isset($_SESSION['cart']) && ($_SESSION['cart'] >0)){

                                      for($i=0 ; $i < sizeof($_SESSION['cart']) ; $i++ ){

                                            $link= "index.php?act=chitietsanpham&id_sp=".$_SESSION['cart'][$i]['id_sp'];
                                           
                                        $tien= ($_SESSION['cart'][$i]['gia_goc']) * ($_SESSION['cart'][$i]['quantity']);
                                        
										$totalPrice +=$tien; 

                                        echo  '
                                        
                                        <tr class="product-row">
										
                                        <td>
                                            <figure class="product-image-container">
                                                <a href="'.$link.'" class="product-image">
                                                    <img src="'.$_SESSION['cart'][$i]['anh_sp'].'" alt="product">
                                                </a>
                                                <form action="" method="post" style="margin-bottom: 0px !important;">
                                    
                                                     <input type="hidden" name="removeFromCart" value="'.$_SESSION['cart'][$i]['id_sp'].'">
                                                    <input type="hidden" name="product_id_to_remove" value="'.$_SESSION['cart'][$i]['id_sp'].'">
                                                    <input type="submit" class="btn-remove icon-cancel" title="Remove Product"  value="*" name="xoasanpham">
                                                </form>
                                                
                                            </figure>
                                        </td>
                                        <td class="product-col">
                                            <h5 class="product-title">
                                                <a href="'.$link.'">'.$_SESSION['cart'][$i]['ten_sp'].'</a>
                                            </h5>
                                        </td>
                                        <td class="price-col" data-original-price="'.$_SESSION['cart'][$i]['gia_goc'].'">'.$_SESSION['cart'][$i]['gia_goc'].'</td>
                                        <td>
                                       

                                        
                                        <input type="hidden" name="product_id[]" value="'.$_SESSION['cart'][$i]['id_sp'].'">
                                            <div class="product-single-qty">
                                            <input onchange="thanhtien(this)" class="horizontal-quantity form-control quantity-input" type="number" value="'.$_SESSION['cart'][$i]['quantity'].'" name="quantity[]" >
                                                
                                            </div>
                                        </td>

                                    
                                      
                                        <td class="text-right"><span class="subtotal-price thanhtien">'.$tien.'</span></td>
                                    </tr>
                                        ';
                                      }
                                    }
										?>


		</tbody>
								<tfoot>
									<tr>
										<td colspan="5" class="clearfix">
											<!-- End .float-left -->

											<div class="float-right">
                                              <span  class="btn btn-shop">
													Xóa giỏ hàng
												</span>
                                                
									<!--cập nhật giỏ hàng -->			<input type="submit" class="btn btn-shop" name="capnhatgiohang" value="Cập nhật giỏ hàng ">
													
												
											</div><!-- End .float-right -->
										</td>
									</tr>
								</tfoot>
							</table>
</form>
						
						</div>
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
							<form action="" method="post">
							<div class="cart-summary">
						

							<table class="table table-totals">
								<tbody>

									<tr>
										<td colspan="2" class="text-left">

                    <h4>Bạn có mã giảm giá?
                        <button data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link btn-toggle"> nhấn vào đây</button>
                    </h4>
				
                    <div id="collapseTwo" class="collapse">
                        <div class="feature-box">
                            <div class="feature-box-content">
                                <p>Nếu bạn có mã giảm giá, vui lòng áp dụng nó bên dưới..</p>

                                <form action="" method="post">
                                   <div class="input-group">
                                      <input type="text" name="coupon_code" class="form-control form-control-sm w-auto" placeholder="Nhập mã" required />
                                      <div class="input-group-append">
                                        <input name="apdungmagiamgia" class="btn btn-sm mt-0" type="submit" value="Áp dụng mã giảm giá">
                                     </div>
                                  </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>




											
										</td>
									</tr>
								</tbody>

								<tfoot>
                                    <tr style="font-size:10px">
                                        <?php
                                       if (isset($couponCode) && $discountPercent > 0) {
                                                                                                                            // Áp dụng giảm giá
                                                 $discountAmount = $totalPrice * $discountPercent / 100;
                                                         $totalPrice -= $discountAmount;
                                                         $_SESSION['total_price_after_discount'] = $totalPrice;
                                                            echo "<p>Áp dụng mã giảm giá thành công! Giảm $discountPercent%, tổng giá trị mới là $totalPrice</p>";
                                                                              } else {
                                                                                     echo "<p>Không có mã giảm giá.</p>";
                                                       }
                                        ?>
                                    </tr>
									<tr>
										<td>Thành Tiền</td>
										<td id="tonggiatien_sp"><?=$totalPrice?></td>
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="index.php?act=checkout" class="btn btn-block btn-dark"> Mua hàng 
									<i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
							
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->
		<script>
               function thanhtien(input) {
                    var row = input.closest('.product-row');
                    var gia_goc = parseFloat(row.querySelector('.price-col').getAttribute('data-original-price'));
                    var soluong = parseInt(input.value);
                    var thanhtienElement = row.querySelector('.thanhtien');
                    var tonggiatien_sp = parseFloat(document.getElementById('tonggiatien_sp').innerText);
						
                    // Validate input (optional)
                    if (isNaN(soluong) || soluong < 0) {
                        soluong = 0;
                        input.value = soluong;
                    }

                    // Calculate the new subtotal
                    var subtotal = gia_goc * soluong;

                    // Update the subtotal in the DOM
                    thanhtienElement.innerText = subtotal.toFixed(2);

                    // Update the total price
                    tonggiatien_sp = updateTotalPrice();
                }

                function updateTotalPrice() {
                    var total = 0;
                    var thanhtienElements = document.querySelectorAll('.thanhtien');

                    thanhtienElements.forEach(function (element) {
                        total += parseFloat(element.innerText);
                    });

                    // Update the total price in the DOM
                    document.getElementById('tonggiatien_sp').innerText = total.toFixed(2);

                    return total;
                }


		</script>
		<script>
    $(document).ready(function() {
        $('.quantity-input').on('change', function() {
            var productId = $(this).data('product-id');
            var newQuantity = $(this).val();

            // Gửi yêu cầu Ajax để cập nhật số lượng
            $.ajax({
                url: 'index.php?act=updategiohang',
                type: 'POST',
                data: { id_sp: productId, quantity: newQuantity },
                success: function(response) {
                    // Xử lý phản hồi từ máy chủ nếu cần
                    console.log(response);
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>
<div class="modal fade" id="binhluanthanhcong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Bạn có muốn xóa giỏ hàng không</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary" href="index.php?delcart=1">Xóa</a>
                </div>
            </div>
        </div>
</div>

<script>
    $(document).ready(function(){
        // Bắt sự kiện khi nút "Xóa giỏ hàng" được nhấn
        $(".btn-shop").on("click", function(){
            // Hiển thị modal thông báo
            $("#binhluanthanhcong").modal("show");
        });
    });
</script>
