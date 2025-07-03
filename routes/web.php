<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        return '🔥 DB CONNECTED!';
    } catch (\Exception $e) {
        return '❌ DB ERROR: ' . $e->getMessage();
    }
});

