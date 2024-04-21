<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
Route::get('/', function () {
    // $categories = ["Starters" , "Breakfast" , "Lunch" , "Dinner"];
    $categories = [
        [
            "name" => "Starters",
            "products" => [
                [
                    "name" => "Magnam Tiste",
                    "price" => 5.95,
                    "img" => "menu-item-1.png",
                    "ingredients" => "Lorem, deren, trataro, filede, nerada"
                ],
                [
                    "name" => "Aut Luia",
                    "price" => 14.95,
                    "img" => "menu-item-2.png",
                    "ingredients" => "Lorem, deren, trataro, filede, nerada"
                ],
                // Add more products for Starters here
            ]
        ],
        [
            "name" => "Breakfast",
            "products" => [
                [
                    "name" => "Breakfast Product 1",
                    "price" => 7.95,
                    "img" => "breakfast-item-1.png",
                    "ingredients" => "Lorem, deren, trataro, filede, nerada"
                ],
                [
                    "name" => "Breakfast Product 2",
                    "price" => 9.95,
                    "img" => "breakfast-item-2.png",
                    "ingredients" => "Lorem, deren, trataro, filede, nerada"
                ],
                // Add more products for Breakfast here
            ]
        ],
        [
            "name" => "Lunch",
            "products" => [
                [
                    "name" => "Lunch Product 1",
                    "price" => 10.95,
                    "img" => "lunch-item-1.png",
                    "ingredients" => "Lorem, deren, trataro, filede, nerada"
                ],
                // Add more products for Lunch here
            ]
        ],
        [
            "name" => "Dinner",
            "products" => [
                [
                    "name" => "Dinner Product 1",
                    "price" => 12.95,
                    "img" => "dinner-item-1.png",
                    "ingredients" => "Lorem, deren, trataro, filede, nerada"
                ],
                // Add more products for Dinner here
            ]
            ],
            [
                "name" => "Testtt",
                "products" => [
                    // [
                    //     "name" => "Dinner Product 1",
                    //     "price" => 12.95,
                    //     "img" => "dinner-item-1.png",
                    //     "ingredients" => "Lorem, deren, trataro, filede, nerada"
                    // ],
                    // Add more products for Dinner here
                ]
            ]
    ];
    
    
    return view('home' , ["categories" => $categories]);
});

Route::get('/dashboard/home', [Controllers\DashboardController::class, 'index'])->name('dashboard.index');
