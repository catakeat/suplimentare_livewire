<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class MesajePrimite extends Component
{
    use WithPagination;

    protected $paginationTheme="bootstrap";

   // public $mesaje;

  public  function gotoPage($v,$v1){

      dd($v1);
  }

    public function render()
    {
        $id = Auth::id();

        $mesaje = Messages::where("destinatar", $id)->paginate(2);

        return view('livewire.mesaje-primite', ["mesaje" =>$mesaje])->extends("pages.template")->section('content');;
    }
}
