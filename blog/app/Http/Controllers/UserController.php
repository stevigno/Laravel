<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function profile(User $user)
    {
        return 'je suis de retour et nom nom : '.$user->name;
    }
}
