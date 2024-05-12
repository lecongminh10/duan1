<?php
extract($chitietdonhang);


?>
<main class="main">
		<div class="container account-container custom-account-container">
				<div class="row">
					<!-- <div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
						<ul class="nav nav-tabs list flex-column mb-0" role="tablist">
							<li class="nav-item">
								<h3><a class="nav-link active" id="order-tab" data-toggle="tab" href="#order" role="tab"
									aria-controls="order" aria-selected="true"><i
										class="sicon-social-dropbox align-middle mr-3"></i>Xem hóa đơn chi tiết </a></h3>
							</li>
						</ul>
					</div> -->
					<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
						<h2 class="text-uppercase"></h2>
						<ul class="nav nav-tabs list flex-column mb-0" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="order-tab" data-toggle="tab" href="#order"
									role="tab" aria-controls="dashboard" aria-selected="true">Xem hóa đơn chi tiết </a>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 order-lg-last order-1 tab-content">
						<div class="tab-pane fade show active" id="dashboard" role="tabpanel">
							<div class="dashboard-content">
								<!-- Hôm nay là thứ 2s -->
								<h5 class="account-sub-title d-none d-md-block"><i
					class="sicon-social-dropbox align-middle mr-3"></i>Mã đơn hàng <?=$ma_hd?></h5>
			<div class="order-table-container text-center">
				<table class="table table-order text-left">
					<thead>
						<tr>
							
						  
							<th class="order-date">Tên sản phẩm </th>
							<th class="order-status">Ảnh</th>
							<th class="order-price">Số lượng</th>
							<th class="order-price">Giá sản phẩm </th></th>
							<th class="order-action">Tổng tiền</th>
							<th class="order-action">Quá trình </th>
							<th>Nút </th>

						</tr>
					</thead>
					<tbody>
						
						<?php foreach($chitietdonhang as $key => $value ) : 

							if($value['xuly']==0){
								$tam= "Chờ xác nhận ";
								$huy="Hủy đơn hàng ";
							}
							else if($value["xuly"]== 1){
									$tam= "Đã Xác Nhận ";
									$huy="Hủy đơn hàng ";
							}
							else if($value["xuly"]== 2){
								$tam= "Đang giao ";
							}
							else if($value["xuly"]== 3){

								$tam= "Hoàn thành";
							}
							else{
								$tam= "Đã hủy";
							}
							
							?>	

							
						<tr>

							<td class="">
								<a href="index.php?act=chitietsanpham&id_sp=<?=$value['id_sp'];?>"><?=$value['ten_sp'];?></a>
							</td>
							<td class="">
								<img style="width:100px ; height:100px" src="views/admin/view/upload/<?=$value['anh_sp'];?>" alt="">
							</td>
							<td class="">
								<?=$value['soluong'];?>
							</td>
							<td class="">
								<?=$value['dongia'];?>
							</td>
							<td class="">
								<?=$value['tongtien'];?>
							</td>
							<td>
								<?php if($value["xuly"]==3){
										echo '<a href ="index.php?act=danhgiadonhang&id_sp='.$value['id_sp'].'"> '.$tam.' </a>';
								}else{
									echo "$tam";
								}
								?>
								

							</td>
							<td>
							<?php if($value["xuly"]==0  ||$value["xuly"]==1 ){
										echo '<a href ="index.php?act=huydonhang&id_chitiethoadon='.$value['id_chitiethoadon'].'"> '.$huy.' </a>';
								}
							?>
							</td>
							
						</tr>
						<?php endforeach; ?>
						<tr>
							<td class="text-center p-0" colspan="5">
								<p class="mb-5 mt-5">
								<?php if(!isset($_SESSION['user'])) echo 'Vui lòng đăng nhập để xem đơn hàng ';?>
								</p>
							</td>
						</tr>
						

					   
					</tbody>

				</table>
						
				<table class="table table-order text-left">
<tbody>

<tr>
<th scope="row">Người nhận hàng</th>
<td><?=$ten?></td>
</tr>
<tr>
<th scope="row">Địa chỉ nhận hàng</th>
<td><?=$value['diachi']?></td>
</tr>
<tr>
<th scope="row">Phí vận chuyển </th>
<td><?=$value['vanchuyen']?></td>  
</tr>
<tr>
<th scope="row">Thời gian đặt hàng  </th>
<td><?=$value['ngaydatdon']?></td>  
</tr>
<tr>
<th scope="row">Số điện thoại</th>
<td><?=$value['sodienthoai']?></td>
</tr>
</tbody>
</table>
							</div>
						</div><!-- End .tab-pane -->

						
						</div><!-- End .tab-pane -->
					</div><!-- End .tab-content -->
				</div>

			</div>

			<div class="mb-5"></div><!-- margin -->
		</main>
