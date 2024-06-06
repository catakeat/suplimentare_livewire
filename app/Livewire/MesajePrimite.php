<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class MesajePrimite extends Component
{
    use WithPagination;

    protected $bootstrapTheme="bootstrap";

   // public $mesaje;

    public function render()
    {
        $id = Auth::id();

        $this->mesaje = Messages::where("destinatar", $id);

        return view('livewire.mesaje-primite', ["mesaje" => $this->mesaje])->extends("pages.template")->section('content');;
    }
}
