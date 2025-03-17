<?php

use App\Http\Controllers\NewsletterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    // Delve mobile newsletter
    // Newsletter unsubscribe route
    Route::get('newsletter/unsubscribe/{email}', function ($email) {
        // Add logic to unsubscribe the user
        return view('newsletter.unsubscribe', compact('email'));
    })->name('newsletter.unsubscribe');

    Route::post('newsletter/subscribe',[NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
});
