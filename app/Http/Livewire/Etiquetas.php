<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Etiquetas extends Component
{
    public function render()
    {
        return view('livewire.etiquetas')->layout('layouts.app-etiqueta');
    }
}
