<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyFormRequest;
use App\Models\Company;
use App\Models\Organization;
use App\Models\Workplace;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $companies = Company::all();

        return view('organizations.companies.index', compact('companies'));

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
            'phoneNo' => $data['phoneNo'],
            'email' => $data['email'],
            'website' => $data['website'],
            'category' => $data['category'],

        ]);
        // Change to an SQL Acceptable\Approriate\Standardized Value
        if ($data['companyMainSector'] == 'null') {
            $data['companyMainSector'] = null;
        }
        if ($data['staEcosystem'] == 'null') {
            $data['staEcosystem'] = null;
        }
        if ($data['vcdEcosystem'] == 'null') {
            $data['vcdEcosystem'] = null;
        }
        if ($data['spdEcosystem'] == 'null') {
            $data['spdEcosystem'] = null;
        }
        if ($data['financeYearCalendar'] == '') {
            $data['financeYearCalendar'] = null;
        }
        if ($data['latestRevenue'] == '') {
            $data['latestRevenue'] = null;
        }
        if ($data['latestNoEmployee'] == '') {
            $data['latestNoEmployee'] = null;
        }

        //create company model that FK's linked to organization model above

        Company::create([
            'id' => $organization['id'],
            'registrationNo' => $data['registrationNo'],
            'companyMainSector' => $data['companyMainSector'],
            'primaryMSIC2008' => $data['primaryMSIC2008'],
            'secondaryMSIC2008' => $data['secondaryMSIC2008'],
            'tertiaryMSIC2008' => $data['tertiaryMSIC2008'],
            'natureOfActivity' => $data['natureOfActivity'],
            'financeYearCalendar' => $data['financeYearCalendar'],
            'latestRevenue' => $data['latestRevenue'],
            'latestNoEmployee' => $data['latestNoEmployee'],
            'staEcosystem' => $data['staEcosystem'],
            'vcdEcosystem' => $data['vcdEcosystem'],
            'spdEcosystem' => $data['spdEcosystem'],
            'productAndService' => $data['productAndService'],
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

        return redirect()->route('companies.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($company)
    {
        //
        return view('organizations.companies.show', [
            'company' => Company::findorFail($company),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($company)
    {
        //
        return view('organizations.companies.show', [
            'company' => Company::findorFail($company),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyFormRequest $request, Company $company)
    {
        //
        $data = $request->validated();
        $company->organization()->update([
            'name' => $data['name'],
            'phoneNo' => $data['phoneNo'],
            'email' => $data['email'],
            'website' => $data['website'],
        ]);

        //condition, to fit with MySQL and standardize the null value

        if ($data['companyMainSector'] == 'null') {
            $data['companyMainSector'] = null;
        }
        if ($data['staEcosystem'] == 'null') {
            $data['staEcosystem'] = null;
        }
        if ($data['vcdEcosystem'] == 'null') {
            $data['vcdEcosystem'] = null;
        }
        if ($data['spdEcosystem'] == 'null') {
            $data['spdEcosystem'] = null;
        }
        if ($data['financeYearCalendar'] == '') {
            $data['financeYearCalendar'] = null;
        }
        if ($data['latestRevenue'] == '') {
            $data['latestRevenue'] = null;
        }
        if ($data['latestNoEmployee'] == '') {
            $data['latestNoEmployee'] = null;
        }
        $company->update([
            'registrationNo' => $data['registrationNo'],
            'companyMainSector' => $data['companyMainSector'],
            'primaryMSIC2008' => $data['primaryMSIC2008'],
            'secondaryMSIC2008' => $data['secondaryMSIC2008'],
            'tertiaryMSIC2008' => $data['tertiaryMSIC2008'],
            'natureOfActivity' => $data['natureOfActivity'],
            'financeYearCalendar' => $data['financeYearCalendar'],
            'latestRevenue' => $data['latestRevenue'],
            'latestNoEmployee' => $data['latestNoEmployee'],
            'staEcosystem' => $data['staEcosystem'],
            'vcdEcosystem' => $data['vcdEcosystem'],
            'spdEcosystem' => $data['spdEcosystem'],
            'productAndService' => $data['productAndService'],
        ]);

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
        $company = Organization::where('id', $company['id'])->firstOrFail()->delete();

        return redirect()->route('companies.index');
    }
}
