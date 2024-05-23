<?php

namespace App\Http\Controllers;

use App\Models\Entitati;
use Illuminate\Http\Request;

class ConvocatorController extends Controller
{
    public function showUsers()
    {

        $entitati = Entitati::with('users')->get();
        return view('pages.convocator', compact('entitati'));
    }
}
