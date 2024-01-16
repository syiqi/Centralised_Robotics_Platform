

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


</x-app-layout>