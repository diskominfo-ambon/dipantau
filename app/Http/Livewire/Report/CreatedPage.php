<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;

class CreatedPage extends Component
{
    public int $point;

    /** @var array<int> */
    public array $categories;

    public $attachment;

    public string $description = '';

    protected $rules = [
        /**
         * 'Point' atau 'Marker Point' adalah key untuk bidang input lokasi pemantuan.
         */
        'point' => 'required|numeric',
        'categories' => 'required|array',
        'categories.*' => 'numeric',
        'attachments' => 'required|array',
        'attachments.*' => 'numeric',
    ];

    public function submited()
    {
        dd($this->all());
        $this->validate();

        return redirect()
            ->route('')
            ->with(
                'message',
                'Berhasil nih, sedikit lagi untuk menyelesaikan pemantuan'
            );
    }

    public function render()
    {
        return view('livewire.reports.created')
            ->extends('layouts.livewire');
    }
}
