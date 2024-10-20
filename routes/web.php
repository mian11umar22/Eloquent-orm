<?php

use App\Http\Controllers\EmpployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('employee',EmpployeeController::class);
