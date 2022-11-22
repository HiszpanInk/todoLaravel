<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
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
            //
            /*
         Imię: <input type="text" name="name"><br>
                Nazwisko: <input type="text" name="surname"><br>
                Data urodzenia: <input type="date" name="birthdate"><br>
                Adres 1: <input type="text" name="adress1"><br>
                Adres 2: <input type="text" name="adress2"><br>
                Kod pocztowy: <input type="text" name="postalcode" pattern="[0-9]{2}-[0-9]{3}"><br>
                Miejscowość: <input type="text" name="settlement"><br>
        */
            'name' => 'alpha',
            'surname' => 'alpha',
            'birthdate' => 'date',
            'adress1' => 'required|string',
            'adress2' => 'string',
            'postalcode' => array('regex:/^[0-9]{2}-?[0-9]{3}$/Du'),
            'settlement' => 'regex:/^[\pL\s\-]+$/u',
        ];
    }
}
