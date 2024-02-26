<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationFormRequest;
use App\Models\Association;
use App\Models\Company;
use App\Models\Ministry;
use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage. used on registering new organization by modal popup
     */
    public function store(OrganizationFormRequest $request)
    {
        $data = $request->validated();
        $organization = Organization::create([
            'name' => $data['name'],
            'category' => $data['category'],
            'phoneNo' => '',
            'email' => '',
            'website' => '',
        ]);

        if ($data['category'] == 'M') {
            Ministry::create([
                'id' => $organization['id'],
            ]);
        } elseif ($data['category'] == 'C') {
            Company::create([
                'id' => $organization['id'],
            ]);
        } elseif ($data['category'] == 'A') {
            Association::create([
                'id' => $organization['id'],
                'registrationNo' => '',
                'natureOfActivity' => '',
                'mainCategory' => '',
                'subCategory' => '',
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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($organization)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationFormRequest $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
