<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entitati;

class EchipaController extends Controller
{
    
    public function showEntitati(){
        
        $entitati = Entitati::with('users')->get(); //->paginate(10,['*'])->withQueryString();
        return view('pages.echipa',compact('entitati'));
    }
}
