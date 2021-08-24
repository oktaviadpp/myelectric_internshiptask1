<!DOCTYPE HTML>
<html>
	<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-202867380-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-202867380-1');
	</script>

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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
							<li><a href="about">About</a></li>
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
							{{-- <li class="has-dropdown">
								<a href=""><i class="fas fa-user"></i> {{ Auth::user()->name }}</a>
								<ul class="dropdown">
									<li>
										<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</li>
									<li>
										<a href="" data-toggle="modal" data-target="#myModal">
											Cart
										</a>
										
									</li>
								</ul>
							</li> --}}
							<li>
								<a href="" data-toggle="modal" data-target="#myModal">
									Cart
								</a>
							</li>
							<li class="has-dropdown">
								<a href="{{ route('produkkat.index') }}">Admin</a>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>
	
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Keranjang Belanja</h4>
				</div>
				<div class="modal-body">
					<div class="p-6 bg-white border-b border-gray-200">
						<table style="width: 100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Jumlah</th>
									<th>Order</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1 ?>
								{{-- @foreach ($cart as $c) --}}
								@foreach ($cart as $cart)
								{{-- @if ($cart->id_user == Auth::user()->id)  --}}
								{{-- {{ $c }} --}}
									<th>{{$no++}}</th>
									<td>{{ $cart->keranjang2->produk }}</td>
									<td>{{ $cart->quantity }} pcs</td>
									<td>
										<a href="https://api.whatsapp.com/send/?phone=%2B6282311439450&text=Hallo%20kak%20%0ASaya%20mau%20order%20%3A%20%0A{{$cart->keranjang2->produk}}%20jumlah%20{{$cart->quantity}}%20pcs"  type="button"  class="btn btn-primary"><i class="fas fa-check-square"></i></a>
									</td>
							</tbody>
							
							{{-- @endif --}}
							@endforeach
							{{-- @endforeach --}}
						</table>
					</div>
				</div>
			</div>
			</div>
		</div>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(/css/user/images/banner.png);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1> @yield('title')</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
