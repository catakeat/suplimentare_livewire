<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NrPersoaneEntitate extends Component
{
    public $id;
    public $numar;
    /**
     * Create a new component instance.
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.nr-persoane-entitate');
    }
    private function numarPersoane(){
        
    }
}
