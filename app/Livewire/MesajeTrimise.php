<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Messages;
use Livewire\WithPagination;

class MesajeTrimise extends Component
{
    use WithPagination;


    // protected $paginationTheme = 'bootstrap';
    // public $page;
    // public $mesaje;

    public function render()
    {
        $id = Auth::id();
        $mesaje=  Messages::where("sender", $id)->paginate(10);
        return view('livewire.mesaje-trimise',['mesaje'=>$mesaje])->extends("pages.template")->section('content');
    }
/*
    public function goToPage($page)
    {
        $this->page = $page;
    }
*/
}
