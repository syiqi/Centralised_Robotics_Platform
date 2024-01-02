<x-app-layout>

<div>

    <form method="POST" action="{{ route('companies.store') }}">
    @csrf
        <div>
            <label class="text-white" for="name"> Name </label>
            <input type="text" id="name" name="name" value="{{ old('name')}}" required>
        </div>
        <div>
            <label class="text-white" for="phoneNo"> PhoneLinging </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ old('phoneNo')}}">
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <div>
            <label class="text-white" for="email"> EMAIL </label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">
        </div>
        <div>
            <label class="text-white" for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ old('website')}}">
        </div>
        <div>
            <input type="hidden" id="category" name="category" value='C'>
        </div>
        <div>
            <label class="text-white" for="registrationNo"> Registration No </label>
            <input type="text" id="registrationNo" name="registrationNo" value="{{ old('registrationNo')}}">
        </div>
        <div class="text-white">
        <label> Main Sector</label><br>

        <input type="checkbox" id="companyMainSector" name="companyMainSector[]" value="Primary Agriculture">Primary Agriculture
        <input type="checkbox" id="companyMainSector" name="companyMainSector[]" value="Manufacturing(including agro-based)">Manufacturing(including agro-based)
        <input type="checkbox" id="companyMainSector" name="companyMainSector[]" value="Manufacturing-Related-Services(MRS)">Manufacturing-Related-Services (MRS)
        <input type="checkbox" id="companyMainSector" name="companyMainSector[]" value="Services/Mining & Quarrying/Construction">Services / Mining & Quarrying / Construction
        </div>
        <div>
            <label class="text-white" for="primaryMSIC2008"> MSIC2008 Code (Primary) *5-digits code of activity*</label>
            <input type="number" id="primaryMSIC2008" name="primaryMSIC2008" value="{{ old('primaryMSIC2008')}}">
        </div>
        <div>
            <label class="text-white" for="secondaryMSIC2008"> MSIC2008 Code (Secondary) *5-digits code of activity*</label>
            <input type="number" id="secondaryMSIC2008" name="secondaryMSIC2008" value="{{ old('secondaryMSIC2008')}}">
        </div>
        <div>
            <label class="text-white" for="tertiaryMSIC2008"> MSIC2008 Code (Tertiary) *5-digits code of activity*</label>
            <input type="number" id="tertiaryMSIC2008" name="tertiaryMSIC2008" value="{{ old('tertiaryMSIC2008')}}">
        </div>
        <div>
            <label class="text-white" for="natureOfActivity"> Nature of Business</label>
            <input type="text" id="natureOfActivity" name="natureOfActivity" value="{{ old('natureOfActivity')}}">
        </div>
        <div>
            <label class="text-white" for="financeYearCalendar"> Financial Year Calendar (Start Date) </label>
            <input type="date" id="financeYearCalendar" name="financeYearCalendar" value="{{ old('financeYearCalendar')}}">
        </div>
        <div>
            <label class="text-white" for="latestRevenue"> Latest Revenue (RM) - (audited year)  </label>
            <input type="number" step="any" id="latestRevenue" name="latestRevenue" value="{{ old('latestRevenue')}}">
        </div>
        <div>
            <label class="text-white" for="latestNoEmployee"> Latest Number of Employee(s) </label>
            <input type="number" id="latestNoEmployee" name="latestNoEmployee" value="{{ old('latestNoEmployee')}}">
        </div>
        <div class="text-white">
            <label> STA Ecosystem</label><br>

            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Robotics&Automation">Robotics & Automation 
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="S.I./Developers/IT/Infrastructure">S.I. / Developers / IT / Infrastructure 
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="ERP/MOM/MES">ERP / MOM / MES
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="CRM/SRM/Sales">CRM / SRM / Sales
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AGV/AMR">AGV / AMR
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Social/Edutainment/Service Robot">Social / Edutainment / Service Robot
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="OEM-Arm,COBOT,Sensor,Actuator">OEM - Arm, COBOT, Sensor, Actuator 
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="Talent/Skills Dev">Talent / Skills Dev
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="AS/RS">AS/RS
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="3DP/AddMfg">3DP / AddMfg
            <input type="checkbox" id="staEcosystem" name="staEcosystem[]" value="UAV/Drone">UAV / Drone  
        </div>
        <div>
            <label class="text-white" for="productAndService"> Product And Service</label>
            <input type="text" id="productAndService" name="productAndService" value="{{ old('productAndService')}}">
        </div>

        <div>
            <button class="text-white" type="submit">Submit</button>    
        </div>
        
    </form>

</div>

</x-app-layout>

<!-- Note:-
1) Error Messages if want
2) For Taashwin, can css now.
3) Hello.
4. LESGOOOOOOOOO 
5) Lets do it one more time
-->