<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $remember = $request['remember'];

        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1], $remember)) {
            // Authentication passed...
            return redirect()->intended('/home')->with([
                'status' => 'info',
                'message' => 'You are now logged in.',
            ]);
        }

        return redirect('/')->with([
            'status' => 'warning',
            'message' => 'Access not allowed.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}