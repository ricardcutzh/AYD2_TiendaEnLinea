
@extends('LoginRegistro/master')
@section('content')

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{asset('karma/img/login.jpg')}}"  alt="">
						<div class="hover">
							<h4>Primera vez en nuestra website?</h4>
							
							<a class="primary-btn" href="/registro">Crear una cuenta</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in </h3>
						<form class="row login_form" method="post" id="contactForm" novalidate="novalidate"  method="post" action="{{url('Login')}}" enctype="multipart/form-data">
							@csrf	
							
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Correo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Login</button> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@endsection