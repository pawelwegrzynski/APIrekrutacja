<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
public function showLoginForm()
{
// zwraca widok formularza logowania
return view('auth.login');
}

    public function login(Request $request)
    {
        // Używamy $request->input('email') i $request->input('password') zamiast $request->email i $request->password
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::validate($credentials)) {
            $user = User::where('email', $request->input('email'))->first();
            $token = $user->createToken('MyApp')->accessToken;

            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
