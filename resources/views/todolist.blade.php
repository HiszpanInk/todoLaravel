@extends('layouts.todo')

@section('content')
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
@endsection()