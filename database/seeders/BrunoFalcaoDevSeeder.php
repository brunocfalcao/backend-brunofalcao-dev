<?php

namespace BrunoFalcaoDev\Database\Seeders;

use Eduka\Cube\Models\Backend;
use Illuminate\Database\Seeder;

class BrunoFalcaoDevSeeder extends Seeder
{
    public function run()
    {
        $backend = Backend::create([
            'name' => 'brunofalcao.dev',
            'canonical' => 'backend-brunofalcao-dev',
            'domain' => env('BDEV_DOMAIN'),
            'clarity_code' => env('BDEV_CLARITY_CODE'),
            'provider_namespace' => '\BrunoFalcaoDev\BrunoFalcaoDevServiceProvider',
        ]);
    }
}
