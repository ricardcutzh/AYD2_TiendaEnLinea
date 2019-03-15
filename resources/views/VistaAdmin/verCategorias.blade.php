@extends('VistaAdmin/master')
@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td><a href="/Eliminar_Categoria/{{$categoria->idcategoria}}" class="btn btn-danger"> Eliminar Categoria</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if($error)
        <script>
            alert('Categoria No Eliminada...');
        </script>
    @endif
    @if($correcto)
        <script>
            alert('Categoria Eliminada Correctamente');
        </script>
    @endif
</div>
@endsection