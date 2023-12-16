<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::view('/', 'welcome');
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/page/{number}', function (string $number) {
//     return 'page '.$number;
// });
Route::get('/services', function () {
    return view('services');
});
Route::post('/send-message', function ( Request $request) {
    return '<ul>'.
    '<li>'.$request->email.'</li>'.
    '<li>'.$request->fullName.'</li>'.
    '<li>'.$request->topic.'</li>'.
    '<li>'.$request->message.'</li>'.
    '</ul>';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
