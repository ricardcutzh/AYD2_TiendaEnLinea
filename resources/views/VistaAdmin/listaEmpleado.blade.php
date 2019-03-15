@extends('VistaAdmin/master')
@section('content')
<div class="container">
<h3>Lista de empleados</h3>
<div class="col-lg-9">

<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cui</th>
      <th scope="col">Correo</th>
      <th scope="col">Edad</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>
  <tbody>

    @foreach($empleado as $noticia) 

        <tr> 
            <th >{{$noticia['nombre']}}</th>
            <td >{{$noticia['apellido']}}</td>   
            <td >{{$noticia['cui']}}</td> 
            <td >{{$noticia['email']}}</td> 
            <td >{{$noticia['edad']}}</td> 
            <td >{{$noticia['direccion']}}</td>  
            <td><form novalidate="novalidate" enctype="multipart/form-data" action="{{action('EmpleadoController@eliminar', $noticia['id'])}}"   method="get">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form></td>

        </tr>
    @endforeach

         
  </tbody>
</table>

</div>
</div>
<br>
@endsection
