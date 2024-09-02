@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))  
{{ Session::get('mensaje') }}
@endif
 <!--para poner sms  como decir en create 
el registro ha sido registrado ecxitosamente
o en destroy el archivo se borro conrrectamente-->
<h1 class="display-5">Lista de Libros</h1>
<a href="{{url('libro/create')}}" class="btn btn-primary">registrar nuevo libro</a>
<table border="4" margin="2" class="table mt-2">
                <tr>
                    <th>numero</th>
                    <th>nombre del libro</th>
                    <th>autor del libro</th>
                    <th>precio</th>
                    <th>imagenes</th> 
                    <th>acciones</th>
                </tr>
           
   @foreach ($libro as $libro)
   <tr>
    <td>{{$libro->id}}</td>
   <td>{{$libro->nombre}}</td>
   <td>{{$libro->autor}}</td>
   <td>{{$libro->precio}}</td>
    <td>
        <img src="{{asset('storage'.'/'.$libro->imagenes)}}" width="40">
    </td>


  
            <td >
                <form action="{{url('/libro/'.$libro->id.'/edit')}}"  method="GET" >
                    @csrf
                   <input type="submit"  value="Modificar" class="btn btn-warning">
                </form>
            
            <form action="{{url('/libro/'.$libro->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar" onclick="return confirm('seguro que quieres borrar el archivo')" class="btn btn-danger">
                </form>
            </td>
    </tr>
            @endforeach
</table>
</div>
@endsection

