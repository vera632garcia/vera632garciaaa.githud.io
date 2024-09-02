@extends('layouts.app')

@section('content')
<div class="container">
    <h2>FERNANDO DAVID GARCIA VERA</h2>
<h1 class="display-4">REGISTRO DE LIBROS</h1>
<div class="row">
    <div class="col-6">


<form method="post" action="{{url('libro/')}}" enctype="multipart/form-data">
    @csrf
    <label class="form-label">Nombre del libro</label>
    <input type="text" name="nombre" placelholder="escribe aqui el nombre" class="form-control"><br>
    <label class="form-label">autor del libro</label>
    <input type="text" name="autor" placelholder="escribe aqui el nombre del autor"class="form-control" ><br>
    <label class="form-label">precio</label>
    <input type="number" name="precio" placelholder="escribe aqui el precio"class="form-control" ><br>
    <label >imagenes</label>
    <input type="file" name="imagenes" ><br>

    <input type="submit" value="registrar" class="btn btn-primary">
</form>
</div>
</div>
<a href="{{url('/libro/')}}" class="btn btn-primary">REGRESAR</a>
</div>
@endsection