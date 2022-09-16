@extends('layouts.app')

@section('titulo', 'lista Estudiantes')

@section('contenido')

<br>
<br>
<br>
<h2 class="text-center" style="color: lightblue">Listado Estudiantes</h2>

<div class="row">
    @foreach ($estudiantico as $item)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin:20px">
                <div class="card-body">
                    <iframe width="200" height="200"src="{{Storage::url($item->documento_identidad)}}" frameborder="0"></iframe>
                    <h5 class="card-title">{{$item->num_documento}}</h5>
                    <h5 class="card-title">{{$item->nombre}}{{' '}}{{$item->primer_apellido}}{{' '}}{{$item->segundo_apellido}}</h5>
                    <h5 class="card-title">{{$item->pais_nacimiento}}</h5>
                    <h5 class="card-title">{{$item->departamento_nacimiento}}</h5>
                    <h5 class="card-title">{{$item->municipio_nacimiento}}</h5>
                    <h5 class="card-title">{{$item->fecha_nacimiento}}</h5>

                    <h5 class="card-title">{{$item->estrato}}</h5>

                    <a href="/estudiantes/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

