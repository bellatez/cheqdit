<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Organisation;
use App\Models\Role;
use App\Models\Workshop;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $roles = Role::all();
        $organisations = Organisation::all();
        return view('auth.register', compact('roles', 'organisations'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if($data['type'] === '1'){
            return Validator::make($data, [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'telephone' => ['required', 'string', 'max:255'],
                'organisation_id' => ['required'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'terms' => 'required'
            ], 
            ['terms.required' => 'You must agree to the terms and conditions of the site']
            );
        }

        if($data['type'] === '2'){
            return Validator::make($data, [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'telephone' => ['required', 'string', 'max:255'],
                'organisation_id' => ['required'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'terms' => 'required',
                'website' => 'required',
                'name' => 'required',
                'address1' => 'required',
                'postcode' => 'required'
            ], 
            ['terms.required' => 'You must agree to the terms and conditions of the site']
            );
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'organisation_id' => $data['organisation_id'],
            'password' => Hash::make($data['password']),
            'type' => $data['type']
        ]);

        if($user->type == 1) {
            $user->syncRoles([$data['role_id']]);
            $admin = Admin::create([
                'user_id' => $user->id
            ]);
        }
        if($user->type == 2) {
            $workshop = Workshop::create([
                'user_id' => $user->id,
                'website' => $data['website'],
                'name' => $data['name'],
                'address1' => $data['address1'],
                'address2' => $data['address2'],
                'address3' => $data['address3'],
                'postcode' => $data['postcode']
            ]);
        }

        return $user;
    }
}
