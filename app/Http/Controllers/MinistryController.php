<?php

namespace App\Http\Controllers;

use App\Http\Requests\MinistryFormRequest;
use App\Models\Ministry;
use App\Models\Organization;
use App\Models\Workplace;
use Illuminate\Http\Request;

class MinistryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ministries = Ministry::all();

        return view('organizations.ministries.index', compact('ministries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('organizations.ministries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MinistryFormRequest $request)
    {
        //create organization model
        $data = $request->validated();
        $organization = Organization::create([
            'name' => $data['name'],
            'phoneNo' => $data['phoneNo'],
            'email' => $data['email'],
            'website' => $data['website'],
            'category' => $data['category'],

        ]);

        //create ministry that FK's linked to organization model above
        Ministry::create([
            'id' => $organization['id'],
        ]);

        //If address field is not empty then it will create a workplace model that linked to the created organization model above

        if ($data['address'] != null | $data['address'] != '') {

            Workplace::create([
                'organizationID' => $organization['id'],
                'address' => $data['address'],
                'city' => $data['city'],
                'state' => $data['state'],
                'postCode' => $data['postCode'],
                'country' => $data['country'],
                'workplaceCategory' => $data['workplaceCategory'],
            ]);
        }

        return redirect()->route('ministries.create');
    }

    /**
     * Display the specified resource. redirected to an update/delete views
     */
    public function show($ministry)
    {
        //
        return view('organizations.ministries.show', [
            'ministry' => Ministry::findorFail($ministry),
        ]);
    }

    /**
     * Show the form for editing the specified resource. same2
     */
    public function edit($ministry)
    {
        //
        return view('organizations.ministries.show', [
            'ministry' => Ministry::findorFail($ministry),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MinistryFormRequest $request, Ministry $ministry)
    {
        $data = $request->validated();
        $ministry->organization()->update([
            'name' => $data['name'],
            'phoneNo' => $data['phoneNo'],
            'email' => $data['email'],
            'website' => $data['website'],
        ]);

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ministry $ministry)
    {
        //
        $ministry = Organization::where('id', $ministry['id'])->firstOrFail()->delete();

        return redirect()->route('ministries.index');
    }
}
