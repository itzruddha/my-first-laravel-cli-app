<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/user/{id}', function ($id) {
//     $user = App\Models\User::find($id);
//     return $user;
// });


Route::resource('users', UserController::class);