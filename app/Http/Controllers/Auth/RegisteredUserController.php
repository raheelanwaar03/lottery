<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($referral = 'default'): View
    {
        return view('auth.register', compact('referral'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'country' => ['required'],
            'province' => ['required'],
            'city' => ['required'],
            'referral' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user_id = "JM" . rand(11111, 99999);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'province' => $request->province,
            'city' => $request->city,
            'user_id' => $user_id,
            'referral' => $request->referral,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('User.Dashboard', absolute: false))->with('success', 'You are Register successfully');
    }
}
