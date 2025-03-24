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

    public function showUserLoginForm()
    {
        return view('auth.login'); // Regular login view
    }

    // Show the admin login form
    public function showAdminLoginForm()
    {
        return view('auth.admin_login'); // Admin login view
    }

    // Process the user login
    public function userLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt login
        if (Auth::attempt($credentials)) {
            // Prevent admins from logging in as normal users
            if (Auth::user()->type === 'Admin') {
                Auth::logout();
                return redirect()->back()->with('error', 'Admins must log in via the admin login page.');
            }
    
            return redirect()->intended(route('website.home'));
        }
    
        return redirect()->back()->withInput()->with('error', 'Email and Password are incorrect.');
    }

    // Process the admin login
    public function adminLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Ensure the logged-in user is an admin
            if (Auth::user()->type !== 'Admin') {
                Auth::logout();
                return redirect()->back()->withInput()->with('error', 'You are not authorized to access the admin panel.');
            }
            return redirect()->intended(route('admin.home'));
        }

        return redirect()->back()->withInput()->with('error', 'Email and Password are incorrect.');
    }
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended($user->type === 'Admin' ? route('admin.home') : route('website.home'));
    }
    
    public function logout(Request $request): RedirectResponse
    {
        // Capture the user type before logging out
        $userType = Auth::user()?->type;
      
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        // Use the captured user type for redirection
        $redirectRoute = $userType === 'Admin' ? route('admin.login') : route('website.home');
        // dd($redirectRoute);
        return redirect($redirectRoute)
            ->with('success', 'You have been logged out successfully.')
            ->withHeaders([
                'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
                'Pragma' => 'no-cache',
                'Expires' => 'Thu, 01 Jan 1970 00:00:00 GMT'
            ]);
    }
    
    

    // public function showLoginForm(Request $request)
    // {
        
    //     if ($request->is('admin') || $request->is('admin/*')) {
    //         return view('auth.admin_login'); // Admin login page
    //     }
        
    //     return view('auth.login'); // User login page
    // }
}
