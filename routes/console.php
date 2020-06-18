<?php

use Illuminate\Foundation\Inspiring;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Artisan;
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
