
<?php
$item= $_SESSION['cart'];

   

function generateInvoiceNumber() {
    $prefix = 'LCM'; // Cố định tiền tố
    $unique_part = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
    $invoice_number = $prefix . $unique_part;
    
    return $invoice_number;
}
$mahoadon= generateInvoiceNumber();


?>
<main class="main main-test">
    <div class="container checkout-container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li>
                <a href="index.php?act=giohang">Thanh toán </a>
            </li>
        </ul>
        <form action="index.php?act=dathang" method="post">
            <div class="row">
                <div class="col-lg-7">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">Chi tiết đơn hàng </h2>
                            <?php if(isset($_SESSION['user']) && ($_SESSION['user'])):?>
                                <div class="form-group">
                                    <label for="tenNguoiNhan">Tên người nhận </label>
                                    <input type="text" class="form-control" id="tenNguoiNhan" value="<?=$_SESSION['user']['ten'];?>" required/>
                                </div>
                                <div class="form-group">
                                    <label for="diaChiNhan">Địa chỉ cụ thể nhận hàng </label>
                                    <input type="text" class="form-control" id="diaChiNhan" value="<?=$_SESSION['user']['diachi'];?>" required/>
                                </div>
                                <div class="form-group">
                                    <label for="soDienThoai">Số điện thoại </label>
                                    <input type="text" class="form-control" id="soDienThoai" value="<?=$_SESSION['user']['sodienthoai'];?>" required/>
                                </div>
                                <div class="form-group">
                                    <label class="order-comments" for="loiNhan">Lời nhắn</label>
                                    <textarea class="form-control" id="loiNhan" placeholder="Lưu ý cho Người bán." name="chuthich"></textarea>
                                </div>
                            <?php endif;?>
                        </li>
                    </ul>
                </div>
                <!-- End .col-lg-8 -->
                <div class="col-lg-5">
                    <div class="order-summary">
                        <h3>Thanh Toán </h3>
                        <table class="table table-bordered table-mini-cart">
                            <thead>
                                <tr>
                                    <th colspan="1">Sản phẩm </th>
                                    <th>Số lượng</th>
                                    <th>Giá sản phẩm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($item as $key => $value):?>
                                    <tr>
                                        <td class="product-col">
                                            <h3 class="product-title">
                                                <?=$value['ten_sp']?>
                                            </h3>
                                        </td>
                                        <td>
                                            <span class="product-qty"> <?=$value['quantity']?></span>
                                        </td>
                                        <td class="price-col">
                                            <span><?=$value['gia_goc']?></span>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                <tr>
                                    <td colspan="2">Tổng :</td>
                                    <td><input value="<?=(isset($_SESSION['total_price_after_discount']))?$_SESSION['total_price_after_discount']:$totalPrice?>" id="tong" class="form-control" style="border:none; outline: none; color:black; font-size:1.7rem"></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-left" colspan="2">
                                        <h4 class="m-b-sm" style="margin-bottom: 10px;"> Phí vận chuyển </h4>
                                        <fieldset onchange="vanchuyen(); Tongtien()" >
                                           
                                                <input type="radio" name="nnh" id="nhanh" checked>
                                                <label class="custom-control-label" for="nhanh" required>Nhanh</label>
                                            
                                           
                                                <input type="radio" name="nnh" id="trungbinh">
                                                <label class="custom-control-label" for="tb">Trung bình</label>
                                            
                                        </fieldset>
                                    </td>
                                    <td>
                                        <input value="30000"style="border:none; outline: none; color:black" type="text" id="phiVanChuyen" style="width:75px" name="phivanchuyen" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="thanhtoantien" class="custom-control-input" checked>
                                            <label class="custom-control-label">Sau khi nhận hàng</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-custom-control mb-0">
                                        <div class="custom-control custom-radio mb-0">
                                            <input type="radio" name="thanhtoantien" class="custom-control-input">
                                            <label class="custom-control-label">Thanh toán thẻ ghi nợ</label>
                                        </div>
                                    </div>
                                    <div class="checkout-discount"></div>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Tổng tiền</h3>
                                    </td>
                                    <td>
                                        <input type="text" name="tongtienthanhtoan" id="tonggiatien_sp" class="form-control" value="<?=(isset($_SESSION['total_price_after_discount']))?$_SESSION['total_price_after_discount']:$totalPrice?>" style="border:none; outline: none; color:black;font-size:1.8rem">
                                        <th>VND</th>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="payment-methods">

                            <h4 class="">Lưu ý </h4>
                            
                            
                                <span>
                                <input type="checkbox" name="chapnhan" id="" required>
                                   Chấp nhận các điều khoản và chính sách của chúng tôi! 
                                </span>
                           
                        </div>

                    
                        <input type="hidden" name="ma_hd" value="<?=$mahoadon?>">

                        <input name="thanhtoan" type="submit" class="btn btn-dark btn-place-order" value="Thanh toán ">
                            
                       
                    </div>
                    <!-- End .cart-summary -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
        </form>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>


        <script>
                var a=document.getElementById("tong");
    var b= document.getElementById("phiVanChuyen");
    var tongtien= Number(a.value)+Number(b.value)
  console.log(tongtien)
  document.getElementById("tonggiatien_sp").value=tongtien;
          

function vanchuyen() {
    var vanchuyen = document.getElementsByName("nnh");
    var phivanchuyen = document.getElementById("phiVanChuyen");
    
    if (vanchuyen[0].checked) {
        phivanchuyen.value = '30000';
        return;
    }
    if (vanchuyen[1].checked) {
        phivanchuyen.value = '10000';
        return;
    }
}

function Tongtien(){
    vanchuyen();
    var a=document.getElementById("tong");
    var b= document.getElementById("phiVanChuyen");
    var tongtien= Number(a.value)+Number(b.value)
  console.log(tongtien)
  document.getElementById("tonggiatien_sp").value=tongtien;
    
}



</script>






