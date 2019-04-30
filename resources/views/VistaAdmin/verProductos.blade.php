@extends('VistaAdmin/master')
@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Talla</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->talla}}</td>
            <td>Q{{$producto->precio}}</td>
            <td><a href="/Eliminar_Producto/{{$producto->idproducto}}" class="btn btn-danger"> Eliminar Producto</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if($error)
        <script>
            alert('Producto No Eliminado...');
        </script>
    @endif
    @if($correcto)
        <script>
            alert('Producto Eliminado Correctamente');
        </script>
    @endif
</div>
@endsection