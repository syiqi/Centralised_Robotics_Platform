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
    public function show($ministry)
    {
        //
        return view('organizations.ministries.show',[
            'ministry' => Ministry::findorFail($ministry)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ministry)
    {
        //  
        return view('organizations.ministries.show',[
            'ministry' => Ministry::findorFail($ministry)
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
        $ministry= Organization::where('id', $ministry['id'])->firstOrFail()->delete();
     
        return redirect()->route('ministries.index');
    }
}
