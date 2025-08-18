<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function  (Request $request) {
  $connection = DB::connection('mongodb');
  try {
    $connection->command(['ping' => 1]);
    $msg = 'MongoDB is accessible!';
  } catch (Exception $e) {
    $msg = 'You are not connected to MongoDB. Error: ' . $e->getMessage();
  }
  return ['msg' => $msg];
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('tasks', TaskController::class)->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/testroute', function() {
    $name = "Funny Coder";

    // The email sending is done using the to method on the Mail facade
    Mail::to('prashanthero13@gmail.com')->send(new MyTestEmail($name));
});

require __DIR__.'/auth.php';
