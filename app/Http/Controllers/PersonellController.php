<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonellFormRequest;
use App\Models\Personell;
use Illuminate\Http\Request;

class PersonellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    //     return view('personells.index', [
    //         'personells'=> Personell::orderby('updated_at','desc')->paginate(20)
    //     ]);
    // }

    public function index(Request $request)
    {
        $query = Personell::query();

        // Search
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('personName', 'like', "%$searchTerm%")
                  ->orWhere('personEmail', 'like', "%$searchTerm%");
            // Add other fields as needed
        }

        // Sort
        $sortBy = $request->input('sort_by', 'id');
        $sortOrder = $request->input('sort_order', 'asc');
        $query->orderBy($sortBy, $sortOrder);

        $personell = $query->paginate(20); // Adjust the pagination as needed

        return view('personells.index', compact('personell', 'sortBy', 'sortOrder'));
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
        if($data['organizationID']==""){
            $data['organizationID']=NULL;
         }
        Personell::create($data);

        return redirect()->route('personells.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(Personell $personell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personell $personell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personell $personell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personell $personell)
    {
        //
    }
}
