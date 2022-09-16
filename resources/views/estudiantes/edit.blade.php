@extends('layouts.app')

@section('titulo', 'editar estudiante')

@section('contenido')

<form action="/estudiantes/{{$estudiantico->id}}" method="POST" enctype= "multipart/form-data">
    @method('PUT')
    @csrf
    <br>
        <h2>Formulario de actualización de información de los estudiantes.</h2>
        <div class="form-group">
            <label for="tipo_documento">Edita el tipo de documento</label>
            <select id="tipo_documento" class="form-control" name="tipo_documento" value="{{$estudiantico->tipo_documento}}">
                <option>TI</option>
                <option>CC</option>
                <option>CE</option>
                <option>PAS</option>
            </select>
        </div>
        <div class="form-group">
            <label for="num_documento">Edita el numero de documento</label>
            <input id="num_documento" class="form-control" type="text" name="num_documento" value="{{$estudiantico->num_documento}}">
        </div>
        <div class="form-group">
            <label for="foto">Carge el documento de identidad</label>
            <br>
            <iframe width="300" height="300"src="{{Storage::url($estudiantico->documento_identidad)}}" frameborder="0"></iframe>
            <br>
            <input id="documento_identidad" type="file" name="documento_identidad">
        </div>
        <div class="form-group">
            <label for="fecha_expedicion">Edita la fecha de expedición</label>
            <input id="fecha_expedicion" class="form-control" type="text" name="fecha_expedicion" value="{{$estudiantico->fecha_expedicion}}">
        </div>
        <div class="form-group">
            <label for="nombre">Edita el nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$estudiantico->nombre}}">
        </div>
        <div class="form-group">
            <label for="primer_apellido">Edita el primer apellido</label>
            <input id="primer_apellido" class="form-control" type="text" name="primer_apellido" value="{{$estudiantico->primer_apellido}}">
        </div>
        <div class="form-group">
            <label for="segundo_apellido">Edita el segundo apellido</label>
            <input id="segundo_apellido" class="form-control" type="text" name="segundo_apellido" value="{{$estudiantico->segundo_apellido}}">
        </div>
        <div class="form-group">
            <label for="genero">Edita el genero</label>
            <select id="genero" class="form-control" name="genero" value="{{$estudiantico->genero}}">
                <option>F</option>
                <option>M</option>
                <option>No especifica</option>
            </select>
        </div>
        <div class="form-group">
            <label for="municipio_nacimiento">Edita el municipio de nacimiento</label>
            <select id="municipio_nacimiento" class="form-control" name="municipio_nacimiento" value="{{$estudiantico->municipio_nacimiento}}">
                @foreach ($municipios as $munic)
                    <option value="">{{ $munic->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Edita la fecha de nacimiento</label>
            <input id="fecha_nacimiento" class="form-control" type="text" name="fecha_nacimiento" value="{{$estudiantico->fecha_nacimiento}}">
        </div>
        <div class="form-group">
            <label for="estrato">Edita el estrato socioeconómico</label>
            <select id="estrato" class="form-control" name="estrato" value="{{$estudiantico->estrato}}">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <button class="btn btn-dark" type="submit">Actualizar</button>
</form>




@endsection
