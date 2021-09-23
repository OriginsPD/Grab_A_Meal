<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChoice;
use App\Models\meal_choices;
use App\Models\meal_option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealChoicesController extends Controller
{
    public function index()
    {
        $choices = meal_choices::with('option', 'users')->get()->toArray();

        return view('Meals.Choices.index', compact('choices'));
    }

    public function create()
    {
        $options = meal_option::all()->toArray();

        return view('Meals.Choices.create', compact(['options']));
    }

    public function store(CreateChoice $request)
    {
        $option_ids = $request->get('option_id');
        foreach ($option_ids as $option_id) {
            meal_choices::create([
                'user_id' => $request->get('user_id'),
                'option_id' => $option_id,
                'date' => date('Y-m-d'),
            ]);
        }

        return redirect()->route('meal_choices.create')->with('success', 'Meal Order As Been Made');
    }

    public function destroy($id)
    {
        $meal = meal_choices::find($id);
        $meal->delete();

        return redirect()->route('student.show', Auth::id())->with('success', 'Order Deleted Success');
    }

}
