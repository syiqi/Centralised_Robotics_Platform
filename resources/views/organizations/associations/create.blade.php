<x-app-layout>

<div>

    <form method="POST" action="{{ route('associations.store') }}">
    @csrf
        <div>
            <label class="text-white" for="name"> Name </label>
            <input type="text" id="name" name="name" value="{{ old('name')}}" required>
        </div>
        <div>
            <label class="text-white" for="phoneNo"> PhoneLinging </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ old('phoneNo')}}">
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <div>
            <label class="text-white" for="email"> EMAIL </label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">
        </div>
        <div>
            <label class="text-white" for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ old('website')}}">
        </div>
        <div>
            <input type="hidden" id="category" name="category" value='A'>
        </div>
        <div>
            <label class="text-white" for="registrationNo"> Registration No </label>
            <input type="text" id="registrationNo" name="registrationNo" value="{{ old('registrationNo')}}">
        </div>
        <div>
            <label class="text-white" for="natureOfActivity"> Nature of Activity</label>
            <input type="text" id="natureOfActivity" name="natureOfActivity" value="{{ old('natureOfActivity')}}">
        </div>
<!-- 2 Selection where SubCategory Selection will output options based on the MainCategory Selection -->
        <!-- Your Main select -->
        <div>
<label class="text-white" for="mainCategory"> Main Category</label>
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
<label class="text-white" for="subCategory"> Sub Category</label>
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
        <div>
            <button class="text-white" type="submit">Submit</button>    
        </div>

    </form>

</div>

</x-app-layout>

<!-- Note:-
1) Error Messages if want
2) For Taashwin, can css now.
3) Hello.