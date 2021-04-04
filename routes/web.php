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
    //Carbon\Carbon::setLocale(config('app.locale'));
    $time = Carbon\Carbon::now()->toDayDateTimeString();
    $to_name = 'Lorenz';
    $to_email = 'lenzras@gmail.com';
    $data = array('name'=>"Lenz", "body" => "Try lang ulit bro. Oras: " . $time);

    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('JRS Team Testing email.');
        $message->from('jrsamaoed@gmail.com','domain:smartwems');
    });


     $to_name = 'Jeff';
    $to_email = 'darksil3nt17@icloud.com';
    $data = array('name'=>"Jeff", "body" => "Try lang bro. Oras: " . $time );

    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('JRS Team Testing email.');
        $message->from('jrsteam@smartwems.com','domain:smartwems');
    });

    $to_name = 'Rodel';
    $to_email = 'rrsalvadorjr@gmail.com';
    $data = array('name'=>"Rodel", "body" => "Try lang bro. Oras: " . $time);

    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('JRS Team Testing email.');
        $message->from('jrsteam@smartwems.com','domain:smartwems');
    });

    return 'SENT! Try lang.';
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/nippo', [App\Http\Controllers\NippoController::class, 'nippo'])->name('nippo');
Route::get('/nippo_sample', [App\Http\Controllers\NippoController::class, 'nippo_sample'])->name('nippo_sample');
