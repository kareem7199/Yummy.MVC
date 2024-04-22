<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\Category;

class MealController extends Controller
{
    public function index () {
        
        $meals = Meal::all();
        return view('meals.index' , ["meals" => $meals]);
    }

    public function create () {

        $categories = Category::all();
        
        return view('meals.create' , ["categories" => $categories]);
    }

    public function store () {

        $fileNameWithExt = request()->file('img')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = request()->file('img')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = request()->file('img')->storeAs('public/meals', $fileNameToStore);

        $name = request()->name;
        $category_id = request() -> category_id;
        $ingredients = request() -> ingredients;
        $price = request() -> price;
        $img = "this is img";

        $meal = Meal::create([
            'category_id' => $category_id,
            'name' => $name,
            'ingredients' => $ingredients,
            'price' => $price,
            'img' => $fileNameToStore, // Store the image in 'storage/app/public/meals'
        ]);

        return to_route('meals.index');
    }

    public function show (Meal $meal) {

        return view('meals.show' , ["meal" => $meal]);
    }

    public function edit(Meal $meal) {
        $categories = Category::all();
        return view('meals.edit', ['meal' => $meal , 'categories' => $categories]);
    }

    public function update(Meal $meal) {
            // Update the meal with the new data
        $meal->name = request()->name;
        $meal->ingredients = request()->ingredients;
        $meal->price = request()->price;
        $meal->category_id = request()->category_id;
        $meal->save();
        
        return to_route('meals.index');
    }

    public function destroy(Meal $meal) {
        $meal->delete();
        return to_route('meals.index');
    }

}
