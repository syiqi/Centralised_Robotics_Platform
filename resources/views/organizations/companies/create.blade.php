<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __(' Register Company') }}
        </h2>
    </x-slot>

<div>

    <form method="POST" action="{{ route('companies.store') }}">
    @csrf
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8"> 

        <style>
            input[type="text"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
            input[type="email"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
            input[type="tel"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
            input[type="url"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
            input[type="number"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
            input[type="date"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
        </style>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-14 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">General Information</span>
            </p>
        </div>   

        <div>
        <label for="name"> Company Name </label>
        <input type="text" id="name" name="name" value="{{ old('name')}}" required>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="phoneNo"> Phone No </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ old('phoneNo')}}">
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->

            <label  for="email"> Email </label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">

            <label  for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ old('website')}}">

        </div>


        <div>
            <input type="hidden" id="category" name="category" value='C'>
        </div>
    

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-14 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Detailed Overview</span>
            </p>
        </div>     

        <div>
            <label  for="registrationNo"> Registration No </label>
            <input type="text" id="registrationNo" name="registrationNo" value="{{ old('registrationNo')}}">
        </div>
        
        <div >
        <label> Main Sector</label><br>

        <input type="checkbox" id="companyMainSector" name="companyMainSector[]" value="Primary Agriculture">Primary Agriculture
        <input type="checkbox" id="companyMainSector" name="companyMainSector[]" value="Manufacturing(including agro-based)">Manufacturing(including agro-based)
        <input type="checkbox" id="companyMainSector" name="companyMainSector[]" value="Manufacturing-Related-Services(MRS)">Manufacturing-Related-Services (MRS)
        <input type="checkbox" id="companyMainSector" name="companyMainSector[]" value="Services/Mining & Quarrying/Construction">Services / Mining & Quarrying / Construction
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="primaryMSIC2008"> MSIC2008 Code [5-digits code of activity]</label>
            <input class="placeholder-gray-500 border" placeholder="primary" type="number" id="primaryMSIC2008" name="primaryMSIC2008" value="{{ old('primaryMSIC2008')}}">
            <input class="placeholder-gray-500 border" placeholder="secondary" type="number" id="secondaryMSIC2008" name="secondaryMSIC2008" value="{{ old('secondaryMSIC2008')}}">
            <input class="placeholder-gray-500 border" placeholder="tertiary" type="number" id="tertiaryMSIC2008" name="tertiaryMSIC2008" value="{{ old('tertiaryMSIC2008')}}">
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="natureOfActivity"> Nature of Business</label>
            <input type="text" id="natureOfActivity" name="natureOfActivity" value="{{ old('natureOfActivity')}}">
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="financeYearCalendar"> Financial Year Calendar</label>
            <input type="date" id="financeYearCalendar" name="financeYearCalendar" value="{{ old('financeYearCalendar')}}">

            <label  for="latestRevenue"> Latest Revenue (RM)</label>
            <input type="number" step="any" id="latestRevenue" name="latestRevenue" value="{{ old('latestRevenue')}}">

            <label  for="latestNoEmployee"> Latest Number of Employee(s) </label>
            <input type="number" id="latestNoEmployee" name="latestNoEmployee" value="{{ old('latestNoEmployee')}}">

        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-14 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">STA Ecosystem</span>
            </p>
        </div>  

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">

            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Robotics&Automation">Robotics & Automation 
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="S.I.">S.I.
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Developers">Developers
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="IT">IT
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Infrastructure">Infrastructure
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="ERP">ERP
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="MOM">MOM
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="MES">MES
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="CRM">CRM
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="SRM">SRM
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Sales">Sales
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AGV">AGV
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AMR">AMR            
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Social">Social
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Edutainment">Edutainment
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Service Robot">Service Robot
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="OEM-Arm,COBOT,Sensor,Actuator">OEM - Arm, COBOT, Sensor, Actuator 
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Talent">Talent
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Skills Dev">Skills Dev
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AS/RS">AS/RS
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="3DP">3DP
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AddMfg">AddMfg
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="UAV">UAV
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Drone">Drone  

        </div>
        <div>
            <label  for="productAndService"> Product And Service</label>
            <input type="text" id="productAndService" name="productAndService" value="{{ old('productAndService')}}">
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-14 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Address Information</span>
            </p>
        </div>  

        <div>
            <!-- Address -->

            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label  for="address"> Address </label>
                <input type="text" id="address" name="address" value="{{ old('address')}}">
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label  for="postCode"> Post Code </label>
                <input type="text" id="postCode" name="postCode" value="{{ old('postCode')}}">
                
                <label  for="city"> City </label>
                <input type="text" id="city" name="city" value="{{ old('city')}}">

                <label  for="state"> State </label>
                <select id="state" name="state">
                <option value="Johor">Johor</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Malacca">Malacca</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Pahang">Pahang</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Perlis">Perlis</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Selangor">Selangor</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Labuan">Labuan</option>
                <option value="Putrajaya">Putrajaya</option>
            </select>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label  for="country"> Country </label>
                <input type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="workplaceCategory"> Workplace Category</label>
            <select id="workplaceCategory" name="workplaceCategory">
                <option value="M">Main</option>
                <option value="B">Branch</option>
                <option value="F">Factory</option>
            </select>
            </div>
    
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <!-- there's probably a css file conflicting, cuz can't use tailwind class to style -syamir to taash -->
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>    
        </div>
        
    </form>

</div>

</x-app-layout>
