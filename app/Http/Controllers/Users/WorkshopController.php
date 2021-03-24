<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Users;

use App\Helpers\Generator;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkshopRequest;
use App\Models\Workshop;
use App\User;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::whereHas('user', function($query){
            $query->where('email_verified_at','<>', null)
            ->where('organisation_id', auth()->user()->organisation_id);
        })->get();
        // return $workshops;
        return view('workshop.index', compact('workshops'));
    }

    public function requestList()
    {
        $workshops = Workshop::whereHas('user', function($query){
            $query->where('is_active',0)
            ->where('email_verified_at', null)
            ->where('reject', 0)
            ->where('organisation_id', auth()->user()->organisation_id);
        })->get();
        return view('workshop.request_list', compact('workshops'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workshop = new Workshop();
        return view('workshop.create', compact('workshop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkshopRequest $request)
    {
        // create a password for the workshop
        $password = Generator::password();

        $user = User::create(array_merge($request->validated(), 
            [
                'password' => bcrypt($password), 
                'is_active' => 1, 
                'type' => 2, 
                'organisation_id' => auth()->user()->organisation_id
            ]
        ));

        $user->workshop()->create($request->validated());
        //send password to workshop
        $user->sendPasswordMail($password);
        
        return redirect()->route('workshops.index')->with('success', 'New workshop created successfully and mail sent to workshop with Details <br> When workshop accesses the portal the registration will be complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        return view('workshop.create', compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(WorkshopRequest $request, Workshop $workshop)
    {
        $user = User::findorFail($workshop->user_id);

        $workshop->update($request->validated());
        $user->update($request->validated());

        return redirect()->route('workshops.index')->with('success', 'Workshop\'s information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        $workshop->delete();
        return back()->with('success', 'Workshop deleted successfully');
    }

    public function approveWorkshop(Workshop $workshop)
    {
        $workshop->user->approveUser();
        return back()->with('success', 'Workshop approved successfully');
    }

    public function rejectWorkshop(Workshop $workshop, Request $request)
    {
        $workshop->user->rejectUser($request);
        return back()->with('success', 'Workshop rejected and creator notified successfully');
    }

}
