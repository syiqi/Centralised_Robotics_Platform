<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationFormRequest;
use App\Models\Organization;
use App\Models\Company;
use App\Models\Association;
use App\Models\Ministry;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('organizations.index', [
            'organizations' => organization::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizationFormRequest $request)
    {
        $data = $request->validated();
        $organization = Organization::create([
            'name' => $data['name'],
            'category' => $data['category'],
            'phoneNo' => "",
            'email' => "",
            'website' => "",
        ]);
         
        if($data['category']=="M") {
        Ministry::create([
            'id' => $organization['id']
        ]);
    }
        elseif($data['category']=="C") {
        Company::create([
            'id' => $organization['id']
        ]);
    }
        elseif($data['category']=="A") {
        Association::create([
            'id' => $organization['id'],
            'registrationNo'=>"",
            'natureOfActivity'=>"",
            'mainCategory'=>"",
            'subCategory'=>""
        ]);
    }
        return back()->withInput();

    }

    /**
     * Display the specified resource.
     */
    public function show($organization)
    {
        //
        return view('organizations.show', [
            'organization' => Organization::findOrFail($organization),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($organization)
    {
        //
        return view('organizations.show', [
            'organization' => Organization::findOrFail($organization),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationFormRequest $request, Organization $organization)
    {
        //
        $data = $request->validated();
        $organization->update($data);

        return redirect()->route('organizations.show', $organization['id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
        $organization = Organization::where('id', $organization['id'])->firstOrFail()->delete();

        return redirect()->route('organizations.index');
    }
}
