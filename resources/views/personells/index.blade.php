<x-app-layout>
<div class="container mt-5">
<table id="personellTable" class="text-white">
    <thead>
        <tr>
            <th>Entry</th>
            <th>Name</th>
            <th>Position</th>
            <th>Job Title</th>
            <th>Department / Division</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Employed At</th>
            <th></th>

        </tr>
        <tbody>
            @foreach($personells as $personell)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$personell->personName ?? 'Unavailable' }}</td>
                <td>{{$personell->personPosition ?? 'Unemployed' }}</td>
                <td>{{$personell->personJobTitle ?? 'Unknown' }}</td>
                <td>{{$personell->personDeptDiv ?? 'Unknown' }}</td>
                <td>{{$personell->personEmail ?? 'Unknown' }}</td>
                <td>{{$personell->personNumber ?? 'Unknown' }}</td>
                <td>{{$personell->organization->name ?? 'Unemployed' }}</td>
                <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">View Details</a></td>
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
    $('#personellTable').DataTable();
} );
</script>


</x-app-layout>
