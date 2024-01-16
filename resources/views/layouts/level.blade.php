@php
use App\Models\Personell;
@endphp

<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<div class="container mt-5">
<table id="personellTable{{$level}}" class="text-white">
    <thead>
        <tr>
            <th>Name</th>
            <th>Job Title</th>
            <th>Department / Division</th>
            <th>Email</th>
            <th>Phone Number</th>

            <th></th>

        </tr>
        <tbody>
            @foreach(Personell::all() as $personell)
            @if(!empty($personell->organization->id))
            @if($personell->organization->id==$organization['id'] && $personell->personPosition==$level)
            <tr>
                <td>{{$personell->personName ?? 'Unavailable' }}</td>
                <td>{{$personell->personJobTitle ?? 'Unknown' }}</td>
                <td>{{$personell->personDeptDiv ?? 'Unknown' }}</td>
                <td>{{$personell->personEmail ?? 'Unknown' }}</td>
                <td>{{$personell->personNumber ?? 'Unknown' }}</td>
                <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">View Details</a></td>
            </tr>
            @endif
            @endif
            @endforeach
        </tbody>
    </thead>

</table>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#personellTable{{$level}}').DataTable();
} );
</script>

