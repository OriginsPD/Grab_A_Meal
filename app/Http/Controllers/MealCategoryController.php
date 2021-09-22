<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategory;
use App\Models\meal_category;
use Illuminate\Http\Request;

class MealCategoryController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('Meals.Category.create');
    }

    public function store(CreateCategory $request)
    {
        meal_category::create($request->validated());

        return redirect()->route('meal_category.create')->with('success','Category Add Successful');
    }
}
