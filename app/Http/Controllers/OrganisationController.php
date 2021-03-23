<?php

namespace App\Http\Controllers;

use App\Helpers\Generator;
use App\Http\Requests\OrganisationRequest;
use App\Http\Requests\UserRequest;
use App\Models\CompanySize;
use App\Models\IndustryType;
use App\Models\Organisation;
use App\Models\Workshop;
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
        $orgs = Organisation::with(['companySize','industryType'])->get();
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
        return redirect()->route('organisations.user', $org)->with('success', 'Organisation added successfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAdmin(UserRequest $request, $org)
    {
        $password = Generator::password();

        $user = User::create(array_merge($request->validated(),
            [
                'password' => Hash::make($password), 
                'is_active' => 1, 
                'type' => 1, 
                'email_verified_at' => now(),
                'organisation_id' => $org
            ]));
        $user->syncRoles([2]);

        return redirect()->route('organisations.index')->with('success', 'Admin Successfully created');
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
        $user_count = User::where('organisation_id', $organisation->id)
                    ->where('is_active', 1)
                    ->count();
        $wrkshop_count = Workshop::whereHas('user', function($query) use($organisation) {
            $query->where('organisation_id', $organisation->id);
        })->count();
        return view('organisations.show', compact('organisation', 'admins', 'wrkshop_count', 'user_count'));
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
        return redirect()->route('organisations.index')->with('success', 'Organisation\'s information updated successfully');
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
        return redirect()->route('organisations.index')->with('success', 'Organisation\'s information deleted successfully');
    }

    public function toggleStatus(Request $request)
    {
        $org = Organisation::findOrFail($request->org_id);
        $org->update([
            'is_active' => $request->is_active
        ]); 

        return response()->json(['message' => 'Organisation status updated successfully.']);  
    }
}
