<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonellFormRequest;
use App\Models\Personell;
use Illuminate\Http\Request;

class PersonellController extends Controller
{
    public function index(Request $request)
    {
        $personells = Personell::all();

        return view('personells.index', compact('personells'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('personells.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonellFormRequest $request)
    {
        //
        $data = $request->validated();
        if ($data['organizationID'] == '') {
            $data['organizationID'] = null;
        }
        if ($data['personPosition'] == '') {
            $data['personPosition'] = null;
        }
        Personell::create($data);

        return redirect()->route('personells.create');

    }

    /**
     * Display the specified resource.
     */
    public function show($personell)
    {
        //

        return view('personells.show', [
            'personell' => Personell::findorFail($personell),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($personell)
    {
        //
        return view('personells.show', [
            'personell' => Personell::findorFail($personell),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonellFormRequest $request, Personell $personell)
    {
        //
        $data = $request->validated();
        if ($data['organizationID'] == '') {
            $data['organizationID'] = null;
        }
        if ($data['personPosition'] == '') {
            $data['personPosition'] = null;
        }
        $personell->update($data);

        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personell $personell)
    {
        //
        $personell = Personell::where('id', $personell['id'])->firstOrFail()->delete();

        return redirect()->route('personells.index');
    }
}
