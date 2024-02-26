
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{$company->organization->name}}'s Details
        </h2>
    </x-slot>
                     <!-- Update Company Form -->
    <form method="POST" action="{{ route('companies.update',['company'=> $company['id']]) }}">
    @csrf
    @method('PUT')

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">General Information</span>
            </p>
        </div>   
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="name"> Company Name </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="name" name="name" value="{{$company->organization->name}}" required >
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 flex justify-between">
        <div class="flex-1 mr-4">
            <label  for="phoneNo"> Phone Number </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="tel" id="phoneNo" name="phoneNo" value="{{ $company->organization->phoneNo}}" >
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <div class="flex-1 mr-4">
            <label  for="email"> EMAIL </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="email" id="email" name="email" value="{{ $company->organization->email}}" >
        </div>
        <div class="flex-1">
            <label  for="website"> Website </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="url" id="website" name="website" value="{{ $company->organization->website}}" >
        </div>
        </div>
        <div>
            <input type="hidden" id="category" name="category" value='M'>
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Update</button>    
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Detailed Overview</span>
            </p>
        </div>     
        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="registrationNo"> Registration No (SSM ID) </label>
            <input class="mt-1 p-2 block w-full border rounded-md" type="text" id="registrationNo" name="registrationNo" value="{{$company->registrationNo}}">
        </div>
        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
        <label> Main Sector</label><br>
        <div class="flex mb-2 max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                             <!-- Condition to automatically checked checkbox that is tagged with the model -->
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
</div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
        <label  for="primaryMSIC2008"> MSIC2008 [5-digits Activity Code]</label>
            <input  class="my-4 placeholder-gray-500 border rounded-md" placeholder="primary" type="number" id="primaryMSIC2008" name="primaryMSIC2008" value="{{ $company->primaryMSIC2008}}">
            <input  class="my-4 placeholder-gray-500 border rounded-md" placeholder="secondary" type="number" id="secondaryMSIC2008" name="secondaryMSIC2008" value="{{ $company->secondaryMSIC2008}}">
            <input  class="my-4 placeholder-gray-500 border rounded-md" placeholder="tertiary" type="number" id="tertiaryMSIC2008" name="tertiaryMSIC2008" value="{{$company->tertiaryMSIC2008}}">
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="natureOfActivity"> Nature of Business</label>
            <input class="mt-1 p-2 block w-full border rounded-md" type="text" id="natureOfActivity" name="natureOfActivity" value="{{ $company->natureOfActivity}}">
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 flex justify-between">
        <div class="flex-1 mr-4">    
        <label  for="financeYearCalendar"> Financial Year Calendar (Start Date) </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="date" id="financeYearCalendar" name="financeYearCalendar" value="{{ $company->financeYearCalendar}}">
        </div>
        <div class="flex-1 mr-4">
            <label  for="latestRevenue"> Latest Revenue (RM) - (audited year)  </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="number" step="any" id="latestRevenue" name="latestRevenue" value="{{ $company->latestRevenue}}">
        </div>
        <div class="flex-1">
            <label  for="latestNoEmployee"> Latest Number of Employee(s) </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="number" id="latestNoEmployee" name="latestNoEmployee" value="{{ $company->latestNoEmployee}}">
        </div>
        </div>

        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Update</button>    
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Ecosystem</span>
            </p>
        </div>

        <div class="ml-8 mt-8">
            <div x-data="{show: true}">
                <a href="#" x-on:click.prevent="show = !show" class="relative z-10 border border-gray-600 rounded px-4 py-2 bg-white">
                    <span class="inline-block">Select STA Ecosystem</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="stroke-current inline-block w-4 h-4 transform transition duration-150"
                        x-bind:class="{ 'rotate-180': show }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
                <div x-show.transition="show"
                    class="relative z-20 mt-1 flex flex-col w-full px-4 py-8 whitespace-nowrap border border-gray-600 rounded bg-white">


        <div class="flex mb-2">
                                         <!-- Condition to automatically checked checkbox that is tagged with the model -->

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
            </div>
            <div class="flex mb-2">  
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
</div>
<div class="flex mb-2">
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
        </div>
    </div>

    <div class="mt-8">
            <div x-data="{show: true}">
                <a href="#" x-on:click.prevent="show = !show" class="relative z-10 border border-gray-600 rounded px-4 py-2 bg-white">
                    <span class="inline-block">Select VCD Ecosystem</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="stroke-current inline-block w-4 h-4 transform transition duration-150"
                        x-bind:class="{ 'rotate-180': show }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
                <div x-show.transition="show"
                    class="relative z-20 mt-1 flex flex-col w-full px-4 py-8 whitespace-nowrap border border-gray-600 rounded bg-white">
                                                 <!-- Condition to automatically checked checkbox that is tagged with the model -->

            <div class="flex mb-2">
            @if(str_contains($company->vcdEcosystem,"VCD1"))
            <input type="checkbox" id="vcdEcosystem" name="vcdEcosystem[]" value="VCD1" checked>VCD1  
            @else
            <input type="checkbox" id="vcdEcosystem" name="vcdEcosystem[]" value="VCD1">VCD1
            @endif
            @if(str_contains($company->vcdEcosystem,"VCD2"))
            <input type="checkbox" id="vcdEcosystem" name="vcdEcosystem[]" value="VCD2" checked>VCD2  
            @else
            <input type="checkbox" id="vcdEcosystem" name="vcdEcosystem[]" value="VCD2">VCD2
            @endif
            @if(str_contains($company->vcdEcosystem,"VCD3"))
            <input type="checkbox" id="vcdEcosystem" name="vcdEcosystem[]" value="VCD3" checked>VCD3  
            @else
            <input type="checkbox" id="vcdEcosystem" name="vcdEcosystem[]" value="VCD3">VCD3
            @endif
            @if(str_contains($company->vcdEcosystem,"VCD4"))
            <input type="checkbox" id="vcdEcosystem" name="vcdEcosystem[]" value="VCD4" checked>VCD4  
            @else
            <input type="checkbox" id="vcdEcosystem" name="vcdEcosystem[]" value="VCD4">VCD4
            @endif
        </div>
        </div>
        </div></div>

        <div class="mt-8">
            <div x-data="{show: true}">
                <a href="#" x-on:click.prevent="show = !show" class="relative z-10 border border-gray-600 rounded px-4 py-2 bg-white">
                    <span class="inline-block">Select SPD Ecosystem</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="stroke-current inline-block w-4 h-4 transform transition duration-150"
                        x-bind:class="{ 'rotate-180': show }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
                <div x-show.transition="show"
                    class="relative z-20 mt-1 flex flex-col w-full px-4 py-8 whitespace-nowrap border border-gray-600 rounded bg-white">

                                       <!-- Condition to automatically checked checkbox that is tagged with the model -->

            <div class="flex mb-2">
            @if(str_contains($company->spdEcosystem,"SPD1"))
            <input type="checkbox" id="spdEcosystem" name="spdEcosystem[]" value="SPD1" checked>SPD1  
            @else
            <input type="checkbox" id="spdEcosystem" name="spdEcosystem[]" value="SPD1">SPD1
            @endif
            @if(str_contains($company->spdEcosystem,"SPD2"))
            <input type="checkbox" id="spdEcosystem" name="spdEcosystem[]" value="SPD2" checked>SPD2  
            @else
            <input type="checkbox" id="spdEcosystem" name="spdEcosystem[]" value="SPD2">SPD2
            @endif
            @if(str_contains($company->spdEcosystem,"SPD3"))
            <input type="checkbox" id="spdEcosystem" name="spdEcosystem[]" value="SPD3" checked>SPD3  
            @else
            <input type="checkbox" id="spdEcosystem" name="spdEcosystem[]" value="SPD3">SPD3
            @endif
            @if(str_contains($company->spdEcosystem,"SPD4"))
            <input type="checkbox" id="spdEcosystem" name="spdEcosystem[]" value="SPD4" checked>SPD4  
            @else
            <input type="checkbox" id="spdEcosystem" name="spdEcosystem[]" value="SPD4">SPD4
            @endif

        </div>
        </div>
        </div>
        </div>
