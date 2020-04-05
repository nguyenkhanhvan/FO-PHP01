<?php 
    // tạo kết nối đến CSDL
    $conn = new mysqli("localhost","root"," ","blog");
    //câu lệnh truy vấn
    $query = "SELECT * FROM `posts`";
    //câu lệnh thực thi
    $result = $conn->query($query);
    // tạo mảng chứa cơ sở dữ liệu
    $post = array();
    while($row = $result ->fetch_assoc()) {
        $post[] = $row;
    }
   

?>
<?php 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>WebMag HTML Template</title>

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
							<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="category.html">News</a></li>
							<li><a href="category.html">Popular</a></li>
							<li class="cat-1"><a href="category.html">Giải Trí</a></li>
							<li class="cat-2"><a href="category.html">Âm Nhạc</a></li>
							<li class="cat-3"><a href="category.html">Phim Ảnh</a></li>
							<li class="cat-4"><a href="category.html">Ẩm Thực</a></li>
						</ul>
						<!-- /nav -->
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
							<a class="post-img" href="blog-post.html"><img src="<?php echo $noidung['thumbnail'];?>" alt="" width="100%" height="100%"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html">Web Design</a>
									<span class="post-date"><?php echo $noidung['created'];?></span>
								</div>
								<h3 class="post-title"><a href="blog-post.html"><?php echo $noidung['title'];?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

						 <?php } ?>
  </body>
