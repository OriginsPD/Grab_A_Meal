<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChoice;
use App\Models\meal_choices;
use App\Models\meal_option;
use Illuminate\Http\Request;

class MealChoicesController extends Controller
{
    public function index()
    {
        $choices = meal_choices::with('option','users')->get()->toArray();
//        dd($choices);
        return view('Meals.Choices.index',compact('choices'));
    }

    public function create()
    {
        $options = meal_option::all()->toArray();

        return view('Meals.Choices.create', compact(['options']));
    }

    public function store(CreateChoice $request)
    {
        $option_ids = $request->get('option_id');
        foreach ($option_ids as $option_id)
        {
            meal_choices::create([
                'user_id' => $request->get('user_id'),
                'option_id' => $option_id,
                'date' => date('Y-m-d h:i:s'),
            ]);
        }

        return redirect()->route('meal_choices.create')->with('success', 'Meal Order As Been Made');
    }
}
