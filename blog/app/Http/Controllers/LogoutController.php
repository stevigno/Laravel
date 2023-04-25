<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout() //deconnexion
    {
    	Auth::logout();
    	return redirect()->route('login');
    }
}
