<?php

namespace creche\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrecheRequest extends FormRequest
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
            'nome' => 'required|min:5',
            'endereco' => 'required|min:5',
            'bairro' => 'required|min:5',
            'diretor' => 'required|min:5',
        ];
    }
}
