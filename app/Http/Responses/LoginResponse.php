<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        // Hanya admin yang boleh login dan masuk dashboard
        if (auth()->user()?->role === 'admin') {
            return redirect()->intended(route('dashboard'));
        }

        // Kalau bukan admin, langsung logout dan kembali ke landing page
        auth()->logout();

        return redirect('/')->with('error', 'Hanya admin yang bisa login.');
    }
}
