<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Users;

use App\Helpers\Generator;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkshopRequest;
use App\Models\Workshop;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::all();
        // return $workshops;
        return view('workshop.index', compact('workshops'));
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

        $user = User::create(array_merge($request->all(), ['password' => $password]));

        Workshop::create(
            array_merge($request->all(), ['user_id' => $user->id])
        );
        //send password to workshop
        $user->sendPasswordMail();
        
        return redirect()->route('workshop.index')->with('success', 'New workshop created successfully and mail sent to workshop with Details');
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
        // $types = IndustryType::orderBy('name', 'asc')->get();
        // $sizes = CompanySize::orderBy('size', 'asc')->get();
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

        $workshop->update($request->all());
        $user->update($request->all());

        return redirect()->route('workshop.index')->with('success', 'Workshop\'s information updated successfully');;
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
    }
}
