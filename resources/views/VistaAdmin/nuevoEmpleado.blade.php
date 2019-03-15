@extends('VistaAdmin/master')
@section('content')
<div class="container">
<h3>Registrar empleado</h3>
<div class="col-lg-9">
        <form class="row contact_form" enctype="multipart/form-data" method="post" action="{{url('Nuevo_Empleado')}}" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Apellido'">
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" id="cui" name="cui" placeholder="Cui" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cui'">
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Correo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo'">
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Edad'">
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Direccion'">
                </div> 


            </div> 
            <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="primary-btn">Registrar empleado</button>
            </div>
        </form>
    </div>
</div>
<br>
@endsection