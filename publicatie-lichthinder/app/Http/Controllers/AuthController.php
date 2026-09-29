<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function firstPage()
    {
        $role = Auth::user()->role;

        switch ($role) {
            case 'admin':
                // return redirect()->intended('dashboard');
                break;
            case 'employee':
                return redirect()->intended('/');
                break;
            default:
                return redirect()->intended('/');
                break;
        }
    }

    public function register(Request $request)
    {
        // $request->validate(
        //     [
        //         'name' => ['required', 'min:2', 'max:255'],
        //         'email' => 'required|email|unique:users,email',
        //         'password' => 'required|min:5|max:50',
        //         'password_confirm' => 'required|same:password',
        //     ],
        //     [
        //         'name.required' => 'Vul je naam in.',
        //         'name.min' => 'Ingevulde naam te kort.',
        //         'name.max' => 'Ingevulde naam te lang.',

        //         'email.required' => 'Vul je e-mailadres in.',
        //         'email.email' => 'Vul een geldig e-mailadres in.',
        //         'email.unique' => 'Dit e-mailadres is al in gebruik.',

        //         'password.required' => 'Vul je wachtwoord in.',
        //         'password.min' => 'Ingevulde wachtwoord te kort.',
        //         'password.max' => 'Ingevulde wachtwoord te lang.',

        //         'password_confirm.required' => 'Bevestig je wachtwoord.',
        //         'password_confirm.same' => 'De wachtwoorden komen niet overeen.',
        //     ]
        // );

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // Auth::login($user);

        // $request->session()->regenerate();

        // return $this->firstPage();
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
            [
                'email.required' => 'Vul je e-mailadres in.',
                'email.email' => 'Vul een geldig e-mailadres in.',
                'password.required' => 'Vul je wachtwoord in.',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return $this->firstPage();
        }

        return back()->withErrors([
            'email' => 'We Kunnen de gegevens niet vinden.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('inloggen');
    }
}
