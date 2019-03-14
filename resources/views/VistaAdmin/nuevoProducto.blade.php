@extends('VistaAdmin/master')
@section('content')
<div class="container">
<h1>Crea un Nuevo Producto</h1>
<div class="col-lg-9">
        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del Producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Talla" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                </div>
                <div class="form-group">
                    <input type="number" value="0.0" class="form-control" id="subject" name="subject" placeholder="Precio" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
                </div>
                <div class="form-group">
                        <label class="form-control" for="avatar">Imagen Para Producto</label>

                        <input class="form-control" type="file"
                               id="avatar" name="avatar"
                               accept="image/png, image/jpeg">     
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Descripcion del Producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option value="1">Zapatos</option>
                        <option value="2">Accesorios</option>
                        <option value="3">Mujeres</option>
                        <option value="4">Hombres</option>
                    </select> 
                </div>
            </div>
            <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="primary-btn">Crear Producto</button>
            </div>
        </form>
    </div>
</div>
<br>
@endsection