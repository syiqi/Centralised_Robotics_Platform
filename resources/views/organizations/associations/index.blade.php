
<x-app-layout>
<div class="container mt-5">
<table id="associationTable" class="text-white">
    <thead>
        <tr>
            <th>Entry</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Website</th>
            <th>Registration No.</th>
            <th>Nature Of Activity</th>
            <th>Main Category</th>
            <th>Sub Category</th>
            <th></th>
        </tr>
        <tbody>
            @foreach($associations as $association)
            <tr>
            <td>{{$loop->iteration}}</td>
                <td>{{$association->organization->name ?? '~' }}</td>
                <td>{{$association->organization->phoneNo ?? '~' }}</td>
                <td>{{$association->organization->email ?? '~' }}</td>
                <td><a href="{{$association->organization->website ?? '' }}">
                    @if(empty($association->organization->website))
                    Unknown/Unavailable
                    @else
                    <u>Visit Website</u>
                    @endif
                </a></td>
                <td>{{$association->registrationNo ?? '~' }}</td>
                <td>{{$association->natureOfActivity ?? '~' }}</td>
                <td>{{$association->mainCategory ?? '~' }}</td>
                <td>{{$association->subCategory ?? '~' }}</td>
            <td><a href="{{ route('associations.show', ['association' => $association['id']])}}">View Details</a></td>
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
    $('#associationTable').DataTable();
} );
</script>


</x-app-layout>