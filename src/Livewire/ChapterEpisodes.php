<?php

namespace BrunoFalcaoDev\Livewire;

use Livewire\Component;

class ChapterEpisodes extends Component
{
    public $chapter;
    public $episodes;
    public $hideCompleted = false;
    public $onlyNew = false;

    public function mount($chapter)
    {
        $this->chapter = $chapter;
        $this->episodes = $chapter->episodes; // lets us filter later
    }

    public function setupEpisodeQuery()
    {
        if ($this->hideCompleted)
            $this->episodes = $this->chapter->episodes->skip(1);
        else
            $this->episodes = $this->chapter->episodes;
    }

    public function render()
    {
        $this->setupEpisodeQuery();
        $this->dispatch('render');
        return view('backend::livewire.chapter-episodes');
    }
}
