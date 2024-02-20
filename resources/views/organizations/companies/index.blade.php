<style>
div.dataTables_wrapper {
        width: 1100px;
        margin: 10;
        
    }

    .checkbox-container {
        display: block;
        margin-bottom: 10px; /* Adjust the margin-bottom value as needed */
    }

</style>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Manage Companies') }}
        </h2>
    </x-slot>

<div class="flex flex-row">
<div class="mx-1">
<p class="font-bold"> SEARCH FILTER</p>
           <p class="font-semibold"> Main Sector </p>
        <label class="checkbox-container">
            <input type="checkbox" class="mainSectorCheckbox" value="Primary Agriculture"> Primary Agriculture
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainSectorCheckbox" value="agro"> Manufacturing (including agro-based)
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainSectorCheckbox" value="(MRS)"> Manufacturing-Related-Services (MRS)
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainSectorCheckbox" value="Services/Mining & Quarrying/Construction"> Services / Mining & Quarrying / Construction
        </label>



        <!-- Add more checkboxes for other main sectors as needed -->

                   <!-- Checkboxes for STA Ecosystem -->
        <div class="border-y-2"> 

                        <div x-data="{ showCheckboxes: false }">

        <button class="my-2" @click="showCheckboxes = !showCheckboxes" style="background-color: #D3D3D3; color: #00000; font-weight: 550; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">STA Ecosystem</button>
               <div x-show="showCheckboxes"> 
                <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Robotics"> Robotics
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Automation"> Automation 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="S.I."> S.I. 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Developers"> Developers
        </label>

        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="IT"> IT
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Infrastructure"> Infrastructure 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="ERP"> ERP
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="MOM"> MOM
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="MES"> MES 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="CRM"> CRM
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="SRM"> SRM
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Sales"> Sales 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="AGV"> AGV
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="AMR"> AMR 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Social"> Social
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Edutainment"> Edutainment
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Service Robot"> Service Robot 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="OEM - Arm"> OEM - Arm
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="COBOT"> COBOT
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Sensorr"> Sensor
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Actuator"> Actuator
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Talent"> Talent
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Skills Dev"> Skills Dev 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="AS/RS "> AS/RS 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="3DP"> 3DP 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="AddMfg "> AddMfg 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="UAV"> UAV
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="staEcosystemCheckbox" value="Drone"> Drone 
        </label>
        
</div> 
<div class="border-y-2"> 
<div x-data="{ showCheckboxes: false }">

        <button class="my-2" @click="showCheckboxes = !showCheckboxes" style="background-color: #D3D3D3; color: #00000; font-weight: 550; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">VCD Ecosystem</button>
               <div x-show="showCheckboxes"> 
                <label class="checkbox-container">
            <input type="checkbox" class="vcdEcosystemCheckbox" value="VCD1"> VCD1
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="vcdEcosystemCheckbox" value="VCD2"> VCD2 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="vcdEcosystemCheckbox" value="VCD3"> VCD3
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="vcdEcosystemCheckbox" value="VCD4"> VCD4
        </label>
</div>
</div>
</div>

<div class="border-y-2"> 
<div x-data="{ showCheckboxes: false }">

        <button class="my-2" @click="showCheckboxes = !showCheckboxes" style="background-color: #D3D3D3; color: #00000; font-weight: 550; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">SPD Ecosystem</button>
               <div x-show="showCheckboxes"> 
                <label class="checkbox-container">
            <input type="checkbox" class="spdEcosystemCheckbox" value="SPD1"> SPD1
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="spdEcosystemCheckbox" value="SPD2"> SPD2 
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="spdEcosystemCheckbox" value="SPD3"> SPD3
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="spdEcosystemCheckbox" value="SPD4"> SPD4
        </label>
</div>
</div>
</div>

</div>
</div>
</div>
        <!-- Add more checkboxes for other STA ecosystems as needed -->

