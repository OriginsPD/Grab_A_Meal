<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function store(LoginUser $request)
    {

        if (Auth::attempt($request->validated())) {
            if(auth::user()->is_admin){
                return redirect()->route('admin.index');
            }
            return redirect()->route('student.index');
        }
        return redirect()->route('login.index');
    }
}
