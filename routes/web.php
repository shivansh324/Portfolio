<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function() {
    return view('index');
});

Route::post('/send-email', [EmailController::class, 'send_mail']);