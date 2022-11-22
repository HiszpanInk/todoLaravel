<?php

namespace App\Http\Controllers\TodoList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entry;

class EditEntryController extends Controller
{
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
