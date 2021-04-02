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
    public function index($type = null)
    {
        $user = new User();
        switch ($type) {
            case 'drivers':
                $admins = $user->fetchUsersBaseQuery()->whereRoleIs('driver')->get();
                break;
            case 'mechanics':
                $admins = $user->fetchUsersBaseQuery()->whereRoleIs('mechanic')->get();
                break;
            default:
                $admins = $user->fetchUsersBaseQuery()
                        ->where(function($query){
                            $query->orWhereRoleIs('administrator');
                            $query->orWhereRoleIs('subadministrator');
                        })->get();
                break;
        }

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
    public function create($type = null)
    {
        $user = new Admin();
        $organisations=Organisation::all();
        switch ($type) {
            case 'driver':
                $roles=Role::where('name','driver')->get();
                break;
            case 'mechanic':
                $roles=Role::where('name','mechanic')->get();
                break;
            default:
                $roles=Role::where('name','<>','superadministrator')->get();
                break;
        }
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
                'organisation_id'=>$request->organisation_id ?? auth()->user()->organisation_id,
                'is_active'=> 1
            ]
        ));
        $user->syncRoles([$request->role_id]);

        $user->admin()->create();

        //send password to admin
        $user->sendPasswordMail($password);
        return redirect()->route('users.index', $user->roles[0]->name.'s')->with('success', $user->roles[0]->display_name.' Created Successfully');

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
    public function edit(User $user, $type = null)
    {
        $organisations=Organisation::all();
        switch ($type) {
            case 'driver':
                $roles=Role::where('name','driver')->get();
                break;
            case 'mechanic':
                $roles=Role::where('name','mechanic')->get();
                break;
            default:
                $roles=Role::where('name','<>','superadministrator')->get();
                break;
        }
        // return $user;
        return view('admins.create',compact('user', 'roles', 'organisations'));
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

        return redirect()->route('users.index', $user->roles[0]->name.'s')->with('success', $user->roles[0]->display_name.'\'s information updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->admin()->delete();
        $user->delete();
        return back()->with('success', 'Deleted successfully');
    }

    public function approveAdmin(User $user)
    {
        $user->approveUser();
        return back()->with('success', 'Admin approved successfully');
    }

    public function rejectAdmin(User $user, Request $request)
    {
        $user->rejectUser($request);
        return back()->with('success', 'User rejected and creator notified successfully');
    }
}
