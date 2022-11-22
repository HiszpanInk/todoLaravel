<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formularz</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
            <form method="POST" action="{{ route('formSubmit') }}">
                @csrf
                Imię: <input type="text" name="name"><br>
                Nazwisko: <input type="text" name="surname"><br>
                Data urodzenia: <input type="date" name="birthdate"><br>
                Adres 1: <input type="text" name="adress1"><br>
                Adres 2: <input type="text" name="adress2"><br>
                Kod pocztowy: <input type="text" name="postalcode" pattern="[0-9]{2}-[0-9]{3}"><br>
                Miejscowość: <input type="text" name="settlement"><br>
                <button type="submit">Wyślij</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </body>
</html>
