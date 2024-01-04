<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AssociationFormRequest;
use App\Models\Organization;
use App\Models\Association;
use App\Models\Workplace;


class AssociationController extends Controller
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
        return view('organizations.associations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AssociationFormRequest $request)
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

        Association::create([
            'id' => $organization['id'],
            'registrationNo' =>$data['registrationNo'],
            'natureOfActivity' =>$data['natureOfActivity'],
            'mainCategory' =>$data['mainCategory'],
            'subCategory' =>$data['subCategory'],
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
        
        return redirect()->route('associations.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
