<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Auth::routes();



Route::get('/emailtry', function () {
    $to_name = 'Lorenz';
    $to_email = 'lenzras@gmail.com';
    $data = array('name'=>"Lenz", "body" => "Try lang ulit bro.");

    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('JRS Team Testing email.');
        $message->from('jrsamaoed@gmail.com','Smartwems');
    });

    $to_name = 'Jeff';
    $to_email = 'darksil3nt17@icloud.com';
    $data = array('name'=>"Jeff", "body" => "Try lang bro.");

    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('JRS Team Testing email.');
        $message->from('jrsamaoed@gmail.com','Smartwems');
    });

    $to_name = 'Rodel';
    $to_email = 'rrsalvadorjr@gmail.com';
    $data = array('name'=>"Rodel", "body" => "Try lang bro.");

    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('JRS Team Testing email.');
        $message->from('jrsamaoed@gmail.com','Smartwems');
    });

    return 'Try lang.';
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/nippo', [App\Http\Controllers\HomeController::class, 'nippo'])->name('nippo');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
