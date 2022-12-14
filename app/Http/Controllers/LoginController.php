<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(){

        $credentials= request()->only('email', 'password');

        if (Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect('user');
        }

        return 'bad login';
    }

    public function create(){
        return view('create');
    }
}
