<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request): RedirectResponse
    {   
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended($this->redirectTo()); // Calls redirectTo() function
        }

        return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
    }

    protected function redirectTo()
    {
        if (Auth::user()->type == 'Admin') {
            return route('admin.home');
        }
        return route('home');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('login')->with('success', 'You have been logged out successfully.')
            ->withHeaders([
                'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
                'Pragma' => 'no-cache',
                'Expires' => 'Thu, 01 Jan 1970 00:00:00 GMT'
            ]);
    }

    public function showLoginForm(Request $request)
    {
        if ($request->is('admin') || $request->is('admin/*')) {
            return view('auth.admin_login'); // Admin login page
        }
        return view('auth.login'); // User login page
    }
}
