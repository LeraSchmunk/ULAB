<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogsController;

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
    return view('test');
});

Route::post('/connection', [\App\Http\Controllers\MailController::class,
'send', function(Request $request){}]);

Route::get('/getLog', [LogsController::class, 'getIP']);
Route::get('/getFileIp', [LogsController::class, 'vision_ip']);
Route::get('/privacy_policy', function () {
    return Storage::download('public/policy.pdf', 'Политика конфиденциальности.pdf');
});
