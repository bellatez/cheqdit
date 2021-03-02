<?php

namespace App\Http\Controllers;

use App\Helpers\Generator;
use App\Http\Requests\OrganisationRequest;
use App\Http\Requests\UserRequest;
use App\Models\CompanySize;
use App\Models\IndustryType;
use App\Models\Organisation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgs = Organisation::all();
        return view('organisations.index', compact('orgs'));
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

    public function createAdmin($org)
    {
        return view('organisations.user', compact('org'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganisationRequest $request)
    {
        $org = Organisation::create($request->validated());
        return redirect()->route('organisation.user', $org)->with('success', 'Organisation added successfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAdmin(UserRequest $request)
    {
        $password = Generator::password();

        $user = User::create(array_merge($request->validated(), ['password' => Hash::make($password)]));
        $user->syncRoles([$request->role_id]);

        return redirect()->route('organisation.index')->with('success', 'Admin Created successfully for your new organisation');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        $admins = User::where('organisation_id', $organisation->id)->whereRoleIs(['administrator', 'subadministrator'])->get();
        return view('organisations.show', compact('organisation', 'admins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisation $organisation)
    {
        $org = $organisation;
        $types = IndustryType::orderBy('name', 'asc')->get();
        $sizes = CompanySize::orderBy('size', 'asc')->get();
        return view('organisations.create', compact('types', 'sizes', 'org'));
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
        $organisation->update($request->validated());
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
