

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

<div class="container mt-5">

       <!-- <select id="pricingType" name="pricingType"
            class="w-full h-10 border-2 border-sky-500 focus:outline-none focus:border-sky-500 text-sky-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
            <option value="All" selected="">All</option>
            <option value="Freemium">Freemium</option>
            <option value="Free">Free</option>
            <option value="Paid">Paid</option>
        </select>-->
    
             Checkboxes for Main Sector 
        <label>
            <input type="checkbox" class="mainSectorCheckbox" value="Primary Agriculture"> Primary Agriculture
        </label>
        <label>
            <input type="checkbox" class="mainSectorCheckbox" value="agro"> Manufacturing (including agro-based)
        </label>
        <label>
            <input type="checkbox" class="mainSectorCheckbox" value="(MRS)"> Manufacturing-Related-Services (MRS)
        </label>
        <label>
            <input type="checkbox" class="mainSectorCheckbox" value="Services/Mining & Quarrying/Construction"> Services / Mining & Quarrying / Construction
        </label>

        <!-- Add more checkboxes for other main sectors as needed -->

        <!-- Checkboxes for STA Ecosystem -->
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Robotics"> Robotics
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Automation">Automation 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="S.I."> S.I. 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Developers"> Developers
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="IT"> IT
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Infrastructure"> Infrastructure 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="ERP"> ERP
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="MOM"> MOM
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="MES"> MES 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="CRM"> CRM
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="SRM"> SRM
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Sales"> Sales 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="AGV"> AGV
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="AMR"> AMR 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Social"> Social
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Edutainment"> Edutainment
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Service Robot"> Service Robot 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="OEM - Arm"> OEM - Arm
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="COBOT"> COBOT
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Sensorr"> Sensor
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Actuator"> Actuator
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Talent"> Talent
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Skills Dev"> Skills Dev 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="AS/RS "> AS/RS 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="3DP"> 3DP 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="AddMfg "> AddMfg 
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="UAV"> UAV
        </label>
        <label>
            <input type="checkbox" class="staEcosystemCheckbox" value="Drone"> Drone 
        </label>

        <!-- Add more checkboxes for other STA ecosystems as needed -->

<table id="companyTable" >
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
            <th>Product and Service</th>
            <th></th>
        </tr>
        <tbody>
            @foreach($companies as $company)
            <tr>
            @php
                $STA = json_decode($company->staEcosystem);
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
                <td>{{$company->productAndService ?? '~' }}</td>
                <td><a href="{{ route('companies.show', ['company' => $company['id']])}}">View Details</a></td> 
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
        });
    </script>

</x-app-layout>