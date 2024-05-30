<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;

class ConvoacaForm extends Component
{
    public $ora;
    public $data;
    public $mesaj;
    public $destinatar;

    protected $rules = [
        'ora' => 'required',
        'data' => 'required|date',
        'mesaj' => 'required|string|max:255',
        'destinatar' => 'required|exists:users,id',
    ];
    public function resetFields()
    {
        $this->ora = "";
        $this->data = "";
        $this->mesaj = "";
        $this->destinatar = "";
    }
    public function alegeUser($id_destinatar)
    {
       dd($id_destinatar);
        $this->resetFields();
        $this->destinatar = $id_destinatar;
        // dd($this->destinatar);
    }

    public function render()
    {
        return view('livewire.convoaca-form');
    }
    /*
    public function mount($destinatar = null)
    {
        $this->destinatar = $destinatar;
    }
*/
    public function convoacaUser()
    {
        $data = $this->validate();


       // dd($data);
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
}
