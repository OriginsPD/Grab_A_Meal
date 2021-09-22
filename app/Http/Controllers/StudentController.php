<?php

namespace App\Http\Controllers;

use App\Models\meal_option;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $options = meal_option::with('category')->orderBy('option_nm','desc' )->get()->toArray();

        return view('Student.index', compact('options'));
    }
}
