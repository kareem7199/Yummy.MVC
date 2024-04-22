<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index () {
        
        $categories = Category::all();
        return view('categories.index' , ["categories" => $categories]);
    }

    public function create () {
        return view('categories.create');
    }

    public function store () {

        request()->validate([
            'name' => ['required', 'string', 'max:255', 'min:3', 'regex:/^[a-zA-Z\s]+$/'],
        ], [
            'name.regex' => 'The name field format is invalid. It should only contain alphabetic characters and spaces.',
        ]);
        
        

        $name = request()->name;

        $meal = Category::create([
            'name' => $name,
        ]);

        return to_route('categories.index');
    }

    public function show (Category $category) {

        return view('categories.show' , ["category" => $category]);
    }

    public function edit(Category $category) {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Category $category) {

        request()->validate([
            'name' => 'required|string|max:255|min:3',
        ]);
        
        $category->name = request()->name;
        $category->save();
        
        return to_route('categories.index');
    }

    public function destroy(Category $category) {
        $category->delete();
        return to_route('categories.index');
    }
}
