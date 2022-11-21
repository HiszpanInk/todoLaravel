<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class TodoListEditController extends Controller
{
    //
    public function edit(Request $request, $id) {
        $entry = Entry::find($id);
        if($request->filled('name')) {
            $entry->name = $request->name;
            $entry->save();
            return redirect("todo");
        } else {
            $entry = Entry::find($id);
            return view("todolist_edit", ["currentName" => $entry->name, "entryId" => $id]);
        }   
    }
}
