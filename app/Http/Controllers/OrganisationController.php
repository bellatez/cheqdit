<?php

namespace App\Http\Controllers;

use App\Models\CompanySize;
use App\Models\IndustryType;
use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('organisations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = IndustryType::orderBy('name', 'asc')->get();
        $sizes = CompanySize::orderBy('size', 'asc')->get();
        $org = new Organisation();
        return view('organisations.create', compact('types', 'sizes', 'org'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganisationRequest $request)
    {
        $org = Organisation::create($request->all());
        return $org;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisation $org)
    {
        return view('organisation.create', compact('org'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(OrganisationRequest $request, Organisation $organisation)
    {
        $organisation->update($request->all());
        return redirect()->route('organisation.index')->with('success', 'Organisation\'s information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        $organisation->delete();
        return redirect()->route('organisation.index')->with('success', 'Organisation\'s information deleted successfully');
    }
}
