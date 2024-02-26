<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkplaceFormRequest;
use App\Models\Workplace;

class WorkplaceController extends Controller
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
     * Store a newly created resource in storage. used when adding a new address by popup modal
     */
    public function store(WorkplaceFormRequest $request)
    {
        //
        $data = $request->validated();
        Workplace::create($data);

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Workplace $workplace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workplace $workplace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkplaceFormRequest $request, Workplace $workplace)
    {
        //
        $data = $request->validated();
        $workplace->update([
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'postCode' => $data['postCode'],
            'country' => $data['country'],
            'workplaceCategory' => $data['workplaceCategory'],
        ]);

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workplace $workplace)
    {
        //
        $workplace = Workplace::where('id', $workplace['id'])->firstOrFail()->delete();

        return back();
    }
}
