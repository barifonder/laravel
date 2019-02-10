<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clientRequest extends FormRequest
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
          'nom'=>'required|min:3',
             'prenom'=>'required|min:3',
              'adresse'=>'required|min:3',
               'ville'=>'required|min:3',
                'tel'=>'required|min:3'
        ];
    }
}
