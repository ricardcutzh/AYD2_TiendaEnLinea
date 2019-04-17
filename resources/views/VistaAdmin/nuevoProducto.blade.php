@extends('VistaAdmin/master')
@section('content')
<div class="container">
<h1>Crea un Nuevo Producto</h1>
<div class="col-lg-9">
        <form class="row contact_form" action="/Nuevo_Producto" method="post" id="contactForm">
            {{ csrf_field() }}
            
                @if($error)
                <!--
                <div class="alert alert-danger">
                    No se pudo completar el registro del Producto
                </div>-->
                <script>
                    alert("No se pudo completar el registro del Producto");
                </script>
                @endif
                @if($correcto)
                <!--
                <div class="alert alert-success">
                        Producto registrado correctamente
                </div>-->
                <script>
                    alert("Producto registrado correctamente");
                </script>
                @endif
            
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre del Producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" id="talla" name="talla" placeholder="Talla" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                </div>
                <div class="form-group">
                    <input type="number" required value="0.0" class="form-control" id="precio" name="precio" placeholder="Precio" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
                </div>
                <div class="form-group">
                        <label class="form-control"  for="avatar">Imagen Para Producto</label>

                        <input class="form-control" required type="file"
                               id="img" name="img"
                               accept="image/png, image/jpeg">     
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea required class="form-control" name="descripcion" id="descripcion" rows="1" placeholder="Descripcion del Producto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripcion del Producto'"></textarea>
                </div>
                <div class="form-group">
                    <select id="idcategoria" id="idcategoria" name="idcategoria" required class="form-control">
                        @foreach ($categorias as $c)
                            <option value="{{$c->idcategoria}}">{{$c->nombre}}</option>
                        @endforeach
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