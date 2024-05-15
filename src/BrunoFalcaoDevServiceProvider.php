<?php

namespace BrunoFalcaoDev;

use Eduka\Abstracts\Classes\EdukaServiceProvider;

final class BrunoFalcaoDevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        $this->customViewNamespace(__DIR__.'/../resources/views', 'backend');

        parent::boot();
    }

    public function register()
    {
        //
    }
}
