@extends('layouts.app')

@section('titulo', 'crear estudiante')

@section('contenido')


<form action="/estudiantes" method="POST" enctype= "multipart/form-data">
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
    <div class="text-center" style="color: lightblue">
        <h2>Datos de identificacion</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6">
                <div class="form-group">
                    <label for="tipo_documento">Tipo de documento *</label>
                    <select id="tipo_documento" class="form-control" name="tipo_documento">
                        <option>TI</option>
                        <option>CC</option>
                        <option>CE</option>
                        <option>PAS</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="num_documento">No. de documento *</label>
                    <input id="num_documento" class="form-control" type="text" name="num_documento">
                </div>
                <div class="form-group">
                    <label for="documento_identidad">Cargar Docum. Identificación *</label>
                    <br>
                    <input id="documento_identidad" type="file" name="documento_identidad">
                </div>
                <div class="form-group">
                    <label for="pais_expedicion">Pais de expedición *</label>
                    <select id="pais_expedicion" class="form-control" name="pais_expedicion">
                        @foreach ($paises as $paisito)
                            <option value="">{{ $paisito->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="departamento_expedicion">Departamento donde fue expedido *</label>
                    <select id="departamento_expedicion" class="form-control" name="departamento_expedicion">
                        @foreach ($departamentos as $depart)
                            <option value="">{{ $depart->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="municipio_expedicion">Municipio donde fue expedido *</label>
                    <select id="municipio_expedicion" class="form-control" name="municipio_expedicion">
                        @foreach ($municipios as $munic)
                            <option value="">{{ $munic->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha_expedicion">Fecha de expedición *</label>
                    <input id="fecha_expedicion" class="form-control" type="date" name="fecha_expedicion">
                </div>
            </div>


            <div class="col-6 col-cm-4">
                <div class="form-group">
                    <label for="nombre">Nombres *</label>
                    <input id="nombre" class="form-control" type="text" name="nombre">
                </div>
                <div class="form-group">
                    <label for="primer_apellido">Primer Apellido *</label>
                    <input id="primer_apellido" class="form-control" type="text" name="primer_apellido">
                </div>
                <div class="form-group">
                    <label for="segundo_apellido">Segundo Apellido *</label>
                    <input id="segundo_apellido" class="form-control" type="text" name="segundo_apellido">
                </div>
                <div class="form-group">
                    <label for="genero">Genero *</label>
                    <select id="genero" class="form-control" name="genero">
                        <option>F</option>
                        <option>M</option>
                        <option>No especifica</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Feha de nacimiento *</label>
                    <input id="fecha_nacimiento" class="form-control" type="date" name="fecha_nacimiento">
                </div>
                <div class="form-group">
                    <label for="pais_nacimiento">Pais de nacimiento *</label>
                    <select id="pais_nacimiento" class="form-control" name="pais_nacimiento">
                        @foreach ($paises as $paisito)
                        <option value="">{{ $paisito->nombre}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="departamento_nacimiento">Departamento de nacimiento *</label>
                    <select id="departamento_nacimiento" class="form-control" name="departamento_nacimiento">
                        @foreach ($departamentos as $depart)
                            <option value="">{{ $depart->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="municipio_nacimiento">Municipio de nacimiento *</label>
                    <select id="municipio_nacimiento" class="form-control" name="municipio_nacimiento">
                        @foreach ($municipios as $munic)
                            <option value="">{{ $munic->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estrato">Estrato Socioeconómico *</label>
                    <select id="estrato" class="form-control" name="estrato">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="text-center">
            <button class="btn btn-light" type="submit">Regresar</button>
            <button class="btn btn-success" type="submit">Continuar</button>
        </div>
    </div>
</form>


@endsection
