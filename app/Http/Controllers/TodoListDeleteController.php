<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class TodoListDeleteController extends Controller
{
    //
    public function delete(Request $request, $id) {
        $entry = Entry::find($id);
        $entry->delete();
        return redirect("todo");
    }
}
