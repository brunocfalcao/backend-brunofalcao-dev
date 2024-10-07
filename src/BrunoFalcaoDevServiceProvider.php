<?php

namespace BrunoFalcaoDev;

use Livewire\Livewire;
use Eduka\Abstracts\Classes\EdukaServiceProvider;
use Livewire\Mechanisms\ComponentRegistry;

use BrunoFalcaoDev\Livewire\ChapterEpisodes;
use BrunoFalcaoDev\Livewire\WatchEpisode;
use BrunoFalcaoDev\Livewire\GlobalSearch;

final class BrunoFalcaoDevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        Livewire::component('chapter-episodes', ChapterEpisodes::class);
        Livewire::component('watch-episode', WatchEpisode::class);
        Livewire::component('global-search', GlobalSearch::class);

        parent::boot();
    }
}
