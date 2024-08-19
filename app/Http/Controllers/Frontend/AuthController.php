<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerRegisterRequest;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return \view('Frontend.auth.login');
    }

    public function loginPost(CustomerLoginRequest $request): RedirectResponse
    {
        $remember = $request->has('remember');

        if (! Auth::guard('customer')->attempt($request->validated(), $remember)) {
            return back()->with('error', __('Telefon nömrəsi və ya şifrə yanlışdır !'));
        }

        $request->session()->regenerate();

        return to_route('dashboard');
    }

    public function register(): View
    {
        return \view('Frontend.auth.register');
    }

    public function registerPost(CustomerRegisterRequest $request): RedirectResponse
    {
        Customer::query()
            ->create([
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

        return to_route('auth.login')->with('success', 'Qeydiyyatınız uğurla tamamlandı. Zəhmət olmazsa profilinizə daxil olun.');
    }
}
