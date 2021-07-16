<!DOCTYPE HTML>
<html>
	<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name') }} </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/user/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/user/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/user/css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="/css/user/css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="/css/user/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/user/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/css/user/css/style.css">

	<!-- Modernizr JS -->
	<script src="/css/user/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	{{-- FONT AWESOME --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.html">{{ config('app.name') }}</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="{{ route('index') }}">Home</a>
						</li>
						<li><a href="about.html">About</a></li>
						<li class="has-dropdown">
							<a href="">Kategori</a>
							<ul class="dropdown">
								<li><a href="ac">Air Conditioner</a></li>
								<li><a href="laptop">Laptop</a></li>
								<li><a href="audio">Audio</a></li>
								<li><a href="kulkas">Kulkas</a></li>
								<li><a href="tv">Televisi</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
						<li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	{{-- SLIDE SHOW --}}
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			@foreach ($sliders as $key => $slide)
			<div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
				<img src="{{ Storage::url('public/gambar/').$slide->gambar }}"class="d-block w-100" alt="...">
			</div>
		 	@endforeach
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	</div>

	{{-- PRODUK TERBARU --}}
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>New Product</h2>
					<p>Temukan produk yang UpToDate disini </p>
				</div>
			</div>
			<div class="row">
				@foreach ($produks as $pro)
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url({{ Storage::url('public/gambar/').$pro->gambar }});">
							<div class="inner">
								<p>
									<a href="{{ route('detailproduk', $pro->id) }}" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="{{ route('detailproduk', $pro->id) }}" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="{{ route('detailproduk', $pro->id) }}">{{ $pro->produk}}</a></h3>
							<span class="price">Rp {{ $pro->harga}},00</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	
	{{-- ARTIKEL BERITA --}}
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Artikel</h2>
				<p>Berbagai trend dan tips & trik ada disini</p>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-md-4 g-4">
			@foreach ($artikels as $art)
			<div class="col-md-4">
				<div class="card" style="width: 100%; min-height: 100%;">
					<center>
					<img src="{{ Storage::url('public/gambar/').$art->gambar }}" style="width:100%;" class="card-img-top-center" alt="...">
					</center>
					<div class="card-body">
					  <h5 class="card-title"><b>{{ $art->judul }}</b> <br><br>
					  <p class="card-text">{!! $art->kutipan !!}</p>
					  <a href="{{ route('detailartikel', $art->id) }}" class="btn btn-primary">Selengkapnya</a>
					</div>
					<div class="card-footer">
						<small class="text-muted"><i class="fas fa-calendar-alt"></i> Diunggah pada : {{ $art->updated_at }}</small>
					  </div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	{{-- BRAND --}}
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Brand</h2>
					<p>Berbagai brand yang dapat Anda temukan</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<table>
									<tr cellpadding="10">
										@foreach ($brands as $b)
										<td >
											<img src="{{ Storage::url('public/gambar/').$b->gambar }}" class="rounded" style="width: 130px">
										</td>
										@endforeach
									</tr>
								</table>
							</div>
						</div>
					</form>
				</div>
			</div>
			{{-- VIDEO --}}
			<center>
				<iframe width="700" height="315" src="https://www.youtube.com/embed/0-B6_U-ikoc?rel=0&amp;autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
			</center>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" >
		<div class="container" >
			<div class="row row-pb-md" >
				<div class="col-md-4 fh5co-widget">
					<h3>Shop.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>
	
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>
	
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>
	
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
	
		</div>
	</footer>
	</div>
	
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/css/user/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/css/user/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/css/user/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/css/user/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="/css/user/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="/css/user/js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="/css/user/js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="/css/user/js/main.js"></script>
	
	<!-- Optional JavaScript; choose one of the two! -->
	
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		-->
	
	</body>
	</html>
	
	