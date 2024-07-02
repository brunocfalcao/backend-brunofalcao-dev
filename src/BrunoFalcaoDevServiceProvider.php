<?php

namespace BrunoFalcaoDev;

use Eduka\Abstracts\Classes\EdukaServiceProvider;

final class BrunoFalcaoDevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->dir = __DIR__;

        parent::boot();
    }

    public function index()
    {
        return "Hello";
    }
}
