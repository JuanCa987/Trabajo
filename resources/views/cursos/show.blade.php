@extends('layouts.app')

@section('titulo', 'detalle cursos')

@section('contenido')

    <br>
    <br>

    <div class="text-center">
        <img style="height: 220px; width: 320px" src="{{Storage::url($cursito->imagen)}}" alt="">
        <p>{{$cursito->descripcion}}</p>
        <p>{{$cursito->duracion}}</p>
        <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-primary">Editar</a>

        <br>
        <br>

        <form  class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

@endsection