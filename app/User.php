<?php

namespace App;

use App\Mail\StatusUpdateMail;
use App\Models\Admin;
use App\Models\Organisation;
use App\Models\Workshop;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'telephone',
        'is_active',
        'organisation_id',
        'password',
        'type',
        'reject',
        'last_login_at', 
        'last_login_ip',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getTelephoneAttribute()
    {
        return '+44 (0)'.$this->attributes['telephone'];
    } 
    
    public function workshop()
    {
        return $this->hasOne(Workshop::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function organisation()
    {
        return $this->belongsTo(Organisation::class)->withDefault();
    }

    public function isAdmin()
    {
        return $this->type === 1;
    }

    public function isWorkshop()
    {
        return $this->type === 2;
    }

    public function sendPasswordMail(String $password)
    {
        $details = [
            'title' => 'New Account verification and activation',
            'email' => $this->email,
            'name' => $this->first_name,
            'password' => $password,
            'role' =>$this->roles[0]->display_name ?? 'workshop'
        ];

        \Mail::to($this->email)->send(new \App\Mail\PasswordMail($details));
    }

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function fetchUsersBaseQuery()
    {
        if (auth()->user()->hasRole('superadministrator')) {
            return $this->where('type', 1)
                    ->where('email_verified_at', '<>', 'null');
        }
        return $this->where('type', 1)
                ->where('email_verified_at', '<>', 'null')
                ->where('organisation_id', auth()->user()->organisation_id);
    }

    public function approveUser()
    {
        $this->update(['is_active' => 1, 'email_verified_at' => now()]);
        //send email to user
        $details = [
            'title' => 'New Account Approval Notice',
            'name' => $this->first_name,
            'text' => 'Your account has been <b>APPROVED</b> by administrator. You can now login and access the portal'
        ];

        \Mail::to($this->email)->send(new \App\Mail\StatusUpdateMail($details));
    }

    public function rejectUser(Request $request)
    {
       $this->update([
           'reject' => 1
       ]);
       // 
       $details = [
           'title' => $request->title,
           'name' => $this->first_name,
           'text' => 'Your request for account creation has been <b>REJECTED</b> for the following reason(s)<br /><br />'.$request->message
       ];

       \Mail::to($this->email)->send(new \App\Mail\StatusUpdateMail($details));
    }
}
