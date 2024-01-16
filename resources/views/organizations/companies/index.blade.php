

<x-app-layout>
<div class="container mt-5">
<table id="companyTable" class="text-white">
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
                $mainSector=json_decode($company->companyMainSector);
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
                <td>{{ is_array($mainSector) ? implode(', ', $mainSector) : ($mainSector ?? '~') }}</td>
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
$(document).ready( function () {
    $('#companyTable').DataTable();
} );
</script>

</x-app-layout>