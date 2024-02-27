<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Register Association') }}
        </h2>
    </x-slot>

<div>
            <!-- Association Create Form-->

    <form method="POST" action="{{ route('associations.store') }}">
    @csrf

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">General Information</span>
            </p>
        </div>    

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">    
            <label for="name"> Association Name</label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="name" name="name" value="{{ old('name')}}" class="w-full">
        </div>
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 flex justify-between">
            <div class="flex-1 mr-4">
                <label  for="phoneNo"> Phone No </label>
                <input class="mt-1 p-2 block w-full  border rounded-md" type="tel" id="phoneNo" name="phoneNo" value="{{ old('phoneNo')}}">
            </div>
            <div class="flex-1 mr-4">
                <label  for="email"> Email </label>
                <input class="mt-1 p-2 block w-full  border rounded-md" type="email" id="email" name="email" value="{{ old('email')}}">
            </div>
            <div class="flex-1">
                <label  for="website"> Website </label>
                <input class="mt-1 p-2 block w-full  border rounded-md" type="url" id="website" name="website" value="{{ old('website')}}">
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Detailed Overview</span>
            </p>
        </div>   

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <input type="hidden" id="category" name="category" value='A'>
        </div>


        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 my-8">
            <div class="flex flex-row">
            <label class = "mx-4" for="registrationNo">Registration No (ROS) </label>
            <input class="mt-1 p-2 block w-1/6 border rounded-md" type="text" id="registrationNo" name="registrationNo" value="{{ old('registrationNo')}}">

            <label class = "mx-4" for="mainCategory">Main Category</label>
            <select class="mt-1 p-2 block w-1/6 border rounded-md" id="mainCategory" name="mainCategory">
                <option value="">Unknown</option>
                <option value="Political">Political</option>
                <option value="Shared Benefits">Shared Benefits</option>
                <option value="Human Rights">Human Rights</option>
                <option value="Religious">Religious</option>
                <option value="Professionalism">Professionalism</option>
                <option value="Welfare">Welfare</option>
                <option value="Art & Cultural">Art & Cultural</option>
                <option value="Security">Security</option>
                <option value="Trade">Trade</option>
                <option value="Recreation">Recreation</option>
                <option value="Social">Social</option>
            </select>

            <label for="subCategory">Sub Category</label>
            <select class="mt-1 p-2 block w-1/6 border rounded-md" id="subCategory" name="subCategory">
                <!-- This select will be populated dynamically based on the selected country -->
            </select>
            </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Define a mapping of main to subs
        var subByMain = {
            'Political': ['None'],
            'Shared Benefits': ['Death Benefits', 'General'],
            'Human Rights': ['Nature', 'Humanity', 'Consumer'],
            'Religious': ['Devotees Society'],
            'Professionalism': ['General'],
            'Welfare': ['OKU', 'Seniors', 'Children', 'Nursing Home', 'Single Mother', "Member's Welfare", "Societal's Welfare"],
            'Art & Cultural': ['Dancing/Singing/Music', 'Drama/Theather', 'Tradtional Games', 'Martial Arts', 'Paintings', 'Handcrafts', 'Literature'],
            'Security': ['Volunteer Firefighters', 'Crime Preventation'],
            'Trade': ['Trade Chambers', 'Manufacturing Industry', 'Small Medium Enterprise', 'Small Retailers & Hawkers', 'Services'],
            'Recreation': ['General Recreation', 'Exercise', 'Hobby'],
            'Social': ['Neighbourhood', 'Alumni', 'Heritage', 'Occupational', 'Educational']
            // Add other main-sub mappings as needed
        };

        // Function to update the sub select options based on the selected main
        function updateSub() {
            var mainId = $('#mainCategory').val();
            var subCategories = subByMain[mainId] || [];

            // Clear existing options
            $('#subCategory').empty();

            // Add new options based on the selected main
            $.each(subCategories, function(index, subCategory) {
                $('#subCategory').append('<option value="' + subCategory + '">' + subCategory + '</option>');
            });
        }

        // Initial update on page load
        updateSub();

        // Bind the updateSub function to the change event of the Main select
        $('#mainCategory').on('change', updateSub);
    </script>
        </div>
        

</div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label for="natureOfActivity"> Nature of Activity</label>
            <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="natureOfActivity" name="natureOfActivity" value="{{ old('natureOfActivity')}}" class="w-full">
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Address Information</span>
            </p>
        </div>   


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <!-- Address -->

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label for="address"> Address</label>
                <input class = "mt-1 p-2 block w-full  border rounded-md"  type="text" id="address" name="address" value="{{ old('address')}}" class="w-full">
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 flex justify-between">
                <div class="flex-1 mr-4">
                    <label  for="postCode"> Post Code </label>
                    <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="postCode" name="postCode" value="{{ old('postCode')}}">
                </div>
                <div class="flex-1 mr-4">
                    <label  for="city"> City </label>
                    <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="city" name="city" value="{{ old('city')}}">
                </div>
            <div class="flex-1 mr-4">
                <label  for="state"> State </label>
                <select class="mt-1 p-2 block w-full  border rounded-md" id="state" name="state">
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
                <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
        </div>
    
    </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label  class = "mx-8" for="workplaceCategory"> Workplace Category</label>
                <select class="mx-8 mt-1 p-2 block w-1/3  border rounded-md" id="workplaceCategory" name="workplaceCategory">
                <option value="M"> Main (incl. Manufacturing & Services Activity)</option>
                </select>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>    
            </div>

        </form>

    </div>

</div>

</x-app-layout>