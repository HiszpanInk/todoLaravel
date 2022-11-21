<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Entry;

class TodoListAddController extends Controller
{
    //
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
