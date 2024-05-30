<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* if (auth()->check() && auth()->user()->id == 1) {
            return true;
        } */

        return false;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required','string', 'min:4'],
            'email' => ['required','email']
        ];
    }

    // MESSAGGI PERSONALIZZATI
    public function message() {
        return [
            "Nomecampo.regola" => 'messaggio'
        ];
    }
}
