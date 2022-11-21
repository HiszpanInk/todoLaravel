<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista</title>

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
            <table>
                <tr><td>Nazwa</td><td>Akcje</td></tr>
                @foreach ($entries as $entry)
                    <tr><td>{{ $entry->name }}</td><td><form action="{{ route('todolist.delete', ['id' => $entry->id]) }}" method="GET">@csrf<button type="submit">Usuń</button></form><form action="{{ route('todolist.edit', ['id' => $entry->id]) }}" method="POST">@csrf<button type="submit">Edytuj</button></form></td></tr>
                @endforeach
            </table>
            <form action="{{ route('todolist.add') }}" method="POST">
                @csrf
                <button type="submit">Dodaj</button>
            </form>
            
    </body>
</html>
