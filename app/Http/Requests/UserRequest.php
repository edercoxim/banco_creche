<?php

namespace creche\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**Aa
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
            'name' => 'required|min:5',
            'cpf' => 'required|min:5',
            'endereco' => 'required|min:5',
            'telefone' => 'required|min:5',
            'tipoUser' => 'required|min:1',
            //'creche_id' => 'required|min:1'
        ];
    }
}