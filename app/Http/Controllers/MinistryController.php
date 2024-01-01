<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MinistryFormRequest;
use App\Models\Organization;
use App\Models\Ministry;

class MinistryController extends Controller
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
        return view('organizations.ministries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MinistryFormRequest $request)
    {
        //          
        $data = $request->validated();
        $organization = Organization::create([
            'name' => $data['name'],
            'phoneNo' =>$data['phoneNo'],
            'email' =>$data['email'],
            'website' =>$data['website'],
            'category' =>$data['category'],
    
         ]);

        Ministry::create([
            'id' => $organization['id'],
        ]);
        
        return redirect()->route('ministries.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ministry $ministry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ministry $ministry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMinistryRequest $request, Ministry $ministry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ministry $ministry)
    {
        //
    }
}
