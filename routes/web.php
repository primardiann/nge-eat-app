<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

RRoute::get('/', function () {
    DB::connection()->getPdo();
    return '🔥 Laravel + DB connect sukses!';
});


