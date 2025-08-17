<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpVerificationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Traits\ApiResponse;

class LoginController extends Controller
{
    use ApiResponse;

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (!$token = Auth::attempt($credentials)) {
            return $this->error([],'Invalid credentials', 401);
        }

        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {
            return $this->error([],'Email not verified. Please verify your email first.',403);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        Auth::logout();

        return $this->success([], 'Successfully logged out', 200);
    }

    public function refresh()
    {
        return $this->respondWithToken(Auth::refresh());
    }

    protected function respondWithToken($token)
    {
        $data = [
            'user' => Auth::user()->only(['id', 'name', 'email']),
            'token_type' => 'bearer',
            'token_lifespan' => Auth::factory()->getTTL() * 60, 
            'token' => $token, 
        ];

        return $this->success($data,'User logged in Successfully', 200);
    }
}