@extends('VistaAdmin/master')
@section('content')
<div class="container">
<h1>Crea una nueva Categoria</h1>
<div class="col-lg-9">
        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la Categoria" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Descripcion de Categoria" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
                </div>
            </div>
            <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="primary-btn">Crear Categoria</button>
            </div>
        </form>
    </div>
</div>
<br>
@endsection