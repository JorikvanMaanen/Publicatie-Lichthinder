<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        Auth::guard(config('fortify.guard'))->logout();

        return $request->wantsJson()
            ? response()->json('', 201)
            : redirect()->route('auth.account-created');
    }
}
