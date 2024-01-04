<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyFormRequest;
use App\Models\Company;
use App\Models\Organization;
use App\Models\Workplace;

class CompanyController extends Controller
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
        return view('organizations.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyFormRequest $request)
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
         // Change to an SQL Acceptable\Approriate\Standardized Value
         if($data['companyMainSector']=="null"){
            $data['companyMainSector']=NULL;
         }
         if($data['staEcosystem']=="null"){
            $data['staEcosystem']=NULL;
         }
        if($data['financeYearCalendar']==""){
         $data['financeYearCalendar']=NULL;
         }
         if($data['latestRevenue']==""){
            $data['latestRevenue']=NULL;
            }
            if($data['latestNoEmployee']==""){
                $data['latestNoEmployee']=NULL;
                }
        // echo var_dump($data);
         Company::create([
            'id' => $organization['id'],
            'registrationNo' =>$data['registrationNo'],
            'companyMainSector' =>$data['companyMainSector'],
            'primaryMSIC2008' =>$data['primaryMSIC2008'],
            'secondaryMSIC2008' =>$data['secondaryMSIC2008'],
            'tertiaryMSIC2008' =>$data['tertiaryMSIC2008'],
            'natureOfActivity' =>$data['natureOfActivity'],
            'financeYearCalendar' =>$data['financeYearCalendar'],
            'latestRevenue' =>$data['latestRevenue'],
            'latestNoEmployee' =>$data['latestNoEmployee'],
            'staEcosystem' =>$data['staEcosystem'],
            'productAndService' =>$data['productAndService'],
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
        
        return redirect()->route('companies.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
