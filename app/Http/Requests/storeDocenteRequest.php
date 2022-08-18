<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeDocenteRequest extends FormRequest
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
            'nombres'=>'required|max:30',
            'apellidos'=>'required|max:30',
            'titulo_universitario'=>'required|max:30',
            'edad'=>'required|max:2',
            'fecha_contrato'=>'required|max:30',
            'foto'=>'required|mimes:jpg,png|max:5mb',
            'doc_identidad'=>'required|mimes:pdf'
        ];
    }
}
