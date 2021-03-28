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

    public function toggleStatus(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->update([
            'is_active' => $request->is_active
        ]); 

        return response()->json(['message' => 'User status updated successfully.']);  
    }

    public function approveUser(User $user)
    {
        $user->update(['is_active' => 1, 'email_verified_at' => now()]);
        //send email to user
        $details = [
            'title' => 'New Account Approval Notice',
            'name' => $user->first_name,
            'text' => 'Your account has been <b>APPROVED</b> by administrator. You can now login and access the portal'
        ];

        \Mail::to($user->email)->send(new \App\Mail\StatusUpdateMail($details));
    }

}