<table id="companyTable" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Entry</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Website</th>
            <th>Registration No.</th>
            <th>Main Sector</th>
            <th>MSIC2008(Primary)</th>
            <th>MSIC2008(Secondary)</th>
            <th>MSIC2008(Tertiary)</th>
            <th>Nature Of Activity</th>
            <th>Financial Year Calendar</th>
            <th>Latest Revenue</th>
            <th>Latest No. Employee</th>
            <th>STA Ecosystem</th>
            <th>VCD Ecosystem</th>
            <th>SPD Ecosystem</th>
            <th>Product and Service</th>
            <th></th>
        </tr>
        <tbody>
            @foreach($companies as $company)
            <tr>
            @php
                $STA = json_decode($company->staEcosystem);
                $VCD = json_decode($company->vcdEcosystem);
                $SPD = json_decode($company->spdEcosystem);
            @endphp
            <td>{{$loop->iteration}}</td>
                <td>{{$company->organization->name ?? '~' }}</td>
                <td>{{$company->organization->phoneNo ?? '~' }}</td>
                <td>{{$company->organization->email ?? '~' }}</td>
                <td><a href="{{$company->organization->website ?? '' }}">
                    @if(empty($company->organization->website))
                    Unknown/Unavailable
                    @else
                    <u>Visit Website</u>
                    @endif
                </a></td>
                <td>{{$company->registrationNo ?? '~' }}</td>
                <td>{{$company->companyMainSector ?? '~' }}</td>
                <td>{{$company->primaryMSIC2008 ?? '~' }}</td>
                <td>{{$company->secondaryMSIC2008 ?? '~' }}</td>
                <td>{{$company->tertiaryMSIC2008 ?? '~' }}</td>
                <td>{{$company->natureOfActivity ?? '~' }}</td>
                <td>{{$company->financeYearCalendar ?? '~' }}</td>
                <td>{{$company->latestRevenue ?? '~' }}</td>
                <td>{{$company->latestNoEmployee ?? '~' }}</td>
                <td>{{ is_array($STA) ? implode(', ', $STA) : ($STA ?? '~') }}</td>
                <td>{{ is_array($VCD) ? implode(', ', $VCD) : ($VCD ?? '~') }}</td>
                <td>{{ is_array($SPD) ? implode(', ', $SPD) : ($SPD ?? '~') }}</td>
                <td>{{$company->productAndService ?? '~' }}</td>
                <td><a href="{{ route('companies.show', ['company' => $company['id']])}}" style="background-color: #008000; color: #ffffff; font-weight: bold; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">UPDATE/DELETE</a></td> 
            </tr>
            @endforeach
        </tbody>
    </thead>

</table>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready(function () {
            var table = $('#companyTable').DataTable();
            // Event handler for main sector checkbox changes
            $('.mainSectorCheckbox').on('change', function () {
                var checkedMainSectors = $('.mainSectorCheckbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // Use DataTables API to filter based on selected main sectors
                table.column(6).search(checkedMainSectors.join('|'), true, false).draw(); // 6 is the index of the "Main Sector" column
            });

            // Event handler for STA ecosystem checkbox changes
            $('.staEcosystemCheckbox').on('change', function () {
                var checkedSTA = $('.staEcosystemCheckbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // Use DataTables API to filter based on selected STA ecosystems
                table.column(14).search(checkedSTA.join('|'), true, false).draw(); // 14 is the index of the "STA Ecosystem" column
            });
            
            // Event handler for VCD ecosystem checkbox changes
                        $('.vcdEcosystemCheckbox').on('change', function () {
                var checkedVCD = $('.vcdEcosystemCheckbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // Use DataTables API to filter based on selected STA ecosystems
                table.column(15).search(checkedVCD.join('|'), true, false).draw(); // 15 is the index of the "VCD Ecosystem" column
            });

            // Event handler for SPD ecosystem checkbox changes
                        $('.spdEcosystemCheckbox').on('change', function () {
                var checkedSPD = $('.spdEcosystemCheckbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // Use DataTables API to filter based on selected STA ecosystems
                table.column(16).search(checkedSPD.join('|'), true, false).draw(); // 16 is the index of the "SPD Ecosystem" column
            });
        });
        
new DataTable('#companyTable', {
    scrollX: true
});
    </script>

</x-app-layout>