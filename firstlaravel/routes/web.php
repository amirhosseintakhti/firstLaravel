<?php

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    

    Message::insert([
        'fullname' =>$request ->fullName,
        'email' =>$request ->email,
        'topic' =>$request ->topic,
        'message' =>$request ->message,


    ]);
    // DB::table('messages')->insert([
    //     'fullname' =>$request ->fullName,
    //     'email' =>$request ->email,
    //     'topic' =>$request ->topic,
    //     'message' =>$request ->message,


    // ]);
    
    return '<ul>'.
    '<li>'.$request->fullName.'</li>'.
    '<li>'.$request->email.'</li>'.
    '<li>'.$request->topic.'</li>'.
    '<li>'.$request->message.'</li>'.
    '</ul>';

    // $array = array($request);
    // foreach($array as $request){
    //      echo $request->fullName . '</br>' . $request->email . '</br>' . $request->topic. '</br>' . $request->message ; 


    // }
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
