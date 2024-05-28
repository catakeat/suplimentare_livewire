<?php

namespace App\Livewire;

use Livewire\Component;

class ConvoacaForm extends Component
{
    public $test;

    public function render()
    {
        $this->test ="teste";
        return view('livewire.convoaca-form');
    }
}
