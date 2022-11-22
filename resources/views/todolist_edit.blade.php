@extends('layouts.todo')

@section('content')
            Edytujesz: <table><tr><td>{{ $currentName }}</td></tr></table>
            <form action="{{ route('todolist.edit', ['id' => $entryId]) }}" method="POST">
                @csrf
                <label for="name">Nowa nazwa: </label><input type="text" name="name">
                <input type="submit">
            </form>
@endsection()