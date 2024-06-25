<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Messages;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;

class MesajeTrimise extends Component
{
    use WithPagination;

    public $search = "";
    public $records = 2;

    // protected $paginationTheme = 'bootstrap';
    // public $page;
    private $mesajele;

    protected $listeners = ['submitSearch' => 'submitSearch'];

    public function submitSearch($term)
    {
        /*
        $id = Auth::id();
        $this->search = $term;
       */
   
        session()->forget('search'); // Clears the 'search' session variable
      //  dd($term);
        Session::put("search", $term);
       // $this->mesajele= Session::get("search");
        $this->resetPage();
        $this->dispatch('$refresh');
    }
/*
    public function mount()
    {
        $id = Auth::id();
        $this->mesajele = Messages::where("sender", $id)->paginate($this->records);
    }
*/
    public function render()
    {
        $id = Auth::id();
      
        $searchTerm = Session::get("search") ?? "";

        $test = Messages::query();

       if($searchTerm!="")  {
          //dd($searchTerm);
        
            //    $this->mesajele = Messages::where("sender", $id)->where("mesaj", 'like', '%' . $searchTerm . '%')->paginate($this->records);
            $this->mesajele = $test->where("sender", $id)->where("mesaj", 'like', '%' . $searchTerm . '%')->paginate($this->records);
        } else {
          //  $this->mesajele = Messages::where("sender", $id)->paginate($this->records);
          $this->mesajele =  $test->where("sender", $id)->paginate($this->records);
        }
        return view('livewire.mesaje-trimise', ['mesaje' => $this->mesajele])->extends("pages.template")->section('content');
       
        /*}
        else{
            
           
            return view('livewire.mesaje-trimise', ['mesajele' => $this->mesajele])->extends("pages.template")->section('content');
        }
*/
    }
    /*
    public function render()
    {

        if ($this->search == "") {

        }
        $id = Auth::id();
        $mesaje = "";
       
        if ($this->search != "") {

            $mesajele = Messages::where("sender", $id)->where("mesaj", 'like', '%' . $this->search . '%')->paginate($this->records);
        } else {
            $mesajele = Messages::where("sender", $id)->paginate($this->records);
        }
       // $this->mesaje = $mesajele;

        return view('livewire.mesaje-trimise',['mesajele'=>$mesajele])->extends("pages.template")->section('content');
    }*/
}
