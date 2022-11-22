<?php

namespace App\Http\Controllers\TodoList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entry;

class DeleteEntryController extends Controller
{
    //
    public function delete(Request $request, $id) {
        Entry::destroy($id);
        return redirect("todo");
    }
}
