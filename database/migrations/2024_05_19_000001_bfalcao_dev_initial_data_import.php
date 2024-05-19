<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Artisan;

class BfalcaoDevInitialDataImport extends Migration
{
    public function up()
    {
        Artisan::call('db:seed', [
            '--class' => 'BrunoFalcaoDev\Database\Seeders\BrunoFalcaoDevSeeder',
            '--force' => true,
        ]);
    }

    public function down()
    {
        //
    }
}
