<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/detail", function(){
    return view('single_service');
});

Route::post('/contact.send', [ContactController::class, 'send']);
