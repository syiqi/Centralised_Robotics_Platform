@php
use App\Models\Organization;
@endphp
<x-app-layout>


<div class= 'text-gray-300' >
            <form action="{{ route('personells.index') }}" method="GET">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th><a href="{{ route('personells.index', ['sort_by' => 'personName', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                    <th><a href="{{ route('personells.index', ['sort_by' => 'personPosition', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">Position</a></th>
                    <th><a href="{{ route('personells.index', ['sort_by' => 'personJobTitle', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">Job Title</a></th>
                    <th><a href="{{ route('personells.index', ['sort_by' => 'personDeptDiv', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">Department/Division</a></th>
                    <th><a href="{{ route('personells.index', ['sort_by' => 'personEmail', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">Email</a></th>
                    <th><a href="{{ route('personells.index', ['sort_by' => 'personNumber', 'sort_order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}">Contact Number</a></th>






                    <!-- Add other columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($personell as $person)
                    <tr>
                        <td>{{ $person->personName }}</td>
                        <td>{{ $person->personEmail }}</td>
                        <!-- Add other columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $personell->links() }}
    </div>



</x-app-layout>