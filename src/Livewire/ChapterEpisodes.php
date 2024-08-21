<?php

namespace BrunoFalcaoDev\Livewire;

use Livewire\Component;

class ChapterEpisodes extends Component
{
    public $chapter;
    public $episodes;
    public $hide_completed = false;
    public $only_new = false;

    public $count = 0;

    public function mount($chapter)
    {
        $this->chapter = $chapter;
        $this->episodes = $chapter->episodes; // lets us filter later
    }

    public function setupEpisodeQuery()
    {
        // set episodes based on hide completed and only new

    }

    public function setHideCompleted($hide_completed)
    {
        $this->hide_completed = $hide_completed;
    }

    public function render()
    {
        return view('backend::livewire.chapter-episodes');
    }
}
