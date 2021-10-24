<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;

class EditedPage extends Component
{
    public function render()
    {
        return view('livewire.reports.edited')
            ->extends('layouts.livewire');
    }
}
