<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = [
        'name' => 'Tony',
        'lastname' => 'Stark',
    ];
    return view('home', $data);
});


Route::get('/members', function () {
    $members = [
        'name' => ['Black Widow', 'Dr Strange', 'Thor', 'Cap\'n America']
    ];
    return view('members', $members);
})->name('members');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/sign_in', function () {
    return view('sign_in');
})->name('sign_in');