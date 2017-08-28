<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function index(Note $note) {
        $note = $note->get();
        return json_encode($note);
    }
}