</div>



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="productAndService"> Product And Service</label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="productAndService" name="productAndService" value="{{ $company->productAndService}}">
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Update</button>    
        </div>

    </form>

             
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Address Information</span>
            </p>
        </div>  
<div class="tab-wrapper" x-data="{ activeTab:  0 }">
  <div class="flex font-bold text-center text-white">
    <div class="sm:px-6 lg:px-8 my-8 h-9 bg-blue-900 shadow-2xl rounded-3xl">
    <label 
      @click="activeTab = 0"
      class="tab-control "
      :class="{ 'active': activeTab === 0 }"
    >Main (incl. Manufacturing & Services Activity)</label>
</div>
<div class="sm:px-6 lg:px-8 my-8 h-9 bg-blue-900 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 1"
      class="tab-control "
      :class="{ 'active': activeTab === 1 }"
    >Branch (Manufacturing Activity)</label>
</div>
    <div class="sm:px-6 lg:px-8 my-8 h-9 bg-blue-900 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 2"
      class="tab-control "
      :class="{ 'active': activeTab === 2 }"
    >Branch (Services Activity)</label>
</div>
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
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">List of Personnel</span>
            </p>
        </div> 
<div class="tab-wrapper" x-data="{ activeTab:  3 }">
  <div class="flex font-bold text-center text-white">
    <div class="sm:px-6 lg:px-8 my-8 h-9 bg-blue-900 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 3"
      class="tab-control "
      :class="{ 'active': activeTab === 3 }"
    >Top Management</label> 
</div>
<div class="sm:px-6 lg:px-8 my-8 h-9 bg-blue-900 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 4"
      class="tab-control "
      :class="{ 'active': activeTab === 4 }"
    >Middle Management</label>
</div>
<div class="sm:px-6 lg:px-8 my-8 h-9 bg-blue-900 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 5"
      class="tab-control "
      :class="{ 'active': activeTab === 5 }"
    >Executive</label>
</div>
<div class="sm:px-6 lg:px-8 my-8 h-9 bg-blue-900 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 6"
      class="tab-control "
      :class="{ 'active': activeTab === 6 }"
    >Support (Administrative/Clerical)</label>
</div>
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
        <button  type="button" onclick="confirmCompanyDelete()" style="background-color: #FF0000; color: #ffffff; font-weight: bold; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">!DELETE COMPANY RECORDS!</button>
    </form>


</div>
<script type="text/javascript">
    // JavaScript function to show confirmation dialog for company
    function confirmCompanyDelete() {
        var isConfirmed = confirm("Are you sure you want to delete?");
        if (isConfirmed) {
            // If confirmed, submit the company delete form
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
