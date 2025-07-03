<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        return response('🔥 Laravel jalan dan DB connect sukses!', 200);
    } catch (\Exception $e) {
        return response('❌ DB ERROR: '.$e->getMessage(), 500);
    }
});
