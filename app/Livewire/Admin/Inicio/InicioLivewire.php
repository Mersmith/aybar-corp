<?php

namespace App\Livewire\Admin\Inicio;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.web.layout-web')]
class InicioLivewire extends Component
{
    public function render()
    {
        return view('livewire.admin.inicio.inicio-livewire');
    }
}
