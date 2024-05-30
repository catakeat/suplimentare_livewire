<?php

namespace App\Http\Controllers;

use App\Models\Entitati;
use Illuminate\Http\Request;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;

class ConvocatorController extends Controller
{
    /*
    public function showUsers()
    {
       $entitati = Entitati::with('users')->get();
        return view('pages.convocator', compact('entitati'));
    }*/
    public function adaugaConvocare(Request $req){
        
     $data =  $req->validate(['ora'=>'required','data'=>'required','mesaj'=>'required','destinatar'=>'required']);
     
     $mesaj=new Messages();
     $mesaj->ora =  $data['ora'];
     $mesaj->data = $data['data'];
     $mesaj->mesaj = $data['mesaj'];

     $mesaj->sender = Auth::user()->id;
     $mesaj->destinatar = $data['destinatar'];
     $mesaj->save();
    
        // $this->dispatch("close-modal");
        session()->flash('success', 'Convocare added successfully.');
        // Redirect back to the previous page
      return redirect()->back();

    }
}
