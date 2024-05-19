<?php

namespace BrunoFalcaoDev;

use Illuminate\Support\Facades\Blade;
use Eduka\Abstracts\Classes\EdukaServiceProvider;

final class BrunoFalcaoDevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        Blade::anonymousComponentPath(__DIR__.'/../resources/views/components');

        parent::boot();
    }
}
