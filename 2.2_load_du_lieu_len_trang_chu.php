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
			<style>
				/* 
Template Name: WebMag Html Template

Author: yaminncco

Colors:
	Body : #3d455c
	Headers : #212631
	Primary : #212631 #4BB92F #ff8700 #0078ff #8d00ff
	Dark : #212631
	Grey : #eceef2 #a7b3c6 #fbfbfd

Fonts: Nunito & Nunito-Sans

Table OF Contents
------------------------------------
GENERAL
NAVIGATION
HEADER
POST
POST PAGE
ASIDE
FOOTER
RESPONSIVE
------------------------------------*/
/*=========================================================
	GENERAL
===========================================================*/
/*----------------------------*\
	typography
\*----------------------------*/
 body {
     font-family: 'Nunito', sans-serif;
     font-size: 16px;
     font-weight: 300;
     color: #3d455c;
     margin: 0;
     padding: 0;
     overflow-x: hidden;
}
 h1, h2, h3, h4, h5, h6 {
     font-family: 'Nunito Sans', sans-serif;
     font-weight: 700;
     color: #212631;
     margin: 0px 0px 15px;
}
 h1 {
     font-size: 34px;
}
 h2 {
     font-size: 28px;
}
 h3 {
     font-size: 23px;
}
 h4 {
     font-size: 16px;
}
 a {
     font-weight: 600;
     color: #212631;
     text-decoration: none;
}
 a:hover, a:focus{
     color: #212631;
     text-decoration: underline;
     outline: none;
}
 p {
     margin: 0px 0px 20px;
}
 ul,ol{
     margin: 0;
     padding: 0;
     list-style: none 
}
 ul.list-style, ol.list-style {
     padding-left: 15px;
     margin-bottom: 10px;
}
 ul.list-style {
     list-style-type: disc;
}
 ol.list-style {
     list-style-type: decimal;
}
 blockquote.blockquote {
     position:relative;
     border-left:0;
     font-weight:600;
     margin-bottom:10px;
	 padding: 20px;
}
 blockquote.blockquote:before {
     content: "``";
     font-family: 'Nunito Sans', sans-serif;
     display: block;
     position: absolute;
     left: -5px;
     top: 5px;
     font-size: 240px;
     line-height: 200px;
     color: #eceef2;
     letter-spacing: -30px;
     z-index: -2;
}
 figure.figure-img {
     margin-bottom:20px;
}
 figure.figure-img figcaption {
     padding-top:5px;
     font-size: 13px;
     font-weight:600;
}
 .input {
     height: 40px;
     border: 2px solid #eceef2;
     width: 100%;
     padding: 0px 15px;
     -webkit-transition: 0.2s border;
     transition: 0.2s border;
}
 .input:focus {
     border-color: #3d455c;
}
 textarea.input {
     height: 90px;
     padding: 15px;
}
 .primary-button {
     padding: 9px 45px;
     border: none;
     background-color: #212631;
     font-weight: 600;
     text-transform: uppercase;
     font-size: 13px;
     color: #fff;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .primary-button:hover,.primary-button:focus {
     color: #fff;
     opacity: 0.9;
}
 .section {
     padding-top: 40px;
}
 .section.section-grey {
     background-color: #fbfbfd;
     border-bottom: 1px solid #eceef2;
     border-top: 1px solid #eceef2;
}
 .section .section-title {
     margin-bottom: 40px;
}
 .section .section-title h2 {
     text-transform: capitalize;
     font-size: 28px;
}
 .section-row {
     margin-bottom:40px;
}
/*=========================================================
	NAVIGATION
===========================================================*/
 #nav {
     height: 70px;
}
 #nav:after {
     content: "";
     position: fixed;
     left: 0;
     right: 0;
     bottom: 0;
     top: 0;
     background-color: rgba(33, 38, 49, 0.5);
     z-index: 90;
     opacity: 0;
     visibility: hidden;
     -webkit-transition: 0.2s all;
     transition: 0.2s all;
}
 #nav.shadow-active:after {
     opacity: 1;
     visibility: visible;
}
 #nav-fixed {
     position: fixed;
     left: 0;
     right: 0;
     top: 0;
     z-index: 90;
     background-color: #FFF;
     -webkit-box-shadow: 0px -1px 0px 0px #eceef2 inset;
     box-shadow: 0px -1px 0px 0px #eceef2 inset;
}
 #nav-fixed.slide-down {
     -webkit-animation: slide-down 0.3s;
     animation: slide-down 0.3s;
}
 #nav-fixed.slide-up {
     -webkit-animation: slide-up 0.3s;
     animation: slide-up 0.3s;
     -webkit-animation-fill-mode: forwards;
     animation-fill-mode: forwards;
}
 @-webkit-keyframes slide-down {
     from {
         -webkit-transform:translateY(-100%);
         transform:translateY(-100%);
    }
     to {
         -webkit-transform:translateY(0%);
         transform:translateY(0%);
    }
}
 @keyframes slide-down {
     from {
         -webkit-transform:translateY(-100%);
         transform:translateY(-100%);
    }
     to {
         -webkit-transform:translateY(0%);
         transform:translateY(0%);
    }
}
 @-webkit-keyframes slide-up {
     from {
         -webkit-transform:translateY(0%);
         transform:translateY(0%);
    }
     to {
         -webkit-transform:translateY(-100%);
         transform:translateY(-100%);
    }
}
 @keyframes slide-up {
     from {
         -webkit-transform:translateY(0%);
         transform:translateY(0%);
    }
     to {
         -webkit-transform:translateY(-100%);
         transform:translateY(-100%);
    }
}
 #nav .container {
     position: relative;
}
/*----------------------------*\
	logo
\*----------------------------*/
 .nav-logo {
     float:left;
}
 .nav-logo .logo {
     line-height: 70px;
     display:inline-block;
}
 .nav-logo .logo > img {
     width: 100%;
     max-height: 70px;
}
/*----------------------------*\
	menu
\*----------------------------*/
 .nav-menu {
     margin-left: 20px;
}
 .nav-menu li a {
     position: relative;
     padding: 25px 20px;
     text-transform: capitalize;
     -webkit-box-shadow: -1px 0px 0px 0px #eceef2 inset;
     box-shadow: -1px 0px 0px 0px #eceef2 inset;
     -webkit-transition: 0.2s color;
     transition: 0.2s color;
}
 .nav-menu li:first-child a {
     border-left: 1px solid #eceef2;
}
 .nav-menu li a:after {
     content: '';
     position: absolute;
     left: 0;
     right: 0;
     bottom: 0px;
     width: 100%;
     height: 4px;
     -webkit-transition: 0.2s width;
     transition: 0.2s width;
}
 .nav-menu li.cat-1 a:after {
     background-color: #4BB92F;
}
 .nav-menu li.cat-2 a:after {
     background-color: #ff8700;
}
 .nav-menu li.cat-3 a:after {
     background-color: #0078ff;
}
 .nav-menu li.cat-4 a:after {
     background-color: #8d00ff;
}
 .nav-menu li a:hover, .nav-menu li a:focus {
     background-color: transparent;
     text-decoration: none;
}
 .nav-menu li.cat-1 a:hover, .nav-menu li.cat-1 a:focus {
     color: #4BB92F;
}
 .nav-menu li.cat-2 a:hover, .nav-menu li.cat-2 a:focus {
     color: #ff8700;
}
 .nav-menu li.cat-3 a:hover, .nav-menu li.cat-3 a:focus {
     color: #0078ff;
}
 .nav-menu li.cat-4 a:hover, .nav-menu li.cat-4 a:focus {
     color: #8d00ff;
}
/*----------------------------*\
	search
\*----------------------------*/
 .nav-btns {
     float:right;
}
 .nav-btns > button {
     padding: 25px 25px;
     border: none;
     line-height: 20px;
     background: transparent;
}
 .nav-btns .search-form {
     position: absolute;
     left: 0;
     right: 0;
     top: 0;
     bottom: 0px;
     padding: 0px 15px;
     opacity: 0;
     visibility: hidden;
     -webkit-transition: 0.3s all;
     transition: 0.3s all;
}
 .nav-btns .search-form.active {
     opacity: 1;
     visibility: visible;
}
 .nav-btns .search-form .search-input {
     height: 100%;
     width: 100%;
     border: none;
     background: #FFF;
     padding: 0px;
     font-weight: 600;
}
 .nav-btns .search-form .search-close {
     position: absolute;
     top: 50%;
     right: 15px;
     -webkit-transform: translateY(-50%);
     -ms-transform: translateY(-50%);
     transform: translateY(-50%);
     border: none;
     background: transparent;
     line-height: 20px;
     color: #212631;
     font-size: 22px;
     padding: 0;
}
/*----------------------------*\
	nav aside
\*----------------------------*/
 #nav-aside {
     position: fixed;
     right: 0;
     top: 0;
     bottom: 0;
     background-color: #fff;
     max-width: 360px;
     width: 100%;
     padding: 80px 20px;
     overflow-y: scroll;
     z-index: 99;
     -webkit-transform: translateX(100%);
     -ms-transform: translateX(100%);
     transform: translateX(100%);
     -webkit-transition: 0.3s all;
     transition: 0.3s all;
}
 #nav-aside.active {
     -webkit-transform: translateX(0%);
     -ms-transform: translateX(0%);
     transform: translateX(0%);
}
 .nav-aside-menu li a {
     font-family: 'Nunito Sans', sans-serif;
     font-weight:700;
     font-size:23px;
}
 .nav-aside-social li {
     display: inline-block;
}
 .nav-aside-social li > a {
     display: block;
     width: 30px;
     height: 30px;
     line-height: 30px;
     text-align: center;
     background-color: #212631;
     color: #FFF;
     border-radius: 2px;
     margin-right: 5px;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .nav-aside-social li > a:hover, .nav-aside-social li > a:focus {
     opacity: 0.9;
}
 .nav-aside-close {
     position: absolute;
     top: 0px;
     right: 0px;
     height: 70px;
     width: 70px;
     line-height: 70px;
     text-align: center;
     background-color: transparent;
     color: #212631;
     border: none;
     font-size: 22px;
     border-radius: 50%;
     padding: 0;
}
/*=========================================================
	HEADER
===========================================================*/
 .page-header {
     position: relative;
     margin: 0;
	 padding-top: 60px;
     padding-bottom: 60px;
     background-color: #fbfbfd;
     border-bottom: 2px solid #F4f4f9;
}
 .page-header .background-img {
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-position: center;
     background-size: cover;
}
 .page-header .background-img:after {
     content: '';
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(33, 38, 49, 0.3)), to(transparent));
     background-image: linear-gradient(to top, rgba(33, 38, 49, 0.3) 0%, transparent 100%);
}
 #post-header.page-header {
     padding-top: 120px;
}
 .page-header h1 {
     text-transform: capitalize;
     margin-bottom: 0px;
}
 #post-header.page-header h1 {
     color: #FFF;
}
 .page-header .post-meta {
     margin: 15px 0px;
}
 .page-header .post-meta .post-date {
     color: #eceef2;
}
 .page-header .page-header-breadcrumb {
     margin: 15px 0px;
}
 .page-header .page-header-breadcrumb li {
     display: inline-block;
}
 .page-header .page-header-breadcrumb li, .page-header .page-header-breadcrumb li a {
     font-size: 13px;
     text-transform: capitalize;
     color: #a7b3c6;
}
 .page-header .page-header-breadcrumb li a {
     -webkit-transition: 0.2s color;
     transition: 0.2s color;
}
 .page-header .page-header-breadcrumb li a:hover, .page-header .page-header-breadcrumb li a:focus {
     color: #0b0f28;
     text-decoration: none;
}
 .page-header .page-header-breadcrumb li + li:before {
     content: '/';
     display: inline-block;
     margin: 0px 10px;
}
/*=========================================================
	POST
===========================================================*/
/*----------------------------*\
	post
\*----------------------------*/
 .post {
     margin-bottom: 40px;
}
 .post .post-img {
     display: block;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .post .post-img:hover, .post .post-img:focus {
     opacity: 0.9;
}
 .post .post-img > img {
     width: 100%;
}
 .post .post-meta {
     margin-top: 15px;
     margin-bottom: 15px;
}
 .post-meta .post-category {
     font-size: 13px;
     text-transform: uppercase;
     padding: 3px 10px;
     font-weight: 600;
     border-radius: 2px;
     margin-right: 15px;
     color: #FFF;
     background-color: #212631;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .post-meta .post-category:hover, .post-meta .post-category:focus {
     text-decoration: none;
     opacity: 0.9;
}
 .post-meta .post-category.cat-1 {
     background-color: #4BB92F;
}
 .post-meta .post-category.cat-2 {
     background-color: #ff8700;
}
 .post-meta .post-category.cat-3 {
     background-color: #8d00ff;
}
 .post-meta .post-category.cat-4 {
     background-color: #0078ff;
}
 .post-meta .post-date {
     font-size: 13px;
     font-weight: 600;
}
 .post .post-title {
     font-size: 18px;
     margin-bottom: 0px;
}
 .post-tags li {
     display:inline-block;
     margin-right:3px;
     margin-bottom:5px;
}
 .post-tags li a {
     display:block;
     color:#fff;
     background-color: #212631;
     padding:3px 10px;
     font-weight:600;
     border-radius:2px;
     -webkit-transition:0.2s opacity;
     transition:0.2s opacity;
}
/*----------------------------*\
	post thumb
\*----------------------------*/
 .post.post-thumb {
     position: relative;
}
 .post.post-thumb .post-img:after {
     content: '';
     position: absolute;
     left: 0;
     right: 0;
     bottom: 0;
     top: 0;
     background: -webkit-gradient(linear, left bottom, left top, from(rgba(33, 38, 49, 0.3)), to(transparent));
     background: linear-gradient(to top, rgba(33, 38, 49, 0.3) 0%, transparent 100%);
}
 .post.post-thumb .post-body {
     position: absolute;
     bottom: 0px;
     padding: 20px 15px;
}
 .post.post-thumb .post-meta .post-date {
     color: #eceef2;
}
 .post.post-thumb .post-title {
     font-size: 22px;
}
 .post.post-thumb .post-title > a {
     color: #FFF;
}
/*----------------------------*\
	post widget
\*----------------------------*/
 .post.post-widget:after {
     content: '';
     display: block;
     clear: both;
}
 .post.post-widget .post-img {
     width: 90px;
     float: left;
     margin-right: 15px;
}
 .post.post-widget .post-img img {
     width: 100%;
}
 .post.post-widget .post-title {
     font-size: 18px;
}
/*----------------------------*\
	post row
\*----------------------------*/
 .post.post-row:after {
     content: '';
     display: block;
     clear: both;
}
 .post.post-row .post-img {
     width: 40%;
     float: left;
}
 .post.post-row .post-body {
     margin-left: calc(40% + 30px);
}
 .post.post-row .post-meta {
     margin-top: 0px;
}
 .post.post-row .post-title {
     margin-bottom: 15px;
}
/*=========================================================
	POST PAGE
===========================================================*/
 .sticky-container {
     position: relative;
     padding-left: 80px;
}
 .sticky-container .sticky-shares {
     position: absolute;
     top: 0;
     left: 0;
}
 .sticky-shares a {
     display: block;
     margin-bottom: 10px;
     width: 40px;
     height: 40px;
     line-height: 40px;
     text-align: center;
     border-radius: 50%;
     background-color: #fbfbfd;
     color: #a7b3c6;
     border: 1px solid #eceef2;
     -webkit-transition: 0.2s all;
     transition: 0.2s all;
}
 .sticky-shares a:hover {
     -webkit-transform: scale(1.3);
     -ms-transform: scale(1.3);
     transform: scale(1.3);
}
 .sticky-shares a.share-facebook:hover {
     color: #3b5998;
     border-color: #3b5998;
}
 .sticky-shares a.share-twitter:hover {
     color: #55acee;
     border-color: #55acee;
}
 .sticky-shares a.share-google-plus:hover {
     color: #dd4b39;
     border-color: #dd4b39;
}
 .sticky-shares a.share-pinterest:hover {
     color: #ff0000;
     border-color: #ff0000;
}
 .sticky-shares a.share-linkedin:hover {
     color: #007bb5;
     border-color: #007bb5;
}
/*----------------------------*\
	author
\*----------------------------*/
 .post-author .media .media-left {
     padding-right: 40px;
}
 .post-author .media .media-left .media-object {
     width:120px;
     border-radius: 50%;
}
 .post-author .author-social {
     margin-top:15px;
}
 .post-author .author-social li {
     display: inline-block;
     margin-right: 5px;
}
 .post-author .author-social li > a {
     display: block;
     width: 30px;
     height: 30px;
     line-height: 30px;
     text-align: center;
     background-color: #a7b3c6;
     color: #FFF;
     border-radius: 2px;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .post-author .author-social li > a:hover, .post-author .author-social li > a:focus {
     color: #FFF;
     opacity: 0.9;
}
/*----------------------------*\
	comments
\*----------------------------*/
 .post-comments .media {
     padding-top: 15px;
     border-top: 1px solid #eceef2;
}
 .post-comments .media:nth-child(1) {
     padding-top: 0px;
     border-top: none;
}
 .post-comments .media .media-left {
     padding-right: 15px;
}
 .post-comments .media .media-left .media-object {
     width:70px;
     border-radius: 50%;
}
 .post-comments .media .media-body .media-heading h4 {
     text-transform: capitalize;
}
 .post-comments .media .media-body .media-heading .time {
     font-size: 13px;
     margin-right: 15px;
     color: #a7b3c6;
}
 .post-comments .media .media-body .media-heading .reply {
     font-size: 13px;
     color: #a7b3c6;
     -webkit-transition: 0.2s color;
     transition: 0.2s color;
}
 .post-comments .media .media-body .media-heading .reply:hover, .post-comments .media .media-body .media-heading .reply:focus {
     color: #212631;
     text-decoration: none;
}
/*=========================================================
	Aside
===========================================================*/
 .aside-widget {
     margin-bottom: 40px;
}
/*----------------------------*\
	category
\*----------------------------*/
 .category-widget ul li {
     display:block;
     padding-bottom: 10px;
     border-bottom: 1px solid #eceef2;
}
 .category-widget ul li + li {
     margin-top:10px;
}
 .category-widget ul li > a {
     display:block;
     -webkit-transition:0.2s color;
     transition:0.2s color;
}
 .category-widget ul li > a > span {
     float:right;
     color:#fff;
     background-color: #212631;
     padding:0px 5px;
     font-weight:600;
     border-radius:2px;
}
 .category-widget ul li > a.cat-1 > span {
     background-color: #4BB92F;
}
 .category-widget ul li > a.cat-2 > span {
     background-color: #ff8700;
}
 .category-widget ul li > a.cat-3 > span {
     background-color: #8d00ff;
}
 .category-widget ul li > a.cat-4 > span {
     background-color: #0078ff;
}
 .category-widget ul li > a:hover, .category-widget ul li > a:focus {
     text-decoration:none;
}
 .category-widget ul li > a.cat-1:hover, .category-widget ul li > a.cat-1:focus {
     color: #4BB92F;
}
 .category-widget ul li > a.cat-2:hover, .category-widget ul li > a.cat-2:focus {
     color: #ff8700;
}
 .category-widget ul li > a.cat-3:hover, .category-widget ul li > a.cat-3:focus {
     color: #0078ff;
}
 .category-widget ul li > a.cat-4:hover, .category-widget ul li > a.cat-4:focus {
     color: #8d00ff;
}
/*----------------------------*\
	tags
\*----------------------------*/
 .tags-widget ul li {
     display:inline-block;
     margin-right:3px;
     margin-bottom:5px;
}
 .tags-widget ul li a {
     display:block;
     color:#fff;
     background-color: #212631;
     padding:3px 10px;
     font-weight:600;
     border-radius:2px;
     -webkit-transition:0.2s opacity;
     transition:0.2s opacity;
}
 .tags-widget ul li a:hover, .tags-widget ul li a:focus {
     opacity:0.9;
     color:#fff;
     text-decoration:none;
}
/*----------------------------*\
	archive
\*----------------------------*/
 .archive-widget ul li {
     display:block;
     padding-bottom: 10px;
     border-bottom: 1px solid #eceef2;
}
 .archive-widget ul li + li {
     margin-top:10px;
}
 .archive-widget ul li > a {
     display:block;
}
/*=========================================================
	FOOTER
===========================================================*/
 #footer {
     padding-bottom: 40px;
     margin-top: 40px;
}
 #footer .container {
     padding-top: 80px;
     border-top: 1px solid #F4f4f9;
}
 .footer-widget {
     margin-bottom: 40px;
}
 .footer-widget .footer-title {
     margin-bottom: 40px;
     text-transform: capitalize;
     font-size: 18px;
}
 .footer-widget a {
     color: #a7b3c6;
     -webkit-transition: 0.2s color;
     transition: 0.2s color;
}
 .footer-widget a:hover, .footer-widget a:focus {
     text-decoration: none;
     color: #212631;
}
 .footer-logo {
     margin-bottom: 40px;
}
 .footer-nav li {
     display: inline-block;
     margin-right: 15px;
}
 .footer-links li + li {
     margin-top: 5px;
}
 .footer-copyright {
     margin-top: 20px;
     color: #a7b3c6;
     font-size: 13px;
}
 .footer-newsletter form {
     position: relative;
}
 .footer-newsletter form > input.input {
     padding-right: 55px;
}
 .footer-newsletter form > .newsletter-btn {
     position: absolute;
     top: 0;
     right: 0;
     height: 40px;
     line-height: 40px;
     width: 40px;
     text-align: center;
     color: #a7b3c6;
     background: transparent;
     border: none;
     border-radius: 0px 2px 2px 0px;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .footer-newsletter form > .newsletter-btn:hover {
     opacity: 0.9;
}
 .footer-social {
     margin-top: 20px;
}
 .footer-social li {
     display: inline-block;
     margin-right: 5px;
}
 .footer-social li > a {
     display: block;
     width: 30px;
     height: 30px;
     line-height: 30px;
     text-align: center;
     background-color: #a7b3c6;
     color: #FFF;
     border-radius: 2px;
     -webkit-transition: 0.2s opacity;
     transition: 0.2s opacity;
}
 .footer-social li > a:hover, .footer-social li > a:focus {
     color: #FFF;
     opacity: 0.9;
}
/*=========================================================
	RESPONSIVE
===========================================================*/
 @media only screen and (max-width: 991px) {
     #nav .nav-menu {
         display: none;
    }
}
 @media only screen and (max-width: 767px) {
	 .page-header h1 {
		 font-size: 28px;
	}
     .post.post-row .post-img {
         width: 100%;
         float: none;
    }
     .post.post-row .post-body {
         margin-left: 0px;
    }
     .post.post-row .post-meta {
         margin-top: 15px;
    }
     .post.post-row .post-body p {
         display:none;
    }
}

			</style>
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
