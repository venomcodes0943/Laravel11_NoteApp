<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function addUser(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:4',
        ]);

        // You can also just store your validation in variable and pass it to model create method but it will insert only feilds that you validate

        // User::create($attributes);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = $request->password;
        $user->remember_token = Str::random(10);
        $user->save();

        session()->flash('success', 'User Successfully Added');

        return redirect()->route('homepage');
    }

}
