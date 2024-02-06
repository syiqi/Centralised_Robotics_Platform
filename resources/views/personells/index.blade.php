<style>
div.dataTables_wrapper {
        width: 1200px;
        margin: 10;
        
    }

    .checkbox-container {
        display: block;
        margin-bottom: 10px; /* Adjust the margin-bottom value as needed */
    }

</style>

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Personnels') }}
        </h2>
    </x-slot>
<div class="flex flex-row">
    <div class="bg-gradient-to-b from-gray-100 to-white-gray-500">
        <label class="checkbox-container">
            <input type="checkbox" class="positionCheckbox" value="C"> C
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="positionCheckbox" value="M"> M
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="positionCheckbox" value="E"> E
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="positionCheckbox" value="Staff"> Staff
        </label>
</div>
<table id="personellTable" class="display nowrap" style="width:100%">
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
                <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}" style="background-color: #008000; color: #ffffff; font-weight: bold; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">View Details</a></td>
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
<script>
        $(document).ready(function () {
            var table = $('#personellTable').DataTable();

            // Event handler for checkbox changes
            $('.positionCheckbox').on('change', function () {
                var checkedPositions = $('.positionCheckbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // Use DataTables API to filter based on selected positions
                table.column(2).search(checkedPositions.join('|'), true, false).draw();
            });
        });

        new DataTable('#personellTable', {
    scrollX: true
});
    </script>

</x-app-layout>
