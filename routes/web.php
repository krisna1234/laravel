<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;

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
    return view('home', [
                        'name'=>'Raffel Krisna Febriyanto',
                         'role'=>'admin',
                         'buah'=>['pepaya', 'mangga', 'pisang', 'jambu']
                        ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);

Route::get('/contact', function () {
    return view('contact', [
                        'nama'=>'Raffel Krisna Febriyanto',
                         'no_telp'=>'085157088984',
                         'alamat'=>'Perum Bukit Kalibagor Indah Blok E1 No 3'
                        ]);
});

// Route::get('/about', function () {
//     return view('about');
// });



