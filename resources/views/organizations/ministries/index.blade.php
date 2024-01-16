<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<x-app-layout>
<div class="container mt-5">
<table id="ministryTable" class="text-white">
    <thead>
        <tr>
            <th>Entry</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Website</th>
            <th></th>
        </tr>
        <tbody>
            @foreach($ministries as $ministry)
            <tr>
            <td>{{$loop->iteration}}</td>
                <td>{{$ministry->organization->name ?? '~' }}</td>
                <td>{{$ministry->organization->phoneNo ?? '~' }}</td>
                <td>{{$ministry->organization->email ?? '~' }}</td>
                <td><a href="{{$ministry->organization->website ?? '' }}">
                    @if(empty($ministry->organization->website))
                    Unknown/Unavailable
                    @else
                    <u>Visit Website</u>
                    @endif
                </a></td>
                <td><a href="{{ route('ministries.show', ['ministry' => $ministry['id']])}}">View Details</a></td> 
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
    $('#ministryTable').DataTable();
} );
</script>
<script>
    function confirmDelete() {
            var isConfirmed = confirm("Are you sure you want to delete?");
            if (isConfirmed) {
                // If confirmed, submit the form
                document.getElementById('deleteForm').submit();
            }
        }
</script>

</x-app-layout>