@extends('layouts.app')

@section('titulo', 'crear estudiante')

@section('contenido')


<br>
<br>

<div class="text-center">
    <br>
    <br>
    <iframe width="300" height="300"src="{{Storage::url($estudiantico->documento_identidad)}}" frameborder="0"></iframe>
    <p>{{$estudiantico->tipo_documento}}</p>
    <p>{{$estudiantico->num_documento}}</p>
    <p>{{$estudiantico->municipio_expedicion}}</p>
    <p>{{$estudiantico->fecha_expedicion}}</p>
    <p>{{$estudiantico->nombre}}</p>
    <p>{{$estudiantico->primer_apellido}}</p>
    <p>{{$estudiantico->segundo_apellido}}</p>
    <p>{{$estudiantico->genero}}</p>
    <p>{{$estudiantico->municipio_nacimiento}}</p>
    <p>{{$estudiantico->fecha_nacimiento}}</p>
    <p>{{$estudiantico->estrato}}</p>
    <a href="/estudiantes/{{$estudiantico->id}}/edit" class="btn btn-success">Actualizar Información</a>

    <br>
    <br>

    <form  class="form-group" action="/estudiantes/{{$estudiantico->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar Estudiante</button>
    </form>
</div>

@endsection
