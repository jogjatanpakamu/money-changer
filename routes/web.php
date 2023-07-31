<?php

use App\Models\MataUang;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {

    $exc = Transaction::all();

    return view('welcome', compact('exc'));
});

Route::get('converter/{from}/{to}', function (string $from, string $to) {

    echo $from;
});
