@extends('layouts.app')

@section('titulo', 'editar curso')

@section('contenido')

<form action="/cursos/{{$cursito->id}}" method="POST" enctype= "multipart/form-data">
    @method('PUT')
    @csrf
    <br>
        <h2>Formulario de edición del curso</h2>
        <div class="form-group">
            <label for="nombre">Edita el nombre</label>
            <input id="nombre" class="form-control" type="text" name="name" value="{{$cursito->name}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Edita la descripcion</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="duracion">Edita la duracion</label>
            <input id="duracion" class="form-control" type="text" name="duracion" value="{{$cursito->duracion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Carge la nueva imagen del curso</label>
            <br>
            <img style="height:100px; width:160px" src="{{Storage::url($cursito->imagen)}}" class="card-img-top" alt="...">
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">Actualizar</button>
</form>


@endsection
