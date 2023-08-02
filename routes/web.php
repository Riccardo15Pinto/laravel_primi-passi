<?php

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

    $data = [
        'name' => 'gianni',
        'lavoro' => 'Libero Professionista',
        'descrizione' => 'Più libero che professionista',
    ];

    return view('home', $data);
})->name('home');


Route::get('/info', function () {

    $data = [
        'path' => 'https://pbs.twimg.com/media/Ecvm9iyXYAMU69A.jpg',
    ];

    return view('info', $data);
})->name('info');
