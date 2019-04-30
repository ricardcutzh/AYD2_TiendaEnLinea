
@extends('LoginRegistro/master')
@section('content')


	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p> Ricardo Antonio Cutz Hernandez <strong> 201503476 </strong> </p>
									<p> Jhoseff Omar Caceres Aguilar <strong> 201513696 </strong> </p>
									<p> Jorge Mario Recinos Dieguez <strong> 201314631 </strong> </p>
									<p> Marvin José Calderón García <strong> 201213177 </strong> </p>
									<p> Christopher Alexander López Orellana <strong> 201504100 </strong> </p>
									<p> José Javier Barreda Mancilla <strong> 201213619 </strong> </p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src= "{{asset('karma/img/banner/banner-img.png')}}"  alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									 
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src= "{{asset('karma/img/banner/banner-img.png')}}"  alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- End banner Area -->
    
    @endsection