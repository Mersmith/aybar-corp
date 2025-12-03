<?php

namespace App\Livewire\Atc\ReporteCita;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin.layout-admin')]
class ReporteCitaLivewire extends Component
{
    public function render()
    {
        return view('livewire.atc.reporte-cita.reporte-cita-livewire');
    }
}
