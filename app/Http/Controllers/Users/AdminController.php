<?php

namespace App\Http\Controllers\Users;

use App\Helpers\Generator;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Mail\StatusUpdateMail;
use App\Models\Admin;
use App\Models\Organisation;
use App\Models\Role;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();

        // return $admins;
        return view('admins.index', compact('admins'));
    }

    public function requestList()
    {
        $users = User::with('roles')->where('is_active',0)
                        ->where('type', 1)
                        ->where('email_verified_at', null)
                        ->where('organisation_id', auth()->user()->organisation_id)
                        ->get();
        return view('admins.request_list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new Admin();
        $organisations=Organisation::all();
        $roles=Role::all();
          return view('admins.create',compact('user','organisations','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        // create a password for the workshop
        $password = Generator::password();

        $user = User::create(array_merge($request->validated(), 
            [
                'password' => bcrypt($password), 
                'type'=> 1, 
                'organisation_id'=>auth()->user()->organisation_id,
                'is_active'=> 1
            ]
        ));
        $user->syncRoles([$request->role_id]);

        $user->admin()->create();

        //send password to admin
        
        return redirect()->route('users.index')->with('success', 'User Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admins.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admins.create',compact('user'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index')->with('success', 'User\'s information updated successfully');;
    }

    public function approveAdmin(User $user)
    {
        $user->update(['is_active' => 1, 'email_verified_at' => now()]);
        //send email to user
        $details = [
            'title' => 'New Account Approval Notice',
            'name' => $user->first_name,
            'text' => 'Your account has been <b>APPROVED</b> by administrator. You can now login and access the portal'
        ];

        \Mail::to($user->email)->send(new \App\Mail\StatusUpdateMail($details));

        return back()->with('success', 'Admin approved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
