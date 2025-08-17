<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponse;

class ProfileController extends Controller
{
    use ApiResponse;

    public function show()
    {
        $user = Auth::user();
        $data = $user->only(['id', 'name', 'email', 'email_verified_at']);

        return $this->success($data,'Profile fetched successfully',200);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'sometimes|string|min:8|confirmed',
        ]);

        $data = $request->only(['name', 'email']);

        if ($request->has('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return $this->success($user,'Profile updated successfully',200);
    }
}