@extends('layouts.app')

@section('titulo', 'detalle cursos')

@section('contenido');

    <div>
        <img style="height: 200px; width: 250px" src="{{Storage::url($cursito->imagen)}}" alt="">
        <p>{{$cursito->descripcion}}</p>
        <p>{{$cursito->duracion}}</p>
        <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-primary">Editar</a>

    </div>

@endsection