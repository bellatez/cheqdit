<?php

namespace App\Http\Controllers\Users;

use App\Helpers\Generator;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function resetPasswordForm()
    {
        return view('users.password-reset');
    }
    
    public function resetPassword(PasswordRequest $request)
    {
        auth()->user()->update(
            [
                'password' => bcrypt($request->get('password')),
                'email_verified_at' => now()
            ]
        );
        return redirect('home');
    }

}
