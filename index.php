<?php 
	// tạo kết nối đến CSDL
	$conn = new mysqli("localhost","root"," ","blog");
	// load category 
	$category = "SELECT * FROM categories";
	$result_category = $conn ->query($category);
	$categories = array();
	while($row = $result_category -> fetch_assoc())
	{
		$categories[] = $row;
	}
	// end category
    //câu lệnh truy vấn
	$query = "SELECT * FROM `posts` ORDER BY created DESC LIMIT 3";
    //câu lệnh thực thi
    $result = $conn->query($query);
    // tạo mảng chứa cơ sở dữ liệu
    $post = array();
    while($row = $result ->fetch_assoc()) {
		$post[] = $row;
	}
	//câu lệnh truy vấn
	$query_recent = "SELECT * FROM `posts` ORDER BY created DESC LIMIT 4,1";
    //câu lệnh thực thi
    $result = $conn->query($query_recent);
    // tạo mảng chứa cơ sở dữ liệu
    $query_post = array();
    while($row = $result ->fetch_assoc()) {
		$query_post[] = $row;
	}
	//câu lệnh truy vấn
	$query_recent1 = "SELECT * FROM `posts` ORDER BY created DESC LIMIT 5,6";
    //câu lệnh thực thi
    $result = $conn->query($query_recent1);
    // tạo mảng chứa cơ sở dữ liệu
    $query_post1 = array();
    while($row = $result ->fetch_assoc()) {
		$query_post1[] = $row;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Cộng Đồng Thiết Kế Đồ Họa</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.php" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							
							<?php 
								$i=1;
								foreach($categories as $cate)
								{
							?>
							<li class="cat-<?=$i?>"><a href="category.php?id=<?= $cate['id']?>&cate=<?=$cate['title'] ?>"?><?= $cate['title'] ?></a></li>
							<?php $i++; }?>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="index.php">Trang Chủ</a></li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
					<div class="section-row">
						<h3>Bài Viết Gần Đây</h3>
						<?php
						 foreach($post as $noidung) {
							
					?>
						<div class="post post-widget">
							<a class="post-img" href="blog-post.php"><img src="<?php echo $noidung['thumbnail'];?>" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.php"><?php echo $noidung['title'];?></a></h3>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- /widget posts -->

					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Tin Mới Nhất</h2>
							
						</div>
					</div>
					<?php
						 foreach($post as $noidung) {
							
					?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.php"><img src="<?php echo $noidung['thumbnail'];?>" alt="" width="100%" height="100%"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-4" href="category.php"></a>
									<span class="post-date"><?php echo $noidung['created'];?></span>
								</div>
								<h3 class="post-title"><a href="blog-post.php?id=<?= $noidung['id'];?>"><?php echo $noidung['title'];?></a></h3>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- /post -->

						
						 <!-- row -->
							<!-- post -->
							<!-- row -->
							<?php
						 foreach($query_post as $noidung1) {
							
					?>
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="blog-post.php"><img src="<?php echo $noidung1['thumbnail'];?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="category.php"></a>
											<span class="post-date"><?php echo $noidung1['created'];?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?= $noidung1['id'];?>"><?php echo $noidung1['title'];?></a></h3>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- /post -->
							<!-- row -->
					<?php
						 foreach($query_post1 as $noidung2) {	
					?>		
				<div class="row">	
					<!-- post -->
					
					<!-- post -->
					<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.php"><img src="<?php echo $noidung2['thumbnail'];?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="category.php"></a>
											<span class="post-date"><?php echo $noidung2['created'];?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?= $noidung2['id'];?>"><?php echo $noidung2['title'];?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } ?>
				</div>
				

							
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.php" class="logo"><img src="./img/logo.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									<ul class="footer-links">
									<?php 
										$i=1;
										foreach($categories as $cate)
									{
									?>
									<li class="cat-<?=$i?>"><a href="category.php?id=$cate['id']"><?= $cate['title'] ?></a></li>
									<?php $i++; }?>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Join our Newsletter</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Enter your email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
