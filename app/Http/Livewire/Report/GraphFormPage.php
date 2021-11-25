<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;

class GraphFormPage extends Component
{

    protected $rules = [];

    public function submited()
    {
        $this->validate();

        return redirect()
            ->route('')
            ->with(
                'message',
                'Yeaahh berhasil menambahkan pemantuan'
            );
    }

    public function render()
    {
        return view('livewire.reports.graph-form')
            ->extends('layouts.livewire');
    }
}
