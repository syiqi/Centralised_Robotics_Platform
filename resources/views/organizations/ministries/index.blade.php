

<x-app-layout>

    <div>
        <form action="{{ route('ministries.index') }}" method="GET">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>



        <a href="{{route('ministries.index')}}"><button>Reset Filter</button></a>

        <table class="text-white">
            <thead>
                <tr>
                    <th><a href="{{ route('ministries.index', ['search' => $request->input('search'), 'sort_by' => 'id', 'sort_order' => $sortBy == 'id' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc']) }}">ID</a></th>
                    <th><a href="{{ route('ministries.index', ['search' => $request->input('search'), 'sort_by' => 'name', 'sort_order' => $sortBy == 'name' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc']) }}">Name</a></th>
                    <th><a href="{{ route('ministries.index', ['search' => $request->input('search'), 'sort_by' => 'phoneNo', 'sort_order' => $sortBy == 'phoneNo' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc']) }}">Phone No</a></th>
                    <th><a href="{{ route('ministries.index', ['search' => $request->input('search'), 'sort_by' => 'email', 'sort_order' => $sortBy == 'email' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc']) }}">Email</a></th>
                    <th><a href="{{ route('ministries.index', ['search' => $request->input('search'), 'sort_by' => 'website', 'sort_order' => $sortBy == 'website' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc']) }}">Website</a></th>
                    
                    <!-- Add other columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($ministries as $ministry)
                    <tr>
                        <td>{{ $ministry->id }}</td> 
                        <td>{{ $ministry->name }}</td>
                        <td>{{ $ministry->phoneNo }}</td>
                        <td>{{ $ministry->email }}</td>
                        <td>{{ $ministry->website }}</td>
                        <td><a href="{{ route('ministries.show', ['ministry' => $ministry['id']])}}">View Details</a></td>
                        <!-- Add other columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $ministries->links() }}
    </div>

</x-app-layout>