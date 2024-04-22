<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Category;

Route::get('/', function () {

    $categories = Category::all();

    return view('home' , ["categories" => $categories]);

});

Route::get('/dashboard/home', [Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard/meals' , [Controllers\MealController::class , 'index'])->name('meals.index');
Route::get('/dashboard/meals/create' , [Controllers\MealController::class , 'create'])->name('meals.create');
Route::get('/dashboard/meals/{meal}' , [Controllers\MealController::class , 'show'])->name('meals.show');

Route::post('/dashboard/meals' , [Controllers\MealController::class , 'store'])->name('meals.store');
