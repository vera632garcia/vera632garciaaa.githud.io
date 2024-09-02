@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-6">

<h1 class="display-4">MODIFICAR LIBROS</h1>
<form method="post" action="{{url('/libro/'.$libro->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <label class="form-label">Nombre del libro</label>
    <input type="text" name="nombre" value="{{$libro->nombre}}" placelholder="escribe aqui el nombre" class="form-control"><br>
    <label class="form-label">autor del libro</label>
    <input type="text" name="autor" value="{{$libro->autor}}" placelholder="escribe aqui el nombre del autor" class="form-control"><br>
    <label class="form-label">precio</label>
    <input type="number" name="precio" value="{{$libro->precio}}" placelholder="escribe aqui el precio" class="form-control"><br>
    <label class="form-label">imagenes</label>
    {{$libro->imagenes}}
    <input type="file" name="imagenes" ><br>
    <input type="submit" value="Modificar"class="btn btn-primary">
</form>
</div>
</div>
</div>
@endsection