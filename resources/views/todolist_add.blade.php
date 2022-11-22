@extends('layouts.todo')

@section('content')
            <form action="{{ route('todolist.add') }}" method="POST">
                @csrf
                <input type="text" name="name">
                <input type="submit">
            </form>
@endsection()