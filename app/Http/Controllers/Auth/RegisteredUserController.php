<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Company;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request->accountType == 'user'){
            $user_role = 'user';
        } else {
            $user_role = 'company_owner';
        }


        $user = User::create([
            'name' => 'nomre_inventado',
            'email' => $request->email,
            'role' => $user_role,
            'password' => Hash::make($request->password),
        ]);

        // If we are registering a company owner we must create the company
        if($user_role == 'company_owner'){
            $companyData = [
                'user_id' => $user->id,
                'name' => $request->companyName,
                'email' => $request->email,
                'category_id' => 1, // Asign first category as a value is required
                'status_id' => 1, // Participa
            ];
            Company::create($companyData);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
