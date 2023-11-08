<?php

use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
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

// Email related routes
// Route::get('/mail/send', [\App\Http\Controllers\MailController::class,
// 'send']);

Route::post('/connection', [\App\Http\Controllers\MailController::class,
'send']);




Route::get('/', function () {
    return view('test');
});

// Route::post('/connection', [\App\Http\Controllers\Connection::class,
//     'createRequest', function(Request $request){}]);