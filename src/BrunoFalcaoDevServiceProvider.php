<?php

namespace BrunoFalcaoDev;

use Livewire\Livewire;
use Eduka\Abstracts\Classes\EdukaServiceProvider;
use Livewire\Mechanisms\ComponentRegistry;

use BrunoFalcaoDev\Livewire\ChapterEpisodes;

final class BrunoFalcaoDevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        Livewire::component('chapter-episodes', ChapterEpisodes::class);

        parent::boot();
    }
}
