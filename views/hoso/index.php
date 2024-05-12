<?php

?>

<main class="main">
		<div class="container account-container custom-account-container">
				<div class="row">
				<?php if(isset($listtaikhoan)){foreach( $listtaikhoan as $key =>$value){?>
					<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
						<h2 class="text-uppercase my-5"><?=$value['ten']?></h2>
						<ul class="nav nav-tabs list flex-column mb-0" role="tablist">
						  <li class="nav-item">
								<a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab"
									aria-controls="edit" aria-selected="false">Tài Khoản Của Tôi  </a>
							</li>


							<li class="nav-item">
								<a class="nav-link" href="views/dangnhap/index.php">Logout</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 order-lg-last order-1 tab-content">
					
				
			

						<div class="tab-pane fade" id="download" role="tabpanel">
							<div class="download-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-cloud-download align-middle mr-3"></i>Downloads</h3>
								<div class="download-table-container">
									<p>No downloads available yet.</p> <a href="index.php?act=danhsachsanpham"
										class="btn btn-primary text-transform-none mb-2">GO SHOP</a>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="address" role="tabpanel">
							<h3 class="account-sub-title d-none d-md-block mb-1"><i
									class="sicon-location-pin align-middle mr-3"></i>Addresses</h3>
							<div class="addresses-content">
								<p class="mb-4">
									The following addresses will be used on the checkout page by
									default.
								</p>

								<div class="row">
									<div class="address col-md-6">
										<div class="heading d-flex">
											<h4 class="text-dark mb-0">Billing address</h4>
										</div>

										<div class="address-box">
											You have not set up this type of address yet.
										</div>

										<a href="#billing" class="btn btn-default address-action link-to-tab">Add
											Address</a>
									</div>

									<div class="address col-md-6 mt-5 mt-md-0">
										<div class="heading d-flex">
											<h4 class="text-dark mb-0">
												Shipping address
											</h4>
										</div>

										<div class="address-box">
											You have not set up this type of address yet.
										</div>

										<a href="#shipping" class="btn btn-default address-action link-to-tab">Add
											Address</a>
									</div>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="edit" role="tabpanel">
							<h3 class="account-sub-title d-none d-md-block mt-0 pt-1 ml-1"><i
									class="icon-user-2 align-middle mr-3 pr-1"></i>Tài khoản </h3>
							<div class="account-content">
							
								<form action="index.php?act=capnhathoso" method="post">
									
									<div class="form-group mb-2">
										<label for="acc-text"> Họ và Tên  <span class="required">*</span></label>
										<input type="text" class="form-control" id="acc-text" name="ten"
											placeholder="Tên " required  value="<?=$value['ten']?>"/>
										
									</div>


									<div class="form-group mb-4">
										<label for="acc-email"> Địa chỉ Email  <span class="required">*</span></label>
										<input type="email" class="form-control" id="acc-email" name="email"
											placeholder="editor@gmail.com" required value="<?=$value['email']?>"/>
									</div>
									<div class="form-group mb-4">
										<label for="acc-email">Địa chỉ <span class="required">*</span></label>
										<input type="text" class="form-control" name="diachi"
											placeholder="địa chỉ cụ thể" required  value="<?=$value['diachi']?>"/>
									</div>
									<div class="form-group mb-4">
										<label for="acc-email"> Số điện thoại <span class="required">*</span></label>
										<input type="number" class="form-control" id="acc-email" name="sodienthoai"
											placeholder="0xx,xxxx,xxx" required value="<?=$value['sodienthoai']?>"/>
									</div>
									<div class="change-password">
										<h3 class="text-uppercase mb-2">Cập Nhật Mật Khẩu </h3>

										<div class="form-group">
											<label for="acc-password">Nhập mật khẩu cũ</label>
											<input type="password" class="form-control" id="acc-password"
												name="matkhau" />
										</div>

										<div class="form-group">
											<label for="acc-password">Nhập mật khẩu mới</label>
											<input type="password" class="form-control" id="acc-new-password"
												name="matkhaumoi" />
										</div>

										<div class="form-group">
											<label for="acc-password">Nhập lại mật khẩu mới</label>
											<input type="password" class="form-control" id="acc-confirm-password"
												name="nhaplaimatkhaumoi" />
										</div>
									</div>
								   			<a href="#">Bạn quên mật khẩu </a>
											   <p>Nội dung tên chỉ được thay đổi một lần duy nhất </p>
									<div class="form-footer mt-3 mb-0">
										<span   class="luuthaydoi btn btn-dark mr-0" value="Lưu thay đổi" >Lưu Thay Đổi</span>
											
									</div>
									<div class="modal fade" id="binhluanthanhcong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn thật thực chắc chắn ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Bạn có muốn thay đổi hồ sơ không </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <input type="submit" class="btn btn-dark mr-0" value="Lưu thay đổi" name="luuthaydoi">
                </div>
            </div>
        </div>
</div>

								</form>
							</div>
						</div><!-- End .tab-pane -->
					
					<?php } }?>
				

						  <div class="tab-pane fade" id="shipping" role="tabpanel">
							<div class="address account-content mt-0 pt-2">
								<h4 class="title mb-3">Shipping Address</h4>

								<form class="mb-2" action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Last name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Company </label>
										<input type="text" class="form-control">
									</div>

									<div class="select-custom">
										<label>Country / Region <span class="required">*</span></label>
										<select name="orderby" class="form-control">
											<option value="" selected="selected">British Indian Ocean Territory
											</option>
											<option value="1">Brunei</option>
											<option value="2">Bulgaria</option>
											<option value="3">Burkina Faso</option>
											<option value="4">Burundi</option>
											<option value="5">Cameroon</option>
										</select>
									</div>

									<div class="form-group">
										<label>Street address <span class="required">*</span></label>
										<input type="text" class="form-control"
											placeholder="House number and street name" required />
										<input type="text" class="form-control"
											placeholder="Apartment, suite, unit, etc. (optional)" required />
									</div>

									<div class="form-group">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>State / Country <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>Postcode / ZIP <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-footer mb-0">
										<div class="form-footer-right">
											<button type="submit" class="btn btn-dark py-4">
												Save Address
											</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- End .tab-pane -->
					</div><!-- End .tab-content -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->
		<script>
    $(document).ready(function(){
        // Bắt sự kiện khi nút "Xóa giỏ hàng" được nhấn
        $(".luuthaydoi").on("click", function(){
            // Hiển thị modal thông báo
            $("#binhluanthanhcong").modal("show");
        });
    });
</script>