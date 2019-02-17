<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

         
        <title>Tienda</title>
  
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{asset('karma/css/linearicons.css')}}" >
	<link rel="stylesheet" href="{{asset('karma/css/owl.carousel.css')}}" >
	<link rel="stylesheet" href="{{asset('karma/css/themify-icons.css')}}" >
	<link rel="stylesheet" href="{{asset('karma/css/font-awesome.min.css')}}" >
	<link rel="stylesheet" href="{{asset('karma/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('karma/css/nouislider.min.css')}}" >
	<link rel="stylesheet" href="{{asset('karma/css/bootstrap.css')}}" >
	<link rel="stylesheet" href="{{asset('karma/css/main.css')}}" >
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/"> <h2>El Guarda-Ropa</h2> </a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
							<li class="nav-item"><a class="nav-link" href="/login">Salir</a></li>
							<li class="nav-item"><a class="nav-link" href="/registro">Registro</a></li>
                            <!--
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item active"><a class="nav-link" href="login.html">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            -->
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
  
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
	</section>
    <!-- End Banner Area -->
	</br>
	<section >
		<div class="container">  
				@if (\Session::has('success'))
				
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Bienvenido!</strong> {{ \Session::get('success') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif  
		</div> 
	</section>
	 

    <!--================Login Box Area =================-->
    
    @yield('content')

	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
                
                
                
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Analisis y Diseño 2<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Grupo 5</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->


	<script src="{{asset('karma/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('karma/js/vendor/bootstrap.min.js')}}" ></script>
	<script src="{{asset('karma/js/jquery.ajaxchimp.min.js')}}" ></script>
	<script src="{{asset('karma/js/jquery.nice-select.min.js')}}" ></script>
	<script src="{{asset('karma/js/jquery.sticky.js')}}" ></script>
	<script src="{{asset('karma/js/nouislider.min.js')}}" ""></script>
	<script src="{{asset('karma/js/jquery.magnific-popup.min.js')}}" ></script>
	<script src="{{asset('karma/js/owl.carousel.min.js')}}" ></script>
    <!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('karma/js/gmaps.min.js')}}" ></script>
	<script src="{{asset('karma/js/main.js')}}" ></script>
    
</body>

</html>
