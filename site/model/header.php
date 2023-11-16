 <section id="top">
 	<div class="container">
 		<div class="row top_1">
 			<div class="col-md-3">
 				<div class="top_1l pt-1">
 					<h3 class="mb-0"><a class="text-white" href="<?=$ROOT_URL?>"><i class="fa fa-video-camera col_red me-1"></i> MBT Cinema</a></h3>
 				</div>
 			</div>
 			<div class="col-md-5">
 				<div class="top_1m">
 					<div class="input-group">
 						<input type="text" class="form-control bg-black" placeholder="nhập tìm kiếm...">
 						<span class="input-group-btn">
 							<button class="btn btn text-white bg_red rounded-0 border-0" type="button">
 								tìm kiếm</button>
 						</span>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-4">
 				<div class="top_1r text-end">
 					<ul class="social-network social-circle mb-0">
 						<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
 						<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
 						<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
 						<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
 						<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

 <section id="header">
 	<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
 		<div class="container">
 			<a class="navbar-brand text-white fw-bold" href="index.html"><i class="fa fa-video-camera col_red me-1"></i> Planet</a>
 			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="navbar-toggler-icon"></span>
 			</button>
 			<div class="collapse navbar-collapse" id="navbarSupportedContent">
 				<ul class="navbar-nav mb-0">
 					<li class="nav-item">
 						<a class="nav-link active" aria-current="page" href="index.html">Trang chủ</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="about.html">Lịch chiếu</a>
 					</li>
 					<li class="nav-item dropdown">
 						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
 							Phim
 						</a>
 						<ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
 							<li><a class="dropdown-item" href="<?=$ROOT_URL?>?list-ticket">Đang chiếu</a></li>
 							<li><a class="dropdown-item border-0" href="blog_detail.html">Sắp chiếu</a></li>
 						</ul>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="services.html">khuyến mãi / sự kiện</a>
 					</li>


 					<?php
						if (isset($_SESSION['user'])) {
							echo '<li class="nav-item">
									<a class="nav-link" href="' . $SITE_URL . '/controller/customer.php?logout">Đăng xuất</a>
								</li>';
						} else {
							echo '<li class="nav-item">
							<a class="nav-link" href="?login">Đăng nhập</a>
						</li>';
							echo '<li class="nav-item">
						<a class="nav-link" href="?register">Đăng ký</a>
					</li>';
						}
						?>

 				</ul>
 			</div>
 		</div>
 	</nav>
 </section>