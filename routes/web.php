<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Category;

Route::get('/', function () {

    $categories = Category::all();

    return view('home' , ["categories" => $categories]);

})->name('home');

Route::middleware('auth')->prefix('dashboard')->group(function () {

    Route::get('/home', [Controllers\DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

    Route::get('/meals' , [Controllers\MealController::class , 'index'])->name('meals.index');
    Route::get('/meals/create' , [Controllers\MealController::class , 'create'])->name('meals.create');
    Route::get('/meals/{meal}' , [Controllers\MealController::class , 'show'])->name('meals.show');
    Route::get('/meals/{meal}/edit' , [Controllers\MealController::class , 'edit'])->name('meals.edit');
    Route::put('/meals/{meal}' , [Controllers\MealController::class , 'update'])->name('meals.update');
    Route::delete('/meals/{meal}' , [Controllers\MealController::class , 'destroy'])->name('meals.destroy');
    Route::post('/meals' , [Controllers\MealController::class , 'store'])->name('meals.store');

    //category
    Route::get('/categories' , [Controllers\CategoryController::class , 'index'])->name('categories.index');
    Route::get('/categories/create' , [Controllers\CategoryController::class , 'create'])->name('categories.create');
    Route::get('/categories/{category}' , [Controllers\CategoryController::class , 'show'])->name('categories.show');
    Route::get('/categories/{category}/edit' , [Controllers\CategoryController::class , 'edit'])->name('categories.edit');
    Route::put('/categories/{category}' , [Controllers\CategoryController::class , 'update'])->name('categories.update');
    Route::delete('/categories/{category}' , [Controllers\CategoryController::class , 'destroy'])->name('categories.destroy');
    Route::post('/categories' , [Controllers\CategoryController::class , 'store'])->name('categories.store');

    //reservations
    Route::get('/reservations' , [Controllers\ReservationController::class , 'index'])->name('reservations.index');
    Route::get('/reservations/create' , [Controllers\ReservationController::class , 'create'])->name('reservations.create');
    Route::get('/reservations/{reservation}' , [Controllers\ReservationController::class , 'show'])->name('reservations.show');
    Route::delete('/reservations/{reservation}' , [Controllers\ReservationController::class , 'destroy'])->name('reservations.destroy');
});
Route::post('/reservations' , [Controllers\ReservationController::class , 'store'])->name('reservations.store');

//auth
// Route::get('/register', [Controllers\AuthController::class, 'register'])->name('register');
// Route::post('/register', [Controllers\AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [Controllers\AuthController::class, 'login'])->name('login.index');
Route::post('/login', [Controllers\AuthController::class, 'loginPost'])->name('login');
Route::get('/logout', [Controllers\AuthController::class, 'logout'])->name('logout');

