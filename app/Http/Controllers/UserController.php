<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $params = new User();
        // バリデーション
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        $params->name = $request->username;
        $params->email = $request->email;
        $params->password = $request->password;
        $params->salt = bin2hex(random_bytes(16));
        $params->password = hash('sha256', $params->password . $params->salt);
        $params->save();

        return redirect()->route('/home');
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
