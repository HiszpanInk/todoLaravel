<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationRequest;
use Illuminate\Http\Request;

class ExampleFormController extends Controller
{
    //
    public function create()
    {
        return view('exampleForm');
    }
    public function store(CreateValidationRequest $request) {
        /*
         Imię: <input type="text" name="name"><br>
                Nazwisko: <input type="text" name="surname"><br>
                Data urodzenia: <input type="date" name="birthdate"><br>
                Adres 1: <input type="text" name="adress1"><br>
                Adres 2: <input type="text" name="adress2"><br>
                Kod pocztowy: <input type="text" name="postalcode" pattern="[0-9]{2}-[0-9]{3}"><br>
                Miejscowość: <input type="text" name="settlement"><br>
        */
        $request->validated();
        $returnText = $request->name . " " . $request->surname . " " . $request->birthdate . " " . $request->adress1 . " " . $request->adress2 . " " . $request->postalcode . " " . $request->settlement;
        return view('test', ['testVar' => $returnText]);
    }
}
