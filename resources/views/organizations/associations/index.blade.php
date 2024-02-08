<style>
div.dataTables_wrapper {
        width: 1050px;
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
            {{ __('Manage Associations') }}
        </h2>
    </x-slot>
<div class="flex flex-row">
<div class="bg-gradient-to-b from-gray-100 to-white-gray-500">
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Political"> Political
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Shared Benefits"> Shared Benefits
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Human Rights"> Human Rights
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Religious"> Religious
        </label>
        <div x-data="{ showCheckboxes: false }">
    <button @click="showCheckboxes = !showCheckboxes">More±</button>
        <div x-show="showCheckboxes">
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Professionalism"> Professionalism
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Welfare"> Welfare
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Art & Cultural"> Art & Cultural
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Security"> Security
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Trade"> Trade
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Recreation"> Recreation
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="mainCategoryCheckbox" value="Social"> Social
        </label>
        </div> 
</div>

        Sub Category
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Death Benefits"> Death Benefits
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="General"> General
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Nature"> Nature
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Humanity"> Humanity
        </label>
        <div x-data="{ showCheckboxes: false }">
    <button @click="showCheckboxes = !showCheckboxes">More±</button>
        <div x-show="showCheckboxes">
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Consumer"> Consumer
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Devotees Society"> Devotees Society
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="General"> General
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="OKU"> OKU
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Seniors"> Seniors
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Children"> Children
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Nursing Home"> Nursing Home
        </label>
        <label>
            <input type="checkbox" class="subCategoryCheckbox" value="Single Mother"> Single Mother
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Member's Welfare"> Member's Welfare
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Societal's Welfare"> Societal's Welfare
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Dancing\/Singing\/Music"> Dancing/Singing/Music
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Drama\/Theather"> Drama/Theather
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Tradtional Games"> Tradtional Games
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Martial Arts"> Martial Arts
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Paintings"> Paintings
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Handcrafts"> Handcrafts
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Literature"> Literature
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Volunteer Firefighters"> Volunteer Firefighters
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Crime Preventation"> Crime Preventation
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Trade Chambers"> Trade Chambers
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Manufacturing Industry"> Manufacturing Industry
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Small Medium Enterprise"> Small Medium Enterprise
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Small Retailers & Hawkers"> Small Retailers & Hawkers
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Services"> Services
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="General Recreation"> General Recreation
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Exercise"> Exercise
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Hobby"> Hobby
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Neighbourhood"> Neighbourhood
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Alumni"> Alumni
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Heritage"> Heritage
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Occupational"> Occupational
        </label>
        <label class="checkbox-container">
            <input type="checkbox" class="subCategoryCheckbox" value="Educational"> Educational
        </label>
        </div> 
</div>
</div>
<table id="associationTable" class="display nowrap" style="width:100%">
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
            <td><a href="{{ route('associations.show', ['association' => $association['id']])}}" style="background-color: #008000; color: #ffffff; font-weight: bold; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">UPDATE/DELETE</a></td>
            </tr>
            @endforeach
        </tbody>
    </thead>

</table>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready(function () {
            var table = $('#associationTable').DataTable();

            // Event handler for main category checkbox changes
            $('.mainCategoryCheckbox').on('change', function () {
                var checkedMainCategories = $('.mainCategoryCheckbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // Use DataTables API to filter based on selected main categories
                table.column(7).search(checkedMainCategories.join('|'), true, false).draw(); // 7 is the index of the "Main Category" column
            });

            // Event handler for sub category checkbox changes
            $('.subCategoryCheckbox').on('change', function () {
                var checkedSubCategories = $('.subCategoryCheckbox:checked').map(function () {
                    return $(this).val();
                }).get();

                // Use DataTables API to filter based on selected sub categories
                table.column(8).search(checkedSubCategories.join('|'), true, false).draw(); // 8 is the index of the "Sub Category" column
            });
        });
        new DataTable('#associationTable', {
    scrollX: true
});
    </script>


</x-app-layout>