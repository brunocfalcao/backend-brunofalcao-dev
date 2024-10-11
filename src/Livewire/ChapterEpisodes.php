<?php

namespace BrunoFalcaoDev\Livewire;

use Eduka\Cube\Models\Episode;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ChapterEpisodes extends Component
{
    public $chapter;
    public $episodes;
    public $hideCompleted = false;
    public $onlyNew = false;
    public $showTitle = true;

    public function mount($chapter, $showTitle = true)
    {
        $this->chapter = $chapter;
        $this->episodes = $chapter->episodes; // lets us filter later
        $this->showTitle = $showTitle;
    }

    public function setupEpisodeQuery()
    {
        // Have to do this one by one since is_new is a dynamic attribute
        $episodes = [];
        $student = Auth::user();

        foreach ($this->chapter->episodes as $episode) {
            $episode->is_seen = $student->isEpisodeSeen($episode);

            if ($this->onlyNew == true && !$episode->is_new)
                continue;

            if ($this->hideCompleted == true && $episode->is_seen)
                continue;

            $episodes[] = $episode;
        }

        $this->episodes = $episodes;
    }

    public function render()
    {
        $this->setupEpisodeQuery();
        $this->dispatch('render');

        return view('backend::livewire.chapter-episodes');
    }
}
