<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\FormDataController;
use App\HTTP\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('signUp', function () {
    return view('signUp');
})->name('signUp');

Route::get('signIn', function () {
    return view('signIn');
})->name('signIn');

Route::get('signUp', function () {
    return view('signUp');
})->name('signUp');

Route::get('Galleries',function (){
    return view('Galleries');
})->name("Galleries");

Route::post('signUp', [AuthController::class, 'signUp'])->name('signUp.signUp');
Route::post('/', [AuthController::class, 'logout'])->name('logout');
Route::post('signIn', [AuthController::class, 'login'])->name('signIn.signIn');


//establishing a route group
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //holy fuck this route was a nightmare,saves the show function, USER IS A VARIABLE
    Route::get('profile', function () {
        return view('profile', ['user' => auth()->user()]);
    })->name('dashboard.profile');


    Route::get('changeUser',function(){
       return view('changeUser');
    })->name('dashboard.changeUser');

    Route::post('changeUser',[FormDataController::class, 'update',])->name('dashboard.changeUsername');
});
