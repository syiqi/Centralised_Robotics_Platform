
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{$company->organization->name}} Details
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('companies.update',['company'=> $company['id']]) }}">
    @csrf
    @method('PUT')
        <div>
            <label  for="name"> Name </label>
            <input type="text" id="name" name="name" value="{{$company->organization->name}}" required >
        </div>
        <div>
            <label  for="phoneNo"> Phone Number </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ $company->organization->phoneNo}}" >
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <div>
            <label  for="email"> EMAIL </label>
            <input type="email" id="email" name="email" value="{{ $company->organization->email}}" >
        </div>
        <div>
            <label  for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ $company->organization->website}}" >
        </div>
        <div>
            <input type="hidden" id="category" name="category" value='M'>
        </div>
        <div>
            <label  for="registrationNo"> Registration No (SSM ID) </label>
            <input type="text" id="registrationNo" name="registrationNo" value="{{$company->registrationNo}}">
        </div>
        <div >
        <label> Main Sector</label><br>
        @if(str_contains($company->companyMainSector,"Primary Agriculture"))
        <input type="radio" id="companyMainSector" name="companyMainSector" value="Primary Agriculture" checked>Primary Agriculture
        @else
        <input type="radio" id="companyMainSector" name="companyMainSector" value="Primary Agriculture" >Primary Agriculture
        @endif
        @if(str_contains($company->companyMainSector,"Manufacturing(including agro-based)"))
        <input type="radio" id="companyMainSector" name="companyMainSector" value="Manufacturing(including agro-based)" checked>Manufacturing(including agro-based)
        @else
        <input type="radio" id="companyMainSector" name="companyMainSector" value="Manufacturing(including agro-based)" >Manufacturing(including agro-based)
        @endif
        @if(str_contains($company->companyMainSector,"Manufacturing-Related-Services(MRS)"))
        <input type="radio" id="companyMainSector" name="companyMainSector" value="Manufacturing-Related-Services(MRS)" checked>Manufacturing-Related-Services (MRS)
        @else
        <input type="radio" id="companyMainSector" name="companyMainSector" value="Manufacturing-Related-Services(MRS)" >Manufacturing-Related-Services(MRS)
        @endif
        @if(str_contains($company->companyMainSector,"Services\/Mining & Quarrying\/Construction"))
        <input type="radio" id="companyMainSector" name="companyMainSector" value="Services/Mining & Quarrying/Construction" checked>Services / Mining & Quarrying / Construction
        @else
        <input type="radio" id="companyMainSector" name="companyMainSector" value="Services/Mining & Quarrying/Construction" >Services/Mining & Quarrying/Construction
        @endif
        </div>
        <div>
            <label  for="primaryMSIC2008"> MSIC2008 Code (Primary) *5-digits code of activity*</label>
            <input type="number" id="primaryMSIC2008" name="primaryMSIC2008" value="{{ $company->primaryMSIC2008}}">
        </div>
        <div>
            <label  for="secondaryMSIC2008"> MSIC2008 Code (Secondary) *5-digits code of activity*</label>
            <input type="number" id="secondaryMSIC2008" name="secondaryMSIC2008" value="{{ $company->secondaryMSIC2008}}">
        </div>
        <div>
            <label  for="tertiaryMSIC2008"> MSIC2008 Code (Tertiary) *5-digits code of activity*</label>
            <input type="number" id="tertiaryMSIC2008" name="tertiaryMSIC2008" value="{{$company->tertiaryMSIC2008}}">
        </div>
        <div>
            <label  for="natureOfActivity"> Nature of Business</label>
            <input type="text" id="natureOfActivity" name="natureOfActivity" value="{{ $company->natureOfActivity}}">
        </div>
        <div>
            <label  for="financeYearCalendar"> Financial Year Calendar (Start Date) </label>
            <input type="date" id="financeYearCalendar" name="financeYearCalendar" value="{{ $company->financeYearCalendar}}">
        </div>
        <div>
            <label  for="latestRevenue"> Latest Revenue (RM) - (audited year)  </label>
            <input type="number" step="any" id="latestRevenue" name="latestRevenue" value="{{ $company->latestRevenue}}">
        </div>
        <div>
            <label  for="latestNoEmployee"> Latest Number of Employee(s) </label>
            <input type="number" id="latestNoEmployee" name="latestNoEmployee" value="{{ $company->latestNoEmployee}}">
        </div>
        <div >
            <label> STA Ecosystem</label><br>
            @if(str_contains($company->staEcosystem,"Robotics&Automation"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Robotics&Automation" checked>Robotics & Automation
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Robotics&Automation">Robotics & Automation
            @endif
            @if(str_contains($company->staEcosystem,"S.I."))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="S.I." checked>S.I.
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="S.I.">S.I.
            @endif
            @if(str_contains($company->staEcosystem,"Developers"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Developers" checked>Developers
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Developers">Developers
            @endif
            @if(str_contains($company->staEcosystem,"IT"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="IT" checked>IT
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="IT">IT
            @endif
            @if(str_contains($company->staEcosystem,"Infrastructure"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Infrastructure" checked>Infrastructure
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Infrastructure">Infrastructure
            @endif 
            @if(str_contains($company->staEcosystem,"ERP"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="ERP" checked>ERP
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="ERP">ERP
            @endif
            @if(str_contains($company->staEcosystem,"MOM"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="MOM" checked>MOM
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="MOM">MOM
            @endif
            @if(str_contains($company->staEcosystem,"MES"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="MES" checked>MES
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="MES">MES
            @endif
            @if(str_contains($company->staEcosystem,"CRM"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="CRM" checked>CRM
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="CRM">CRM
            @endif
            @if(str_contains($company->staEcosystem,"SRM"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="SRM" checked>SRM
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="SRM">SRM
            @endif
            @if(str_contains($company->staEcosystem,"Sales"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Sales" checked>Sales
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Sales">Sales
            @endif
            @if(str_contains($company->staEcosystem,"AGV"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AGV" checked>AGV
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AGV">AGV
            @endif
            @if(str_contains($company->staEcosystem,"AMR"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AMR" checked>AMR
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AMR">AMR
            @endif
            @if(str_contains($company->staEcosystem,"Social"))          
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Social" checked>Social
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Social">Social
            @endif
            @if(str_contains($company->staEcosystem,"Edutainment"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Edutainment" checked>Edutainment
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Edutainment">Edutainment
            @endif
            @if(str_contains($company->staEcosystem,"Service Robot"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Service Robot" checked>Service Robot
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Service Robot">Service Robot
            @endif
            @if(str_contains($company->staEcosystem,"OEM-Arm,COBOT,Sensor,Actuator"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="OEM-Arm,COBOT,Sensor,Actuator" checked>OEM - Arm, COBOT, Sensor, Actuator
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="OEM-Arm,COBOT,Sensor,Actuator">OEM - Arm, COBOT, Sensor, Actuator
            @endif
            @if(str_contains($company->staEcosystem,"Talent"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Talent" checked>Talent
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Talent">Talent
            @endif
            @if(str_contains($company->staEcosystem,"Skills Dev"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Skills Dev" checked>Skills Dev
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Skills Dev">Skills Dev
            @endif
            @if(str_contains($company->staEcosystem,"AS\/RS"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AS/RS" checked>AS/RS
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AS/RS">AS/RS
            @endif
            @if(str_contains($company->staEcosystem,"3DP"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="3DP" checked>3DP
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="3DP">3DP
            @endif
            @if(str_contains($company->staEcosystem,"AddMfg"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AddMfg" checked>AddMfg
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AddMfg">AddMfg
            @endif
            @if(str_contains($company->staEcosystem,"UAV"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="UAV" checked>UAV
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="UAV">UAV
            @endif
            @if(str_contains($company->staEcosystem,"Drone"))
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Drone" checked>Drone  
            @else
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Drone">Drone  
            @endif


        </div>
        <div>
            <label  for="productAndService"> Product And Service</label>
            <input type="text" id="productAndService" name="productAndService" value="{{ $company->productAndService}}">
        </div>

        <div>
            <button  type="submit" >Update</button>    
        </div>

    </form>

             
        ////////////////////////////////////////////////////////
<h1 >Address<h1>
<div class="tab-wrapper" x-data="{ activeTab:  0 }">
  <div class="flex">
    <label
      @click="activeTab = 0"
      class="tab-control "
      :class="{ 'active': activeTab === 0 }"
    >Main</label>
    <label
      @click="activeTab = 1"
      class="tab-control "
      :class="{ 'active': activeTab === 1 }"
    >Branch</label>
    <label
      @click="activeTab = 2"
      class="tab-control "
      :class="{ 'active': activeTab === 2 }"
    >Factory</label>
  </div>
@php
$organization=$company;
@endphp
  <div class="tab-panel" :class="{ 'active': activeTab === 0 }" x-show.transition.in.opacity.duration.600="activeTab === 0">
  @php
$type="M";
@endphp
    @include('layouts.workplace')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 1 }" x-show.transition.in.opacity.duration.600="activeTab === 1">
  @php
$type="B";
@endphp
    @include('layouts.workplace')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 2 }" x-show.transition.in.opacity.duration.600="activeTab === 2">
  @php
$type="F";
@endphp
    @include('layouts.workplace')
  </div>
</div>

//////////////////////////////////////////////
<h1 >Personnel<h1>
<div class="tab-wrapper" x-data="{ activeTab:  3 }">
  <div class="flex">
    <label
      @click="activeTab = 3"
      class="tab-control "
      :class="{ 'active': activeTab === 3 }"
    >C-Level</label>
    <label
      @click="activeTab = 4"
      class="tab-control "
      :class="{ 'active': activeTab === 4 }"
    >M-Level</label>
    <label
      @click="activeTab = 5"
      class="tab-control "
      :class="{ 'active': activeTab === 5 }"
    >E-Level</label>
    <label
      @click="activeTab = 6"
      class="tab-control "
      :class="{ 'active': activeTab === 6 }"
    >Staff Level</label>
  </div>

  <div class="tab-panel" :class="{ 'active': activeTab === 3 }" x-show.transition.in.opacity.duration.600="activeTab === 3">
    @php
    $level="C";
    @endphp
    @include('layouts.level')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 4 }" x-show.transition.in.opacity.duration.600="activeTab === 4">
    @php
    $level="M";
    @endphp
    @include('layouts.level')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 5 }" x-show.transition.in.opacity.duration.600="activeTab === 5">
    @php
    $level="E";
    @endphp
    @include('layouts.level')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 6 }" x-show.transition.in.opacity.duration.600="activeTab === 6">
    @php
    $level="Staff";
    @endphp
    @include('layouts.level')
    </div>
</div>






<form id="deleteCompanyForm" action="{{ route('companies.destroy',['company'=> $company['id']]) }}" method="POST" >
        @csrf
        @method('DELETE')

        <!-- Add a JavaScript onclick event to show the confirmation dialog -->
        <button  type="button" onclick="confirmCompanyDelete()">DELETE</button>
    </form>

</div>
<script type="text/javascript">
    // JavaScript function to show confirmation dialog for ministries
    function confirmCompanyDelete() {
        var isConfirmed = confirm("Are you sure you want to delete?");
        if (isConfirmed) {
            // If confirmed, submit the ministry delete form
            document.getElementById('deleteCompanyForm').submit();
        }
    }

    // JavaScript function to show confirmation dialog for workplaces
    function confirmWorkplaceDelete(workplaceId) {
        var isConfirmed = confirm("Are you sure you want to delete?");
        if (isConfirmed) {
            // If confirmed, submit the form with the specific workplace ID
            document.getElementById('deleteForm_' + workplaceId).submit();
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</x-app-layout>
