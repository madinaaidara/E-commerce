<?php

namespace App\Actions\Auth;

use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        return redirect()->intended('/dashboard')->with('status', 'Vous êtes inscrit(e) et connecté(e) avec succès !');
    }
}