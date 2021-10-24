<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;

class CreatedPage extends Component
{

    public function render()
    {
        return view('livewire.reports.created')
            ->extends('layouts.livewire');
    }
}
