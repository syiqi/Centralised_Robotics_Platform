<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MinistryFormRequest;
use App\Models\Organization;
use App\Models\Ministry;
use App\Models\Workplace;

use Illuminate\Database\Eloquent\Builder;

class MinistryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Organization::query();

        // Search
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function (Builder $subQuery) use ($searchTerm) {
                $subQuery->where('name', 'like', "%$searchTerm%")
                    ->orWhere('phoneNo', 'like', "%$searchTerm%")
                    ->orWhere('email', 'like', "%$searchTerm%")
                    ->orWhere('website', 'like', "%$searchTerm%");
                // Add other fields as needed
            });
        }

        // Sort
        $sortBy = $request->input('sort_by', 'id');
        $sortOrder = $request->input('sort_order', 'asc');
        $query->orderBy($sortBy, $sortOrder);

        $ministries = $query->paginate(10); // Adjust the pagination as needed

        return view('organizations.ministries.index', compact('ministries', 'sortBy', 'sortOrder', 'request'));
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

        if($data['address']!=NULL | $data['address']!=""){

            Workplace::create([
                'organizationID' => $organization['id'],
                'address'=>$data['address'],
                'city'=> $data['city'],
                'state' => $data['state'],
                'postCode'=>$data['postCode'],
                'country'=> $data['country'],
                'workplaceCategory'=> $data['workplaceCategory'],
            ]);
            }
        
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
