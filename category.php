<?php 
	require_once('conn.php');
	// load category 
	$category = "SELECT * FROM categories";
	$result_category = $conn ->query($category);
	$categories = array();
	while($row = $result_category -> fetch_assoc())
	{
		$categories[] = $row;
	}
	// end category
	$id =1;

	if(isset($_GET["id"]))
 	 {
		$id = $_GET["id"];
	  }
	  if(isset($_GET["categories"]))
 	 {
		$cat = $_GET["categories"];
	  }
	
	//câu lệnh truy vấn
	$query_recent = "SELECT p.*,c.title as 'categories' FROM posts p LEFT JOIN categories c on p.category_id = c.id WHERE p.status = 1 and p.category_id= ".$id." ORDER BY p.created DESC LIMIT 10;";
    //câu lệnh thực thi
	$recent = $conn->query($query_recent);
    // tạo mảng chứa cơ sở dữ liệu
    $query_category= array();
    while($row = $recent ->fetch_assoc()) {
		$query_category[] = $row;
	}
	$cat = $_GET['cate'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title><?=$cat?></title>

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
							<li class="cat-<?=$i?>"><a href="category.php?id=<?= $cate['id']?>&cate=<?=$cate['title'] ?>"><?= $cate['title'] ?></a></li>
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
						<h3>Recent Posts</h3>
						<div class="post post-widget">
							<a class="post-img" href="blog-post.php"><img src="./img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.php">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.php"><img src="./img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.php">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.php"><img src="./img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.php">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
							</div>
						</div>
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
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="index.php">Trang Chủ</a></li>
								<li><?=$cat?></li>
							</ul>
							<h1><?=$cat ?></h1>
							
						</div>
						
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
										
							<!-- post -->
							
							?>
							<?php
								foreach($query_category as $cate1)
								{
							?>
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.php"><img src="<?=$cate1['thumbnail'];?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="#"><?=$cate1['categories']; ?></a>
											<span class="post-date"><?=  $cate1['created']; ?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?= $cate1['id'];?>"><?=$cate1['title'];?></a></h3>
									</div>
								</div>
							</div>
							<?php }?>
					
							
							<!-- /post -->

							
							
							<div class="clearfix visible-md visible-lg"></div>
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
								<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
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
