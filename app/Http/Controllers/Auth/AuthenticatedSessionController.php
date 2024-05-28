<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AuthenticatedSessionController extends Controller {

    /**
     * Display the login view.
     */
    public function create(): View {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse {

        $request->authenticate();
        $request->session()->regenerate();

//        return redirect()->intended(RouteServiceProvider::HOME);
        
        $role = auth()->account()->tipo;
        
        switch ($role) {
            case 1: return redirect()->route('paziente');
                break;
            case 2: return redirect()->route('clinico');
                break;
            case 3: return redirect()->route('admin');
                break;    
            default: return redirect('/');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
