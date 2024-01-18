<x-app-layout>

<div>

    <form method="POST" action="{{ route('companies.store') }}">
    @csrf
        <div>
            <label  for="name"> Name </label>
            <input type="text" id="name" name="name" value="{{ old('name')}}" required>
        </div>
        <div>
            <label  for="phoneNo"> PhoneLinging </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ old('phoneNo')}}">
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <div>
            <label  for="email"> EMAIL </label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">
        </div>
        <div>
            <label  for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ old('website')}}">
        </div>
        <div>
            <input type="hidden" id="category" name="category" value='C'>
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
        <div>
            <label  for="primaryMSIC2008"> MSIC2008 Code (Primary) *5-digits code of activity*</label>
            <input type="number" id="primaryMSIC2008" name="primaryMSIC2008" value="{{ old('primaryMSIC2008')}}">
        </div>
        <div>
            <label  for="secondaryMSIC2008"> MSIC2008 Code (Secondary) *5-digits code of activity*</label>
            <input type="number" id="secondaryMSIC2008" name="secondaryMSIC2008" value="{{ old('secondaryMSIC2008')}}">
        </div>
        <div>
            <label  for="tertiaryMSIC2008"> MSIC2008 Code (Tertiary) *5-digits code of activity*</label>
            <input type="number" id="tertiaryMSIC2008" name="tertiaryMSIC2008" value="{{ old('tertiaryMSIC2008')}}">
        </div>
        <div>
            <label  for="natureOfActivity"> Nature of Business</label>
            <input type="text" id="natureOfActivity" name="natureOfActivity" value="{{ old('natureOfActivity')}}">
        </div>
        <div>
            <label  for="financeYearCalendar"> Financial Year Calendar (Start Date) </label>
            <input type="date" id="financeYearCalendar" name="financeYearCalendar" value="{{ old('financeYearCalendar')}}">
        </div>
        <div>
            <label  for="latestRevenue"> Latest Revenue (RM) - (audited year)  </label>
            <input type="number" step="any" id="latestRevenue" name="latestRevenue" value="{{ old('latestRevenue')}}">
        </div>
        <div>
            <label  for="latestNoEmployee"> Latest Number of Employee(s) </label>
            <input type="number" id="latestNoEmployee" name="latestNoEmployee" value="{{ old('latestNoEmployee')}}">
        </div>
        <div >
            <label> STA Ecosystem</label><br>

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


        <div>
            <!-- Address -->

            <div>
                <label  for="address"> Address </label>
                <input type="text" id="address" name="address" value="{{ old('address')}}">
            </div>
            <div>
                <label  for="city"> City </label>
                <input type="text" id="city" name="city" value="{{ old('city')}}">
            </div>
            <div>
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
            <div>
                <label  for="postCode"> Post Code </label>
                <input type="text" id="postCode" name="postCode" value="{{ old('postCode')}}">
            </div>
            <div>
                <label  for="country"> Country </label>
                <input type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
            <div>
            <label  for="workplaceCategory"> Workplace Category</label>
            <select id="workplaceCategory" name="workplaceCategory">
                <option value="M">Main</option>
                <option value="B">Branch</option>
                <option value="F">Factory</option>
            </select>
            </div>
    
        </div>

        <div>
            <button  type="submit">Submit</button>    
        </div>
        
    </form>

</div>

</x-app-layout>
