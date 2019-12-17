<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('public/layout/frontend')}}/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Cabin&display=swap');
	</style>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Bree+Serif&display=swap');
	</style>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap');
	</style>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Lobster&display=swap');
	</style>
	<style >
		
	</style>
	<title>JH Shop - @yield('title')</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>    
	<!-- header -->
	<header id="header" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						<a href="{{asset('/')}}" style="text-decoration: none"><h1 style="font-family: 'Lobster', cursive !important; text-decoration: none;  color:white">JH-Shop</h1></a>						
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>			
					</h1>
				</div>
				<div id="search" class="col-md-7 col-sm-12 col-xs-12">
					<form class="navbar-form" role="search" method="get" action="{{asset('search/')}}">
						<input type="text" name="result" class="form-control" placeholder="Search" style="border-radius: 5px 0 0 5px ;">
						<input type="submit" name="submit" value="Tìm Kiếm" style="color:#054a6a; border-radius: 0 5px 5px 0;" class="btn btn-default">
					</form>
					<a class="admin" style="text-decoration: none; line-height: 98px; color: white; margin-left: 170px; font-weight: bold;" href="{{asset('/login')}}">Admin</a>
				</div>
				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="{{asset('cart/show')}}">Giỏ hàng</a>
					<a href="{{asset('cart/show')}}" style="color:#054a6a;">{{Cart::count()}}</a>				    
				</div>
			</div>			
		</div>
	</header><!-- /header -->
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu" style="border-radius: 10px" >
						<ul >
							<li class="menu-item" style="background-image: linear-gradient(to right, #434343 0%, black 100%); color:white;">danh mục sản phẩm</li>
							@foreach($categories as $cate)
							<li class="menu-item"><a style="text-decoration: none;:hover{background-image: linear-gradient(to top, #09203f 0%, #537895 100%);}" href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="">{{$cate->cate_name}}</a></li>		
							@endforeach	
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="{{asset('detail/28/samsung-galaxy-note-8.html')}}"><img src="img/home/slide-1.gif" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="{{asset('detail/29/iphone-7.html')}}"><img src="img/home/slide-2.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="{{asset('detail/30/samsung-galaxy-a50.html')}}"><img src="img/home/slide-3.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="{{asset('detail/31/samsung-galaxy-s9-plus.html')}}"><img src="img/home/slide-4.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="{{asset('detail/64/oppo-a9-2020.html')}}"><img src="img/home/slide-5.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="{{asset('detail/63/iphone-x.html')}}"><img src="img/home/slide-6.jpg" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider" >
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators" >
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner "  >
								<div class="carousel-item active">
									<a href="{{asset('detail/6/iphone-11-pro-max.html')}}" ><img src="img/home/1.png" alt="Los Angeles" ></a>
									
								</div>
								<div class="carousel-item">
									<a href="{{asset('search?result=samsung+note+10&submit=Tìm+Kiếm')}}"><img src="img/home/2.png" alt="Chicago"></a>
									
								</div>
								<div class="carousel-item">
									<a href="{{asset('detail/26/xiaomi-redmi-note-8.html')}}"><img src="img/home/3.png" alt="New York"></a>
									
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>

					<div id="banner-t" class="text-center">
						<div class="row" >
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12" >
								<a href="{{asset('detail/27/samsung-galaxy-a20s.html')}}"><img src="img/home/qc1.png" alt="" class="img-thumbnail" style="border-radius: 10px;"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="{{asset('detail/6/iphone-11-pro-max.html')}}"><img src="img/home/qc2.png" alt="" class="img-thumbnail" style="border-radius: 10px;"></a>
							</div>
						</div>					
					</div>
					@yield('main')
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<footer id="footer" style="margin-top: 70px;">			
		<div id="footer-t" style="background: linear-gradient(-180deg, #BCC5CE 0%, #929EAD 98%), radial-gradient(at top left, rgba(255,255,255,0.30) 0%, rgba(0,0,0,0.30) 100%);
 background-blend-mode: screen;">
			<div class="container">
				<div class="row" >				
					<div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center logo-add">						
						<a href="{{asset('/')}}" style="text-decoration: none"><h1 style="font-family: 'Lobster', cursive !important; text-decoration: none;  color:white">JH-Shop</h1></a>			
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">Cửa hàng luôn mang đến chất lượng tốt nhất cho người dùng,chúng tôi luôn đồng hành cùng bạn.</p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone Number: (+84) 0966 073 028</p>
						<p>Email: hungjame2308@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address: 1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội</p>
					</div>
				</div>				
			</div>
			<div id="footer-b" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">				
				<div class="container">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Đại học Bách khoa Hà Nội - www.sis.hust.edu.vn</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>© 2019 BKA Project.</p>
						</div>
					</div>
				</div>
				<div id="scroll">
					<a href="{{asset('/')}}"><img src="img/home/scroll.png"></a>
				</div>	
			</div>
		</div>
	</footer>
	<!-- endfooter -->
</body>
</html>