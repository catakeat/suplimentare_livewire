<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Messages;
use Livewire\WithPagination;

class MesajeTrimise extends Component
{
    use WithPagination;

    public $search="";
    public $records=2;

    // protected $paginationTheme = 'bootstrap';
    // public $page;
    // public $mesaje;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
       
        $id = Auth::id();
      /*  return view("livewire.mesaje-trimise",['mesaje'=> Messages::where("sender", $id)
        ->where("mesaj", 'like', '%' . trim($this->search) . '%')->paginate($this->records)]);*/
        if($this->search!=""){

        $mesaje =  Messages::where("sender", $id)->where("mesaj",'like','%'.$this->search.'%')->paginate($this->records);
            return view('livewire.mesaje-trimise', ['mesaje' => $mesaje, 'search' => $this->search])->extends("pages.template")->section('content');
        }
        else{
            $mesaje = Messages::where("sender",$id)->paginate($this->records);
            return view('livewire.mesaje-trimise',['mesaje'=> $mesaje])->extends("pages.template")->section('content');
        }
     
    }
    /*
    public function goToPage($page)
    {
        $this->page = $page;
    }
*/
}
