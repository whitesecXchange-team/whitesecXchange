<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // User registration function

    function show_register_choice(){
        return view('registerchoice');
    }

    function show_login_choice() {
        return view('loginChoice');
    }

    function show_register_hacker() {
        return view('registerHacker');
    }

    function show_register_company() {
        return view('registerCompany');
    }

    function show_login_hacker(){
        return view('loginHacker');
    }

    function show_login_company(){
        return view('loginCompany');
    }

    function user_register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|unique:users,name|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'balance' => 0.00, // Default balance
        ]);

        return redirect()->route('login.hacker')->with('success', 'Registration successful. Please log in.');
    }

    // Company registration function
    function company_register(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255|unique:companies,company_name',
            'company_email' => 'required|email|unique:companies,company_email',
            'password' => 'required|string|min:8|confirmed',
            'company_url' => 'nullable|url|unique:companies,company_url',
        ]);

        $company = Company::create([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'password' => Hash::make($request->password),
            'company_url' => $request->company_url,
        ]);

        return redirect()->route('login.company')->with('success', 'Registration successful. Please log in.');
    }

    // User login function
    function user_login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('name', 'password'))) {
            throw ValidationException::withMessages([
                'name' => ['The provided credentials are incorrect.'],
            ]);
        }

        return redirect()->route('user.profile', Auth::id());
    }

    // Company login function
    function company_login(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::guard('company')->attempt($request->only('company_name', 'password'))) {
            throw ValidationException::withMessages([
                'company_name' => ['The provided credentials are incorrect.'],
            ]);
        }

        return redirect()->route('company.profile', Auth::guard('company')->id());
    }

    public function logout(Request $request)
    {
        if (Auth::guard('company')->check()) {
            Auth::guard('company')->logout();
        } elseif (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    
}
