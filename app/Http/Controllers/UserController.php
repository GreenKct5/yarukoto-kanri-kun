<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        // バリデーション
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->salt = bin2hex(random_bytes(16));
        $user->password = hash('sha256', $user->password . $user->salt);
        $user->save();

        Auth::login($user);

        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
