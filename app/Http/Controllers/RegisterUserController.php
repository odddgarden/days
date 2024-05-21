<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    

    public function store(Request $request) {

        $attr = $request->validate([
            'username' => ['required', 'unique:users,username'],
            'password' => ['required', 'confirmed']
        ]);

        $user = User::create($attr); 

        
        Auth::login($user);

        return redirect('/profile');
    }
}
