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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/6179781874:AAEbOAj4BrBFKLVB5q2wy6HsYoATfeX_DLY/webhook', function () {
    $updates = Telegram::getWebhookUpdates();

    // Handle the update
});

Route::post('/6179781874:AAEbOAj4BrBFKLVB5q2wy6HsYoATfeX_DLY/webhook', function () {
    $updates = Telegram::getWebhookUpdates();

    $message = $updates->getMessage();

    if ($message !== null && $message->has('text')) {
        Telegram::sendMessage([
            'chat_id' => $message->getChat()->getId(),
            'text' => 'Hello, I am your Laravel Telegram bot!'
        ]);
    }

    return 'ok';
});
