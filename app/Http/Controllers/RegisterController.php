<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }

    public function store(CreateUser $request)
    {
        $user = User::create($request->validated());

        return redirect()->route('index');
    }
}
