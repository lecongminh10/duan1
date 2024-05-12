<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ol>
				</div><!-- End .container -->
			</nav>


			<div class="container">
				<div class="">
					<div class="row">
						<div class="blog-section row">
							<?php foreach($listbaiviet as $key =>$value){?>
							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="#">
											<img src="views/admin/view/upload/<?=$value['anh1']?> "alt="Post" width="225"
												height="280">
										</a>
										
									</div><!-- End .post-media -->

									<div class="post-body">
							
										<div class="post-content">
											<p>
											<?=$value['noidung1']?>
											</p>
										</div><!-- End .post-content -->
										<a href="single.html" class="post-comment">0 Comments</a>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="#">
											<img src="views/admin/view/upload/<?=$value['anh2']?>" alt="Post" width="225"
												height="280">
										</a>
								
									</div><!-- End .post-media -->

									<div class="post-body">
										
										<div class="post-content">
											<p>
											<?=$value['noidung2']?>
											</p>
										</div><!-- End .post-content -->
										<a href="single.html" class="post-comment">0 Comments</a>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
							<div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="#">
											<img src="views/admin/view/upload/<?=$value['anh3']?>" alt="Post" width="225"
												height="280">
										</a>
									
									</div><!-- End .post-media -->

									<div class="post-body">
										
										<div class="post-content">
											<p><?=$value['noidung3']?></p>
										</div><!-- End .post-content -->
										<a href="single.html" class="post-comment">0 Comments</a>
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
						
							<?php }?>

                           

                            

						</div>
					</div><!-- End .col-lg-9 -->
<div class="sidebar-toggle custom-sidebar-toggle">
						<i class="fas fa-sliders-h"></i>
					</div>
					<div class="sidebar-overlay"></div>
					<aside class="sidebar mobile-sidebar col-lg-3">
						<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
						

						</div><!-- End .sidebar-wrapper -->
					</aside>
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->