<?php

namespace App\Http\Controllers\TodoList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entry;

class ListEntryController extends Controller
{
    //
    public function index() {
        $entriesList = Entry::all();
        return view('todolist', ['entries' => $entriesList]);
    }
}
