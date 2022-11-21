<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class TodoListController extends Controller
{
    //
    public function index() {

        $entriesList = Entry::all();
        return view('todolist', ['entries' => $entriesList]);
    }
}
