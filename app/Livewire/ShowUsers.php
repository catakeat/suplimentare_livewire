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

    public $ora;
    public $data;
    public $mesaj;

    public $destinatar;
   
    public function adaugaUser()
    {

        $data = $this->validate(
            [
                'username' => 'required|email|unique:users,username',
                'entitate' => 'required|exists:entitati,id',
            ],
            [
                'username.required' => 'Username is required.',
                'username.email' => 'Username must be a valid email address.',
                'username.unique' => 'This username is already taken.',
                'entitate.required' => 'Entitate is required.',
                'entitate.exists' => 'Selected entitate does not exist.',
            ]
        );
   
        $user = new User();
        $user->username =  $this->username;
        $user->entitate = $this->entitate;
        $user->save();
        session()->flash("success", "Am adaugat un nou user");
        $this->dispatch("close-modal");
        $this->resetUserData();
    }

    public function resetUserData()
    {
        $this->id = "";
        $this->username = "";
        $this->entitate = "";
    }

    public function resetConvocareFields()
    {
        $this->ora = "";
        $this->data = "";
        $this->mesaj = "";
    }
   
    public function convoacaUser()
    {

        $rules = [
            'ora' => 'required',
            'data' => 'required|date',
            'mesaj' => 'required|string|max:255',
            'destinatar' => 'required|exists:users,id',
        ];
        $data = $this->validate($rules);

        $message = new Messages();
        $message->ora = $this->ora;
        $message->data = $this->data;
        $message->mesaj = $this->mesaj;
        $message->sender = Auth::user()->id;
        $message->destinatar = $this->destinatar;

        $message->save();
        session()->flash("success", "Am adaugat o convocare");

        $this->dispatch('close-modal');
    }

    public function alegeUser($id)
    {
        $this->resetConvocareFields();
        $this->resetUserData();
        $this->id = $id;

    }

    public function alegeDestinatar($id)
    {
        $this->resetConvocareFields();
        $this->destinatar = $id;
    }

    public function editeazaUser($id)
    {
        $user  = User::find($id);
        $this->id = $user->id;
        $this->username = $user->username;
        $this->entitate = $user->entitate;
    }
    
    public function modificaUser()
    {
        $user  = User::find($this->id);
        $user->username = $this->username;
        $user->entitate =  $this->entitate;
        $user->save();
        $this->dispatch("close-modal");
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
