<?php

namespace App\Http\Controllers;

use App\Models\meal_category;
use App\Models\meal_choices;
use App\Models\meal_option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $options = meal_option::with('category')->orderBy('option_nm', 'desc')->get()->toArray();

        return view('Student.index', compact('options'));
    }

    public function show($id)
    {
        $choices = meal_choices::with('option', 'users')
            ->where('user_id', $id)->get()->toArray();

//        dd($choices);

        return view('Meals.Choices.edit', compact('choices'));
    }
}
