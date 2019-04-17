@extends('VistaAdmin/master')
@section('content')
<div class="container">
<h1>Crea una nueva Categoria</h1>
<div class="col-lg-9">
        <form class="row contact_form" action="/Nueva_Categoria" method="post" id="contactForm" novalidate="novalidate">
            {{ csrf_field() }}
            @if($error)
            <!--<div class="alert alert-danger">
                No se pudo completar el registro
            </div>-->
            <script>
                alert("No se pudo completar el registro de la Categoria");
            </script>
            @endif
            @if($correcto)
            <!--<div class="alert alert-success">
                    Categoria registrada correctamente
                </div>-->
            <script>
                alert("Categoria registrada correctamente");
            </script>
            @endif
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre de la Categoria" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" required name="descripcion" id="descripcion" rows="1" placeholder="Descripcion de Categoria" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
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