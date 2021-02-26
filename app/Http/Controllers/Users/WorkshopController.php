<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkshopRequest;
use App\Models\Workshop;
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
        try {
            Workshop::create($request->all());
            Alert::alert('success', 'Workshop added successfully');
            return redirect()->route('workshop.index');
                } 
                catch (\Throwable $th) {
                    alert()->error('Error','There are some errors in your entry ');
            return redirect()->route('workshop.create');
        }
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
        $workshop->update($request->all());
        Alert::alert('success', 'Workshop\'s information updated successfully');
        return redirect()->route('workshop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        //
    }
}
