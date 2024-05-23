<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entitati;
use App\Models\User;

class ShowUsers extends Component
{

    public $id;
    public $username;
    public $entitate;
    public $type;

    public function alegeUser($id)
    {
        $this->id =  $id;
       //dd($this->id);
       // User::find($this->id)->delete();

    }
    public function resetUser(){
        $this->id="";
        dd("resetat");
    }
    public function stergeUser(){
        dd($this->id);
        User::find($this->id)->delete();
    }

    public function render()
    {
        $entitati = Entitati::with('users')->get(); //  functia mea din Entitati este 'users'
        return view('livewire.show-users', compact('entitati'))->extends('pages.template');
    }
}
