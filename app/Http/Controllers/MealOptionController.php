<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOption;
use App\Models\meal_category;
use App\Models\meal_option;
use Illuminate\Http\Request;

class MealOptionController extends Controller
{
    public function create()
    {
        $categories = meal_category::all()->toArray();

        return view('Meals.Option.create', compact('categories'));
    }

    public function store(CreateOption $request)
    {

        meal_option::create($request->validated());

        return redirect()->route('meal_option.create')->with('success','Meal Option Added Successfully');
    }
}
