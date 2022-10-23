<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $selected;

    public function mount($headerSelected){
        $this->selected = $headerSelected;
    }

    public function render()
    {
        return view('livewire.header', ["headerSelected" => $this->selected]);
    }
}
