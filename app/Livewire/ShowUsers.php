<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entitati;
use App\Models\User;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth; // Ensure this is imported


class ShowUsers extends Component
{

    public $id;
    public $username;
    public $entitate;
    public $type;
    public $test;


    public function  convoacaUser()
    {
        //dd($this->id);
    $message = new Messages();
    $message->sender= Auth::user()->id;
    dd(Auth::user()->id);
    }

    public function alegeUser($id)
    {
        $this->id =  $id;
    }

    public function stergeUser()
    {

        User::find($this->id)->delete();
    }

    public function render()
    {
        $entitati = Entitati::with('users')->get(); //  functia mea din Entitati este 'users'
        return view('livewire.show-users', compact('entitati'))->extends('pages.template');
    }
}
