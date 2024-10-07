<?php

namespace BrunoFalcaoDev\Livewire;

use Eduka\Cube\Models\Episode;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GlobalSearch extends Component
{
    public $query = "";

    public function render()
    {
        $results = [];

        if ($this->query !== '')
            $results = [
                [
                    'title' => 'Result One',
                    'url' => '#'
                ],
                [
                    'title' => 'Result Two',
                    'url' => '#'
                ]
            ];

        return view('backend::livewire.global-search', [
            'results' => $results
        ]);
    }
}
