
@php
    use App\Models\Organization;
    $organizations = Organization::all();
@endphp
<x-app-layout>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            
            
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Address Information</span>
            </p>
        </div>   

            
        <form method="POST" action="{{ route('workplaces.store') }}">
            @csrf
            <!-- Organization Name -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
                <label for="organizationID"> Organization Name </label>
                <select class = "mt-1 p-2 block w-full  border rounded-md" class="organization-select-input" id="organizationID" name="organizationID">
                    @foreach($organizations as $organization)
                        <option value="{{ $organization->id }}" data-category="{{ $organization->category }}">{{ $organization->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
                <label  for="address"> Address </label>
                <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="address" name="address" value="{{ old('address')}}">
            </div>
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4 flex justify-between">
            <div class="flex-1 mr-4">
                <label  for="postCode"> Post Code </label>
                <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="postCode" name="postCode" value="{{ old('postCode')}}">
            </div>
            <div class="flex-1 mr-4">
                <label  for="city"> City </label>
                <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="city" name="city" value="{{ old('city')}}">
            </div>
            <div class="flex-1 mr-4">
                <label  for="state"> State </label>
                <select class = "mt-1 p-2 block w-full  border rounded-md" id="state" name="state">
                <option value="Johor">Johor</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Malacca">Malacca</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Pahang">Pahang</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Perlis">Perlis</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Selangor">Selangor</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Labuan">Labuan</option>
                <option value="Putrajaya">Putrajaya</option>
            </select>
            </div>
            <div class="flex-1">
                <label  for="country"> Country </label>
                <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
        </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label for="workplaceCategory"> Workplace Category</label>
                <select class = "mt-1 p-2 block w-full  border rounded-md" id="workplaceCategory" name="workplaceCategory">
                    <option value="M">Main</option>
                    <option value="B" class="category-B">Branch</option>
                    <option value="F" class="category-B">Factory</option>
                </select>
            </div>
        

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
                <button type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>
            </div>
         
        </form>
   

    <script>
        $(document).ready(function () {
            // Initialize select2 for organization dropdown
            $('.organization-select-input').select2();

            // Hide Branch and Factory options initially
            $('.category-B').hide();

            // Update workplace category options when organization selection changes
            $('#organizationID').on('change', function () {
                var selectedCategory = $(this).find(':selected').data('category');
                updateWorkplaceCategoryOptions(selectedCategory);
            });

            function updateWorkplaceCategoryOptions(category) {
                var workplaceCategorySelect = $('#workplaceCategory');

                // Show/hide options based on the selected category
                if (category === 'A') {
                    workplaceCategorySelect.val('M').trigger('change'); // Select 'Main'
                    workplaceCategorySelect.find('.category-B').hide(); // Hide Branch and Factory
                } else {
                    workplaceCategorySelect.find('.category-B').show(); // Show Branch and Factory
                }
            }
        });
    </script>

</x-app-layout>
