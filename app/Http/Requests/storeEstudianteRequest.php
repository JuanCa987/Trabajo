<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeEstudianteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tipo_documento'=>'required|max:30',
            'num_documento'=>'required|max:12',
            'documento_identidad'=>'required|mimes:pdf',
            'fecha_expedicion'=>'required|date',
            'nombre'=>'required|max:30',
            'primer_apellido'=>'required|max:30',
            'segundo_apellido'=>'required|max:30',
            'genero'=>'required|max:30',
            'fecha_nacimiento'=>'required|date',
            'estrato'=>'required|max:30'


        ];
    }
}
