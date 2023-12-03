<?php

use App\Exports\UserExport;
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
    return view('welcome');
});

Route::get('/export-pdf', function () {
    (new UserExport())->queue('public/users.pdf');

    return redirect()->to('/');
});

Route::get('/export-excel', function () {
    (new UserExport())->queue('public/users.xlsx');

    return redirect()->to('/');
});
