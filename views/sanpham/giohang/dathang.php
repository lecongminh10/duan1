
<main class="main">
		<div class="container account-container custom-account-container">
				<div class="row">
					<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
						<ul class="nav nav-tabs list flex-column mb-0" role="tablist">
							<li class="nav-item">
								<h3><a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab"
									aria-controls="order" aria-selected="true"><i
										class="sicon-social-dropbox align-middle mr-3"></i>Đơn Mua </a></h3>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 order-lg-last order-1 tab-content">
					
					
						<div class="tab-pane fade  show" id="order" role="tabpanel">
							<div class="order-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-social-dropbox align-middle mr-3"></i>Đơn mua </h3>
								<div class="order-table-container text-center">
									<table class="table table-order text-left">
										<thead>
											<tr>
												
                                                <th class="order-id">Mã hóa đơn </th>
												<th class="order-date">Tên sản phẩm </th>
												<th class="order-status">Ảnh</th>
												<th class="order-price">Số lượng</th>
												<th class="order-price">Giá </th>
												<th class="order-action">Tổng tiền</th>
												<th class="order-action">Quá trình </th>
											</tr>
										</thead>
										<tbody>
                                            
											<?php foreach( $danhsachhoadon as $key => $value ) : 

												if($value['xuly']==0){
													$tam= "Chờ xác nhận ";
												}
												else if($value["xuly"]== 1){
														$tam= "Đã Xác Nhận ";
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

												
                                            
											<?php if($key== 0):?>
												<tr>
													<td class="" colspan="7">
														<a href="index.php?act=xemdonhang&ma_hd=<?=$value['ma_hd'];?>"><?=$value['ma_hd'];?></a>
													</td>
												</tr>
											<?php elseif( $value['ma_hd'] != $danhsachhoadon[$key-1]['ma_hd']):  ?>
												<tr>
													<td class="" colspan="7">
														<a href="index.php?act=xemdonhang&ma_hd=<?=$value['ma_hd'];?>"><?=$value['ma_hd'];?></a>
													</td>
												</tr>
											<?php endif; ?>

											<tr>
												<td></td>
												<td class="" >
													<a href="index.php?act=chitietsanpham&id_sp=<?=$value['id_sp'];?>"><?=$value['ten_sp'];?></a>
												</td>
												<td class="">
													<img style="width:100px ; height:100px" src="views/admin/view/upload/<?=$value['anh_sp'];?>" alt="">
												</td>
												<td class="">
													<?=$value['soluong'];?>
												</td>
												<td class="">
													<?=$value['gia_goc'];?>
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
									<hr class="mt-0 mb-3 pb-2" />

									<a href="index.php?act=sanpham" class="btn btn-dark">Go Shop</a>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="download" role="tabpanel">
							<div class="download-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-cloud-download align-middle mr-3"></i>Downloads</h3>
								<div class="download-table-container">
									<p>No downloads available yet.</p> <a href="category.html"
										class="btn btn-primary text-transform-none mb-2">GO SHOP</a>
								</div>
							</div>
						</div><!-- End .tab-pane -->

					


					<!-- End .tab-pane -->

						  
					</div><!-- End .tab-content -->
				</div>

			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main>
