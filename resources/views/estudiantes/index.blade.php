@extends('layouts.app')

@section('titulo', 'lista Estudiantes')

@section('contenido')

<br>
<br>
<br>
<h2>Listado Estudiantes</h2>

<div class="row">
    @foreach ($estudiantico as $item)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin:20px">
                <div class="card-body">
                    <h5 class="card-title">{{$item->nombre}}</h5>
                    <h5 class="card-title">{{$item->primer_apellido}}</h5>
                    <h5 class="card-title">{{$item->segundo_apellido    }}</h5>

                    <a href="/estudiantes/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

