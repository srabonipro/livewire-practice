<?php

use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return view('student');
});
