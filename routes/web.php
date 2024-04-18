<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send/mail', [SendMailController::class, 'sendMailWithAttachment']);
