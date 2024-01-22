<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Register Association') }}
        </h2>
    </x-slot>

<div>

    <form method="POST" action="{{ route('associations.store') }}">
    @csrf
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8"> 

        <style>
            input[type="text"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
            input[type="email"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
            input[type="tel"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
            input[type="url"] {
                border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
            }
        </style>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">General Information</span>
            </p>
        </div>    

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label for="name"> Association Name</label>
            <input type="text" id="name" name="name" value="{{ old('name')}}" class="w-full">
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="phoneNo"> Phone No </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ old('phoneNo')}}">
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->

            <label  for="email"> Email </label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">

            <label  for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ old('website')}}">

        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Detailed Overview</span>
            </p>
        </div>   

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <input type="hidden" id="category" name="category" value='A'>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="registrationNo"> Registration No </label>
            <input type="text" id="registrationNo" name="registrationNo" value="{{ old('registrationNo')}}">

        
        <!-- 2 Selection where SubCategory Selection will output options based on the MainCategory Selection -->
                <!-- Your Main select -->
   
        <label  for="mainCategory"> Main Category</label>
        <select id="mainCategory" name="mainCategory">
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

            <!-- Add other options as needed -->
        </select>

        <!-- Your Sub select -->
        <label  for="subCategory"> Sub Category</label>
        <select id="subCategory" name="subCategory">
            <!-- This select will be populated dynamically based on the selected country -->
        </select>

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

                // Add a default option
                $('#subCategory').append('<option value="">Select a Sub Category</option>');

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
            <input type="text" id="natureOfActivity" name="natureOfActivity" value="{{ old('natureOfActivity')}}" class="w-full">
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
                <input type="text" id="address" name="address" value="{{ old('address')}}" class="w-full">
            </div>
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label  for="postCode"> Post Code </label>
                <input type="text" id="postCode" name="postCode" value="{{ old('postCode')}}">

                <label  for="city"> City </label>
                <input type="text" id="city" name="city" value="{{ old('city')}}">

                <label  for="state"> State </label>
                <select id="state" name="state">
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label  for="country"> Country </label>
                <input type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="workplaceCategory"> Workplace Category</label>
            <select id="workplaceCategory" name="workplaceCategory">
                <option value="M">Main</option>
                <option value="B">Branch</option>
                <option value="F">Factory</option>
            </select>
            </div>
    
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <!-- there's probably a css file conflicting, cuz can't use tailwind class to style -syamir to taash -->
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>    
        </div>

    </form>

    </div>

</div>

</x-app-layout>

<!-- Note:-
1) Error Messages if want
2) For Taashwin, can css now.
3) Hello.
4. LESGOOOOOOOOO 
5) Lets do it one more time
-->