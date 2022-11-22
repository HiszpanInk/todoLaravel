<?php

namespace App\Http\Controllers\TodoList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entry;

class AddEntryController extends Controller
{
    ////
    public function add(Request $request) {
        if($request->filled('name')) {
            $entry = new Entry;
            $entry->name = $request->name;
            $entry->save();
            return redirect('todo');
        } else {
            return view('todolist_add');
        }
    }
}
