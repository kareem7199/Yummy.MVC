<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Category;

Route::get('/', function () {

    $categories = Category::all();

    return view('home' , ["categories" => $categories]);

});

Route::get('/dashboard/home', [Controllers\DashboardController::class, 'index'])->name('dashboard.index');

// meals
Route::get('/dashboard/meals' , [Controllers\MealController::class , 'index'])->name('meals.index');
Route::get('/dashboard/meals/create' , [Controllers\MealController::class , 'create'])->name('meals.create');
Route::get('/dashboard/meals/{meal}' , [Controllers\MealController::class , 'show'])->name('meals.show');
Route::get('/dashboard/meals/{meal}/edit' , [Controllers\MealController::class , 'edit'])->name('meals.edit');
Route::put('/dashboard/meals/{meal}' , [Controllers\MealController::class , 'update'])->name('meals.update');
Route::delete('/dashboard/meals/{meal}' , [Controllers\MealController::class , 'destroy'])->name('meals.destroy');
Route::post('/dashboard/meals' , [Controllers\MealController::class , 'store'])->name('meals.store');

//category
Route::get('/dashboard/categories' , [Controllers\CategoryController::class , 'index'])->name('categories.index');
Route::get('/dashboard/categories/create' , [Controllers\CategoryController::class , 'create'])->name('categories.create');
Route::get('/dashboard/categories/{category}' , [Controllers\CategoryController::class , 'show'])->name('categories.show');
Route::get('/dashboard/categories/{category}/edit' , [Controllers\CategoryController::class , 'edit'])->name('categories.edit');
Route::put('/dashboard/categories/{category}' , [Controllers\CategoryController::class , 'update'])->name('categories.update');
Route::delete('/dashboard/categories/{category}' , [Controllers\CategoryController::class , 'destroy'])->name('categories.destroy');
Route::post('/dashboard/categories' , [Controllers\CategoryController::class , 'store'])->name('categories.store');


