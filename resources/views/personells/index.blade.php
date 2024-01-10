@php
use App\Models\Personell;
@endphp
<x-app-layout>

<div>
        <form action="{{ route('personells.index') }}" method="GET">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>

        <form class="text-white" action="{{ route('personells.index') }}" method="GET" id="positionFilterForm">
    <input type="hidden" name="search" value="{{ $request->input('search') }}">
    <p>Filter by Position:</p>
        <label>
            <input type="checkbox" name="positions[]" value="Staff" {{ in_array('Staff', $positions) ? 'checked' : '' }} onclick="submitPositionFilter()"> Staff Level
        </label>
        <label>
            <input type="checkbox" name="positions[]" value="E" {{ in_array('E', $positions) ? 'checked' : '' }} onclick="submitPositionFilter()"> Executive Level
        </label>
        <label>
            <input type="checkbox" name="positions[]" value="M" {{ in_array('M', $positions) ? 'checked' : '' }} onclick="submitPositionFilter()"> Managerial Level
        </label>
        <label>
            <input type="checkbox" name="positions[]" value="C" {{ in_array('C', $positions) ? 'checked' : '' }} onclick="submitPositionFilter()"> Chief Level
        </label>
    </form>

    <a href="{{route('personells.index')}}"><button>Reset Filter</button></a>

        <table class="text-white">
            <thead>
                <tr>
                <th>Count</th>
                <th><a href="{{ route('personells.index', ['search' => $request->input('search'), 'sort_by' => 'personName', 'sort_order' => $sortBy == 'personName' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc', 'positions' => $positions]) }}">Name</a></th>
                <th><a href="{{ route('personells.index', ['search' => $request->input('search'), 'sort_by' => 'personPosition', 'sort_order' => $sortBy == 'personPosition' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc', 'positions' => $positions]) }}">Position</a></th>
                <th><a href="{{ route('personells.index', ['search' => $request->input('search'), 'sort_by' => 'personJobTitle', 'sort_order' => $sortBy == 'personJobTitle' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc', 'positions' => $positions]) }}">Job Title</a></th>
                <th><a href="{{ route('personells.index', ['search' => $request->input('search'), 'sort_by' => 'personDeptDiv', 'sort_order' => $sortBy == 'personDeptDiv' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc', 'positions' => $positions]) }}">Department / Division</a></th>
                <th><a href="{{ route('personells.index', ['search' => $request->input('search'), 'sort_by' => 'personEmail', 'sort_order' => $sortBy == 'personEmail' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc', 'positions' => $positions]) }}">Email</a></th>
                <th><a href="{{ route('personells.index', ['search' => $request->input('search'), 'sort_by' => 'personNumber', 'sort_order' => $sortBy == 'personNumber' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc', 'positions' => $positions]) }}">Number</a></th>    
                <th><a href="{{ route('personells.index', ['search' => $request->input('search'), 'sort_by' => 'organizationID', 'sort_order' => $sortBy == 'organizationID' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc', 'positions' => $positions]) }}">Employed at</a></th>                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($personell as $index => $person)
                    <tr>
                        <td>{{ $index + 1}}</a></td>
                        <td>{{ $person['personName'] }}</td>
                        <td>{{ $person['personPosition'] ?? 'Unemployed' }}</td>
                        <td>{{ $person['personJobTitle'] }}</td>
                        <td>{{ $person['personDeptDiv'] }}</td>
                        <td>{{ $person['personEmail'] }}</td>
                        <td>{{ $person['personNumber'] }}</td>
                        <td>{{ $person->organization->name ?? 'Unemployed' }}</td>
                        <td><a href="{{ route('personells.show', ['personell' => $person['id']])}}">View Details</a></td>
                        <td><form id="deleteForm" action="{{ route('personells.destroy',['personell'=> $person['id']]) }}" method="POST">
            @csrf
            @method('DELETE')

            <!-- Add a JavaScript onclick event to show the confirmation dialog -->
            <button class="text-white" type="button" onclick="confirmDelete()">DELETE</button></td>
        </form>
                        
                        <!-- Add other columns as needed -->
                @endforeach
            </tbody>
        </table>

        {{ $personell->links() }}
    </div>


    <script>
    function submitPositionFilter() {
        var positionForm = document.getElementById("positionFilterForm");
        positionForm.submit();
    }


    function confirmDelete() {
            var isConfirmed = confirm("Are you sure you want to delete?");
            if (isConfirmed) {
                // If confirmed, submit the form
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
</script>

</x-app-layout>

<!-- Why use GET - since this is for the superadmin side, i think it can help them to filter in out of the box way since they understand how the system works -->