<?php

namespace creche\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use creche\MatriculaRequest;

class AlunoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:5',
            'dataNasc' => 'required|min:6',
            'mae' => 'required|min:5',
            'pai' => 'required|min:5',
            'telResponsavel' => 'required|min:5',
//            'matricula_id' =>''
        ];
    }
}
