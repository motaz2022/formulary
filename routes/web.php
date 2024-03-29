<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowDrug;
use App\Http\Livewire\Contact;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drug/{drug}', ShowDrug::class);

Route::get('/report', Contact::class)->name('report');
