<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonellFormRequest;
use App\Models\Personell;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PersonellController extends Controller
{
    public function index(Request $request)
    {
        $query = Personell::query();

        // Include the organization relationship
        $query->with('organization');

        // Search
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function (Builder $subQuery) use ($searchTerm) {
                $subQuery->where('personName', 'like', "%$searchTerm%")
                    ->orWhere('personJobTitle', 'like', "%$searchTerm%")
                    ->orWhere('personDeptDiv', 'like', "%$searchTerm%")
                    ->orWhere('personEmail', 'like', "%$searchTerm%")
                    ->orWhere('personNumber', 'like', "%$searchTerm%")
                    ->orWhereHas('organization', function (Builder $q) use ($searchTerm) {
                        $q->where('name', 'like', "%$searchTerm%");
                    });
                // Add other fields as needed
            });
        }

        // Filter by personPosition
        $positions = $request->input('positions', []);
        if (!empty($positions)) {
            $query->whereIn('personPosition', $positions);
        }

        // Sort
        $sortBy = $request->input('sort_by', 'id');
        $sortOrder = $request->input('sort_order', 'asc');
        
            $query->orderBy($sortBy, $sortOrder);
        

        $personell = $query->paginate(10); // Adjust the pagination as needed

        return view('personells.index', compact('personell', 'sortBy', 'sortOrder', 'request', 'positions'));
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
         if($data['personPosition']==""){
            $data['personPosition']=NULL;
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

            return view('personells.show',[
                'personell' => Personell::findorFail($personell)
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($personell)
    {
        //
        return view('personells.show',[
            'personell' => Personell::findorFail($personell)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonellFormRequest $request, Personell $personell)
    {
        //
        $data = $request->validated();
        if($data['organizationID']==""){
            $data['organizationID']=NULL;
         }
         if($data['personPosition']==""){
            $data['personPosition']=NULL;
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
        $personell= Personell::where('id', $personell['id'])->firstOrFail()->delete();
     
        return redirect()->route('personells.index');
    }
}
