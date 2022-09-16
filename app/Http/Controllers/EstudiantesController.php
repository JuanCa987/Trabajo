<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Paises;
use App\Models\Municipio;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Http\Requests\storeEstudianteRequest;


class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantico = Estudiante::all();
        return view('estudiantes.index' , compact('estudiantico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Paises::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        return view('estudiantes.create', compact('paises','departamentos','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeEstudianteRequest $request)
    {
        $estudiantico = new Estudiante();
        $estudiantico->tipo_documento = $request-> input('tipo_documento');
        $estudiantico->num_documento = $request-> input('num_documento');
        if($request->hasFile('documento_identidad')){
            $estudiantico->documento_identidad = $request->file('documento_identidad')->store('public/estudiantes');
        }
        $estudiantico->municipio_expedicion = $request-> input('municipio_expedicion');
        $estudiantico->fecha_expedicion = $request-> input('fecha_expedicion');
        $estudiantico->nombre= $request-> input('nombre');
        $estudiantico->primer_apellido= $request-> input('primer_apellido');
        $estudiantico->segundo_apellido= $request-> input('segundo_apellido');
        $estudiantico->genero= $request-> input('genero');
        $estudiantico->municipio_nacimiento = $request-> input('municipio_nacimiento');
        $estudiantico->fecha_nacimiento= $request-> input('fecha_nacimiento');
        $estudiantico->estrato= $request-> input('estrato');
        $estudiantico->save();
        return view('Estudiantes.to_update');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiantico = Estudiante::find($id);
        return view('estudiantes.show' , compact('estudiantico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $estudiantico = Estudiante::find($id);
        // $query1 = Municipio::join(
        //     'estudiantes','estudiantes.municipio_expedicion','municipios.id'
        // )
        // ->join('departamentos','departamentos.id_departamento','dmunicipios.id')
        // ->join('paises','paises.id_pais','departamentos.id_departamento')
        // ->where('estudiantes.id', $id)
        // ->select('municipios.nom_muni as nomMuni','departamentos.nom_departa as NomDepart','paises.nom_paises as nomPaises')
        // ->get();

        // $query2 = Municipio::join(
        //     'estudiantes','estudiantes.municipio_nacimiento','municipios.id'
        // )
        // ->join('departamentos','departamentos.id_departamento','dmunicipios.id')
        // ->join('paises','paises.id_pais','epartamentos.id_departamento')
        // ->where('estudiantes.id', $id)
        // ->select('municipios.nom_muni as nomMuni','departamentos.nom_departa as NomDepart','paises.nom_paises as nomPaises')
        // ->get();

        // return view('estudiantes.show', compact('query1', 'query2'));

        $estudiantico = Estudiante::find($id);
        $municipios = Municipio::all();
        return view('estudiantes.edit' , compact('estudiantico', 'municipios'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiantico = Estudiante::find($id);
        //return $request;
        $estudiantico->fill($request->except('foto'));
        if($request->hasFile('foto')){
            $estudiantico->foto=$request->file('foto')->store('public/cursos');
        }
        $estudiantico->save();
        return view('estudiantes.save');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantico = Estudiante::find($id);
        $estudiantico->delete();
        return view('docentes.remove');
    }
}
