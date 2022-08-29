@extends('layouts.app')

@section('titulo', 'crear estudiante')

@section('contenido')


<form action="/docentes" method="POST" enctype= "multipart/form-data">
@csrf
    <br>

        @if ($errors->any())
            @foreach ($errors->all() as $alerta)
                <div class="alert alert-danger" role="alert">
                    <ul>

                        <li>{{$alerta}}</li>

                    </ul>

                </div>
            @endforeach
        @endif

    <br>
        <h2>Aqui puedes agregar al nuevo docente</h2>
        <div class="form-group">
            <label for="nombres">Nombre del docente</label>
            <input id="nombres" class="form-control" type="text" name="nombres">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos del docente</label>
            <input id="apellidos" class="form-control" type="text" name="apellidos">
        </div>
        <div class="form-group">
            <label for="titulo_universitario">Titulo universitario</label>
            <input id="titulo_universitario" class="form-control" type="text" name="titulo_universitario">
        </div>
        <div class="form-group">
            <label for="edad">Edad del docente</label>
            <input id="edad" class="form-control" type="text" name="edad">
        </div>
        <div class="form-group">
            <label for="fecha_contrato">Feha de contrato</label>
            <input id="fecha_contrato" class="form-control" type="date" name="fecha_contrato">
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <br>
            <input id="foto" type="file" name="foto">
        </div>
        <div class="form-group">
            <label for="doc_identidad">Cargar documento de identidad</label>
            <br>
            <input id="doc_identidad" type="file" name="doc_identidad">
        </div>
        <button class="btn btn-dark" type="submit">Guardar</button>
</form>


@endsection
